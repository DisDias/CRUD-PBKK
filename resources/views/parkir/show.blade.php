<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>Parkir</title>
</head>
<body>
<center>
    <div class="container-fluid">
        <div class="container position-center">
            <div class="row page-bg">
                <div class="p-4 col-md-12">
                    <div class="text-center top-icon">
                        <h1 class="mt-3">Detail Parkir</h1>
                        <br>

                        {{-- <form id="form-login" action="{{ route('artikel.buat-data') }}" method="get"> --}}
                            @csrf
                            <div>
                                <input class="mt-3 form-control form-control-lg" name="nomor_polisi" type="text"
                                       placeholder="Nomor Polisi" value="{{ $data_parkir->nomor_polisi ? $data_parkir->nomor_polisi : 'Tidak Ada Data' }}" readonly>
                            </div>

                            <div>
                                <input class="mt-3 form-control form-control-lg" name="jenis_kendaraan" type="text"
                                       placeholder="Jenis Kendaraan" value="{{ $data_parkir->jenis_kendaraan ? $data_parkir->jenis_kendaraan : 'Tidak Ada Data' }}" readonly>
                            </div>

                            <div>
                                <input class="mt-3 form-control form-control-lg" name="tgl_masuk" type="date"
                                       placeholder="Tanggal Masuk" value="{{ $data_parkir->tgl_masuk ? $data_parkir->tgl_masuk : 'Tidak Ada Data' }}" readonly>
                            </div>

                            <div>
                                <input class="mt-3 form-control form-control-lg" name="tgl_keluar" type="date"
                                       placeholder="Tanggal Keluar" value="{{ $data_parkir->tgl_keluar ? $data_parkir->tgl_keluar : 'Tidak Ada Data' }}" readonly>
                            </div>

                            <div>
                                <input class="mt-3 form-control form-control-lg" name="jam_masuk" type="time"
                                       placeholder="Jam Masuk" value="{{ $data_parkir->jam_masuk ? $data_parkir->jam_masuk : 'Tidak Ada Data' }}" readonly>
                            </div>

                            <div>
                                <input class="mt-3 form-control form-control-lg" name="jam_keluar" type="time"
                                       placeholder="Jam Keluar" value="{{ $data_parkir->jam_keluar ? $data_parkir->jam_keluar : 'Tidak Ada Data' }}" readonly>
                            </div>
                        {{-- </form> --}}
                        <br>
                        <div class="mt-4 text-center submit-btn">
                            <a href="/" class="btn btn-secondary">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</center>
</body>
</html>
