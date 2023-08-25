
@extends('master')

@section('content')

@if($errors->any())

<div class="alert alert-danger">
	<ul>
	@foreach($errors->all() as $error)

		<li>{{ $error }}</li>

	@endforeach
	</ul>
</div>

@endif

<div class="card">
	<div class="card-header">Registrasi</div>
	<div class="card-body">
		<form method="post" action="{{ route('users.store') }}" enctype="multipart/form-data">
			@csrf
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Nama Lengkap</label>
                <div class="col-sm-10">
                    <input type="text" name="nama_lengkap" class="form-control" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Email</label>
                <div class="col-sm-10">
                    <input type="text" name="email" id="email" class="form-control" />
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
                    <input type="text" name="alamat_ktp" class="form-control" />
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Alamat Sekarang</label>
                <div class="col-sm-10">
                    <input type="text" name="alamat_sekarang" class="form-control" />
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Provinsi Tinggal</label>
                <div class="col-sm-10">
                    <select name="provinsi" class="form-control" id="provinsi" data-provinsi-id="">
                        @foreach ($provinsiOptions as $option)
                            <option value="{{ $option->id }}">{{ $option->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Kabupaten Tinggal</label>
                <div class="col-sm-10">
                    <select name="kabupaten" class="form-control" id="kabupaten">
                        @foreach ($kabupatenOptions as $option)
                            <option value="{{ $option->id }}">{{ $option->nama }}</option>
                        @endforeach
                                        </select>
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Kecamatan</label>
                <div class="col-sm-10">
                    <input type="text" name="kecamatan" class="form-control" />
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Nomor Telepon</label>
                <div class="col-sm-10">
                    <input type="number" name="nomor_telepon" id="nomor-telepon" class="form-control" />
                    <span id="telepon-error" class="error-msg" style="color: red;"></span>
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Nomor HP</label>
                <div class="col-sm-10">
                    <input type="number" name="nomor_hp" id="nomor-hp" class="form-control" />
                    <span id="hp-error" class="error-msg" style="color: red;"></span>
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Kewarganegaraan</label>
                <div class="col-sm-10">
                    <input type="text" name="kewarganegaraan" class="form-control" />
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Tanggal Lahir</label>
                <div class="col-sm-10">
                    <input type="date" name="tanggal_lahir" class="form-control" />
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Tempat Lahir</label>
                <div class="col-sm-10">
                    <input type="text" name="tempat_lahir" class="form-control" />
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Provinsi Lahir</label>
                <div class="col-sm-10">
                    <select name="provinsi_lahir" class="form-control" id="provinsi-lahir" data-provinsi-id="">
                        @foreach ($provinsiOptions as $option)
                            <option value="{{ $option->id }}">{{ $option->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Kabupaten Lahir</label>
                <div class="col-sm-10">
                    <select name="kota_lahir" class="form-control" id="kota_lahir">
                        @foreach ($kabupatenOptions as $option)
                            <option value="{{ $option->id }}">{{ $option->nama }}</option>
                        @endforeach
                                        </select>
                </div>
            </div>
            
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Jenis Kelamin</label>
                <div class="col-sm-10">
                    <select name="jenis_kelamin" class="form-control">
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Status Menikah</label>
                <div class="col-sm-10">
                    <select name="status_menikah" class="form-control">
                        <option value="Belum Menikah">Belum Menikah</option>
                        <option value="Menikah">Menikah</option>
                    </select>
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Agama</label>
                <div class="col-sm-10">
                    <select name="agama" class="form-control">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>               
                 </div>
            </div>
            	<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Add" />
			</div>	
		</form>
	</div>
</div>

@endsection('content')

{{-- <script>
    let selectedProvinsi = document.getElementById('provinsi-lahir');
    console.log(selectedProvinsi, "ini provinsi")
    const kabupatenSelect = document.getElementById('kabupaten');

    selectedProvinsi.addEventListener('change', async function () {
        console.log('Selected Provinsi changed'); // Add this line
        const provinsiId = this.value;
        kabupatenSelect.innerHTML = ''; // Clear existing options

        if (provinsiId) {
            try {
                console.log('Fetching kabupaten options for provinsi ID:', provinsiId);
                const response = await fetch(`/get-kabupaten/${provinsiId}`);
                const kabupatenOptions = await response.json();
                console.log('Fetched kabupaten options:', kabupatenOptions);

                kabupatenOptions.forEach(option => {
                    const optionElement = document.createElement('option');
                    optionElement.value = option.id;
                    optionElement.textContent = option.nama;
                    kabupatenSelect.appendChild(optionElement);
                });

                console.log('Appended options to kabupaten select:', kabupatenSelect.innerHTML);
            } catch (error) {
                console.error(error);
            }
        }
    });
</script> --}}

<script>
    $('#provinsi-lahir').select2();
    $('#kota_lahir').select2();
    $('#provinsi').select2();
    $('#kabupaten').select2();


    const emailInput = document.getElementById('email');
    const emailError = document.getElementById('email-error');
    const teleponInput = document.getElementById('nomor-telepon');
    const teleponError = document.getElementById('telepon-error');
    const hpInput = document.getElementById('nomor-hp');
    const hpError = document.getElementById('hp-error');

    emailInput.addEventListener('input', function () {
        const email = emailInput.value.trim();
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (email === '' || emailPattern.test(email)) {
            emailError.textContent = '';
        } else {
            emailError.textContent = 'Invalid email format';
        }
    });

    // teleponInput.addEventListener('input', function () {
    //     const telepon = teleponInput.value.trim();
    //     const teleponPattern = /^0\d{7,9}$/;

    //     if (teleponPattern.test(telepon)) {
    //         teleponError.textContent = '';
    //     } else {
    //         teleponError.textContent = 'Invalid phone number';
    //     }
    // });

    // hpInput.addEventListener('input', function () {
    //     const hpNumber = hpInput.value.trim();
    //     const hpPattern = /^0\d{7,9}$/;

    //     if (hpPattern.test(hpNumber)) {
    //         hpError.textContent = '';
    //     } else {
    //         hpError.textContent = 'Invalid mobile phone number';
    //     }
    // });
</script>






