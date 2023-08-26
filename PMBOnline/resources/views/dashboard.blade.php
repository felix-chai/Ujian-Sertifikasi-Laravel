<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PMB Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="path/to/select2.min.css" rel="stylesheet" />
    <script src="path/to/select2.min.js"></script>
</head>
<body>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col col-md-6"><b>Student Details</b></div>
                <div class="col col-md-6">
                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                        <a href="{{ route('exportpdf', ['user' => $user->id]) }}" class="btn btn-primary">Export as PDF</a>

                        <button type="submit" class="btn btn-danger btn-sm float-end">Logout</button>
                    </form>                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Profile Picture</b></label>
            <div class="col-sm-10">
                <img src="{{ asset('storage/' . $user->profile_picture) }}" alt="Profile Picture" style="max-width: 200px;">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Nama Lengkap</b></label>
            <div class="col-sm-10">
                {{ Auth::user()->nama_lengkap }}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Email</b></label>
            <div class="col-sm-10">
                {{ Auth::user()->email }}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Nomor Telepon</b></label>
            <div class="col-sm-10">
                {{ Auth::user()->nomor_telepon }}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Alamat KTP</b></label>
            <div class="col-sm-10">
                {{ Auth::user()->alamat_ktp }}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Alamat Sekarang</b></label>
            <div class="col-sm-10">
                {{ Auth::user()->alamat_sekarang }}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Kecamatan</b></label>
            <div class="col-sm-10">
                {{ Auth::user()->kecamatan }}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Kabupaten Tinggal</b></label>
            <div class="col-sm-10">
                {{ Auth::user()->kabupaten }}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Provinsi Tinggal</b></label>
            <div class="col-sm-10">
                {{ Auth::user()->provinsi }}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Nomor HP</b></label>
            <div class="col-sm-10">
                {{ Auth::user()->nomor_hp }}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Kewarganegaraan</b></label>
            <div class="col-sm-10">
                {{ Auth::user()->kewarganegaraan }}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Tanggal Lahir</b></label>
            <div class="col-sm-10">
                {{ Auth::user()->tanggal_lahir }}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Tempat Lahir</b></label>
            <div class="col-sm-10">
                {{ Auth::user()->tempat_lahir }}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Kabupaten Lahir</b></label>
            <div class="col-sm-10">
                {{ Auth::user()->kota_lahir }}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Provinsi Lahir</b></label>
            <div class="col-sm-10">
                {{ Auth::user()->provinsi_lahir }}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Jenis Kelamin</b></label>
            <div class="col-sm-10">
                {{ Auth::user()->jenis_kelamin }}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Status Menikah</b></label>
            <div class="col-sm-10">
                {{ Auth::user()->status_menikah }}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Agama</b></label>
            <div class="col-sm-10">
                {{ Auth::user()->agama }}
            </div>
        </div>
        </div>
    </div>
    
</body>
</html>