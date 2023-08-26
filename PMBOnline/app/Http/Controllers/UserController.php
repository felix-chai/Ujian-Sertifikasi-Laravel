<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Kabupaten;
use App\Models\Provinsi;
use PDF;




class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::latest()->paginate(5);

        return view('index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kabupatenOptions = Kabupaten::all();
        $provinsiOptions = Provinsi::all();

        return view('create', compact('kabupatenOptions', 'provinsiOptions'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'email' => 'required|email',
            'nomor_telepon' => ['required', 'regex:/^0\d{6,12}$/'],
            'password' => 'required',
            'alamat_ktp' => 'required',
            'alamat_sekarang' => 'required',
            'kecamatan' => 'required',
            'kabupaten' => 'required',
            'provinsi' => 'required',
            'nomor_hp' => ['required', 'regex:/^0\d{6,12}$/'],
            'kewarganegaraan' => 'required',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required',
            'kota_lahir' => 'required',
            'provinsi_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'status_menikah' => 'required',
            'agama' => 'required',
            'profile_picture' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $user = new User;
        // Set the additional fields
        if ($request->hasFile('profile_picture')) {
            $image = $request->file('profile_picture');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('profile_pictures', $imageName);
    
        }
        $user->nama_lengkap = $request->nama_lengkap;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->alamat_ktp = $request->alamat_ktp;
        $user->alamat_sekarang = $request->alamat_sekarang;
        $user->kecamatan = $request->kecamatan;
        $user->kabupaten = $request->kabupaten;
        $user->provinsi = $request->provinsi;
        $user->nomor_telepon = $request->nomor_telepon;
        $user->nomor_hp = $request->nomor_hp;
        $user->kewarganegaraan = $request->kewarganegaraan;
        $user->tanggal_lahir = $request->tanggal_lahir;
        $user->tempat_lahir = $request->tempat_lahir;
        $user->kota_lahir = $request->kota_lahir;
        $user->provinsi_lahir = $request->provinsi_lahir;
        $user->jenis_kelamin = $request->jenis_kelamin;
        $user->status_menikah = $request->status_menikah;
        $user->agama = $request->agama;
        $user->profile_picture = $request->profile_picture;

        $user->save();

        return redirect()->route('login')->with('success', 'Users Added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $kabupatenOptions = Kabupaten::all();
        $provinsiOptions = Provinsi::all();

        return view('edit', compact('user', 'kabupatenOptions', 'provinsiOptions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'email' => 'required|email',
            'nomor_telepon' => 'required',
            'alamat_ktp' => 'required',
            'alamat_sekarang' => 'required',
            'kecamatan' => 'required',
            'kabupaten' => 'required',
            'provinsi' => 'required',
            'nomor_hp' => 'required',
            'kewarganegaraan' => 'required',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required',
            'kota_lahir' => 'required',
            'provinsi_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'status_menikah' => 'required',
            'agama' => 'required',
            'profile_picture' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Set the fields
        $user->nama_lengkap = $request->nama_lengkap;
        $user->email = $request->email;
        $user->alamat_ktp = $request->alamat_ktp;
        $user->alamat_sekarang = $request->alamat_sekarang;
        $user->kecamatan = $request->kecamatan;
        $user->kabupaten = $request->kabupaten;
        $user->provinsi = $request->provinsi;
        $user->nomor_telepon = $request->nomor_telepon;
        $user->nomor_hp = $request->nomor_hp;
        $user->kewarganegaraan = $request->kewarganegaraan;
        $user->tanggal_lahir = $request->tanggal_lahir;
        $user->tempat_lahir = $request->tempat_lahir;
        $user->kota_lahir = $request->kota_lahir;
        $user->provinsi_lahir = $request->provinsi_lahir;
        $user->jenis_kelamin = $request->jenis_kelamin;
        $user->status_menikah = $request->status_menikah;
        $user->agama = $request->agama;

        if ($request->hasFile('profile_picture')) {
            $image = $request->file('profile_picture');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/profile_pictures', $imageName);
    
            $user->profile_picture = 'profile_pictures/' . $imageName;
        }
        
        if ($request->has('password') && !empty($request->password)) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('users.index')->with('success', 'User Data has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('user.index')->with('success', 'User Data deleted successfully');
    }

    public function getKabupaten($provinsiId)
    {
        $kabupatenOptions = Kabupaten::where('provinsi_id', $provinsiId)->get();

        return response()->json($kabupatenOptions);
    }
    
    public function exportToPDF($userId)
    {
        $user = User::findOrFail($userId);
    
        $pdf = PDF::loadView('pdf_export', compact('user'));
    
        return $pdf->download('user_details.pdf');
    }
}
