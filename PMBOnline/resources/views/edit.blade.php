@extends('master')

@section('content')

<div class="card">
    <div class="card-header">Edit Student</div>
    <div class="card-body">
        <form method="post" action="{{ route('users.update', $user->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Profile Picture</label>
				<div class="col-sm-10">
					<input type="file" name="profile_picture" class="form-control" accept="image/*" />
				</div>
			</div>
			
			@if ($user->profile_picture)
				<div class="row mb-4">
					<label class="col-sm-2 col-label-form">Current Profile Picture</label>
					<div class="col-sm-10">
                        <img src="{{ asset('storage/' . $user->profile_picture) }}" alt="Profile Picture" style="max-width: 200px;">
					</div>
				</div>
			@endif
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Nama Lengkap</label>
				<div class="col-sm-10">
					<input type="text" name="nama_lengkap" class="form-control" value="{{ $user->nama_lengkap }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Email</label>
				<div class="col-sm-10">
					<input type="text" name="email" id="email" class="form-control" value="{{ $user->email }}" />
					<span id="email-error" class="error-msg" style="color: red;"></span>
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Password</label>
				<div class="col-sm-10">
					<input type="password" name="password" class="form-control" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Alamat KTP</label>
				<div class="col-sm-10">
					<input type="text" name="alamat_ktp" class="form-control" value="{{ $user->alamat_ktp }}" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Alamat Sekarang</label>
				<div class="col-sm-10">
					<input type="text" name="alamat_sekarang" class="form-control" value="{{ $user->alamat_sekarang }}" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Provinsi Tinggal</label>
				<div class="col-sm-10">
					<select name="provinsi" class="form-control" id="provinsi" data-provinsi-id="">
						@foreach ($provinsiOptions as $option)
							<option value="{{ $option->nama }}" {{ $user->provinsi == $option->nama ? 'selected' : '' }}>{{ $option->nama }}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Kabupaten Tinggal</label>
				<div class="col-sm-10">
					<select name="kabupaten" class="form-control" id="kabupaten">
						@foreach ($kabupatenOptions as $option)
							<option value="{{ $option->nama }}" {{ $user->kabupaten == $option->nama ? 'selected' : '' }}>{{ $option->nama }}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Kecamatan</label>
				<div class="col-sm-10">
					<input type="text" name="kecamatan" class="form-control" value="{{ $user->kecamatan }}" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Nomor Telepon</label>
				<div class="col-sm-10">
					<input type="number" name="nomor_telepon" id="nomor-telepon" class="form-control" value="{{ $user->nomor_telepon }}" />
					<span id="telepon-error" class="error-msg" style="color: red;"></span>
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Nomor HP</label>
				<div class="col-sm-10">
					<input type="number" name="nomor_hp" id="nomor-hp" class="form-control" value="{{ $user->nomor_hp }}" />
					<span id="hp-error" class="error-msg" style="color: red;"></span>
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Kewarganegaraan</label>
				<div class="col-sm-10">
					<input type="text" name="kewarganegaraan" class="form-control" value="{{ $user->kewarganegaraan }}" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Tanggal Lahir</label>
				<div class="col-sm-10">
					<input type="date" name="tanggal_lahir" class="form-control" value="{{ $user->tanggal_lahir }}" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Tempat Lahir</label>
				<div class="col-sm-10">
					<input type="text" name="tempat_lahir" class="form-control" value="{{ $user->tempat_lahir }}" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Provinsi Lahir</label>
				<div class="col-sm-10">
					<select name="provinsi_lahir" class="form-control" id="provinsi-lahir" data-provinsi-id="">
						@foreach ($provinsiOptions as $option)
							<option value="{{ $option->nama }}" {{ $user->provinsi_lahir == $option->nama ? 'selected' : '' }}>{{ $option->nama }}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Kabupaten Lahir</label>
				<div class="col-sm-10">
					<select name="kota_lahir" class="form-control" id="kota_lahir">
						@foreach ($kabupatenOptions as $option)
							<option value="{{ $option->nama }}" {{ $user->kota_lahir == $option->nama ? 'selected' : '' }}>{{ $option->nama }}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Jenis Kelamin</label>
				<div class="col-sm-10">
					<select name="jenis_kelamin" class="form-control">
						<option value="Laki-laki" {{ $user->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
						<option value="Perempuan" {{ $user->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
					</select>
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Status Menikah</label>
				<div class="col-sm-10">
					<select name="status_menikah" class="form-control">
						<option value="Belum Menikah" {{ $user->status_menikah == 'Belum Menikah' ? 'selected' : '' }}>Belum Menikah</option>
						<option value="Menikah" {{ $user->status_menikah == 'Menikah' ? 'selected' : '' }}>Menikah</option>
					</select>
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Agama</label>
				<div class="col-sm-10">
					<select name="agama" class="form-control">
						<option value="Islam" {{ $user->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
						<option value="Kristen" {{ $user->agama == 'Kristen' ? 'selected' : '' }}>Kristen</option>
						<option value="Katolik" {{ $user->agama == 'Katolik' ? 'selected' : '' }}>Katolik</option>
						<option value="Hindu" {{ $user->agama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
						<option value="Buddha" {{ $user->agama == 'Buddha' ? 'selected' : '' }}>Buddha</option>
						<option value="Konghucu" {{ $user->agama == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
					</select>
				</div>
			</div>

            <div class="text-center">
                <input type="hidden" name="hidden_id" value="{{ $user->id }}" />
                <input type="submit" class="btn btn-primary" value="Edit" />
            </div>    
        </form>
    </div>
</div>

<script>
document.getElementsByName('user_gender')[0].value = "{{ $user->user_gender }}";
</script>

@endsection('content')