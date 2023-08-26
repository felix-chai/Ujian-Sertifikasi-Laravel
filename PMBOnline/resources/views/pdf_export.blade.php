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
    <div class="container mt-5">
        
        <h1 class="text-primary mt-3 mb-4 text-center"><b>PMB Online</b></h1>
        
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col col-md-6 center"><b>Student Details</b></div>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"><b>Nama Lengkap</b></label>
                <div class="col-sm-10">
                    {{ $user->nama_lengkap }}
                </div>
            </div>
        
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"><b>Email</b></label>
                <div class="col-sm-10">
                    {{ $user->email }}
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"><b>Nomor Telepon</b></label>
                <div class="col-sm-10">
                    {{ $user->nomor_telepon }}
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"><b>Alamat KTP</b></label>
                <div class="col-sm-10">
                    {{ $user->alamat_ktp }}
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"><b>Alamat Sekarang</b></label>
                <div class="col-sm-10">
                    {{ $user->alamat_sekarang }}
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"><b>Kecamatan</b></label>
                <div class="col-sm-10">
                    {{ $user->kecamatan }}
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"><b>Kabupaten Tinggal</b></label>
                <div class="col-sm-10">
                    {{ $user->kabupaten }}
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"><b>Provinsi Tinggal</b></label>
                <div class="col-sm-10">
                    {{ $user->provinsi }}
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"><b>Nomor HP</b></label>
                <div class="col-sm-10">
                    {{ $user->nomor_hp }}
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"><b>Kewarganegaraan</b></label>
                <div class="col-sm-10">
                    {{ $user->kewarganegaraan }}
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"><b>Tanggal Lahir</b></label>
                <div class="col-sm-10">
                    {{ $user->tanggal_lahir }}
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"><b>Tempat Lahir</b></label>
                <div class="col-sm-10">
                    {{ $user->tempat_lahir }}
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"><b>Kabupaten Lahir</b></label>
                <div class="col-sm-10">
                    {{ $user->kota_lahir }}
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"><b>Provinsi Lahir</b></label>
                <div class="col-sm-10">
                    {{ $user->provinsi_lahir }}
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"><b>Jenis Kelamin</b></label>
                <div class="col-sm-10">
                    {{ $user->jenis_kelamin }}
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"><b>Status Menikah</b></label>
                <div class="col-sm-10">
                    {{ $user->status_menikah }}
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"><b>Agama</b></label>
                <div class="col-sm-10">
                    {{ $user->agama }}
                </div>
            </div>
            </div>
        </div>
        
    </div>
</body>
</html>
