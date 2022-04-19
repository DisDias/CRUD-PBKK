<!DOCTYPE html>
<html>
    <head>
        <title>Parkir</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    </head>
    <body>
    
        <div class="container">
            <br>
        <center><h1>Edit Data Parkir</h1></center>
        @if(session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
            </div>
        @endif
            <div class='row'>
                <div class="col-lg-12">
                <form action="/parkir/{{$parkir->nomor_tiket}}/update" method="POST">
                    
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nomor Polisi</label>
                <input name="nomor_polisi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$parkir->nomor_polisi}}">
                </div>

                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jenis Kendaraan</label>
                <select name="jenis_kendaraan" class="form-select mb-3" aria-label="Default select example">
                <option value="Motor" @if($parkir->jenis_kendaraan == 'Motor') selected @endif>Motor</option>
                <option value="Mobil" @if($parkir->jenis_kendaraan == 'Mobil') selected @endif>Mobil</option>
                </select>
                </div>

                <div class="form-group row">
                <label for="example-date-input" class="col-2 col-form-label">Tanggal Masuk</label>
                <div class="col-10">
                    <input name="tgl_masuk" class="form-control" type="date" id="example-date-input" value="{{$parkir->tgl_masuk}}">
                </div>
                </div>

                <div class="form-group row">
                <label for="example-date-input" class="col-2 col-form-label">Tanggal Keluar</label>
                <div class="col-10">
                    <input name="tgl_keluar" class="form-control" type="date" id="example-date-input" value="{{$parkir->tgl_keluar}}">
                </div>
                </div>

                <div class="form-group row">
                <label for="example-time-input" class="col-2 col-form-label">Jam Masuk</label>
                <div class="col-10">
                    <input name="jam_masuk" class="form-control" type="time" id="example-time-input" value="{{$parkir->jam_masuk}}">
                </div>
                </div>

                <div class="form-group row">
                <label for="example-time-input" class="col-2 col-form-label">Jam Keluar</label>
                <div class="col-10">
                    <input name="jam_keluar" class="form-control" type="time" id="example-time-input" value="{{$parkir->jam_keluar}}">
                </div>
                </div>

                {{-- <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Lokasi</label>
                    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$lokasiParkir->nama}}">
                </div>

                <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Lantai</label>
                        <input name="lantai" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$lokasiParkir->lantai}}">
                </div>  --}}

                <a href="/" class="btn btn-secondary" onclick="return confirm('Apakah Anda Yakin Kembali ke Halaman Utama ?');">Back</a>
                <button type="submit" class="btn btn-warning">Update</button>
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                </form>
                </div>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    </body>
</html>

