<!DOCTYPE html>
<html>
    <head>
        <title>Parkir</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    </head>
    <body>
    
        <div class="container">
        @if(session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
            </div>
        @endif
        <br>
        <center>
            <h1>Parkir Yuk<h1>
        </center>
        <br>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambah Data Parkir
        </button>
            <div class='row'>
                <table class="table table-hover">
                    <tr>
                        <th>NOMOR POLISI</th>
                        <th>JENIS KENDARAAN</th>
                        <th>TANGGAL MASUK</th>
                        <th>TANGGAL KELUAR</th>
                        <th>JAM MASUK</th>
                        <th>JAM KELUAR</th>
                        <th>LOKASI</th>
                        
                    </tr>
                    @foreach($data_parkir as $parkir)
                    <tr>
                        <td>{{$parkir->nomor_polisi}}</td>
                        <td>{{$parkir->jenis_kendaraan}}</td>
                        <td>{{$parkir->tgl_masuk}}</td>
                        <td>{{$parkir->tgl_keluar}}</td>
                        <td>{{$parkir->jam_masuk}}</td>
                        <td>{{$parkir->jam_keluar}}</td>
                      
                        <td>
                            <a href="/parkir/{{$parkir->nomor_tiket}}/edit" class="btn btn-warning btn-sm"></i>Edit</a>
                            <a href="/parkir/{{$parkir->nomor_tiket}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');"></i>Delete</a>
                            <a href="/parkir/{{$parkir->nomor_tiket}}/detail" class="btn btn-secondary shadow btn-sm">Detail</a>
                        </td>
                    <tr>
                    @endforeach
                </table>
            </div>
        </div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Input Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="/parkir/create" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Nomor Polisi</label>
                        <input name="nomor_polisi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">Jenis Kendaraan</label>
                    <select name="jenis_kendaraan" class="form-select mb-3" aria-label="Default select example">
                    <option selected>Motor</option>
                    <option value="Mobil">Mobil</option>
                    </select>
                    </div>

                    <div class="form-group row">
                        <label for="example-date-input" class="col-2 col-form-label">Tanggal Masuk</label>
                        <div class="col-10">
                            <input name="tgl_masuk" class="form-control" type="date" id="example-date-input">
                        </div>
                        
                    </div>

                    <div class="form-group row">
                        <label for="example-date-input" class="col-2 col-form-label">Tanggal Keluar</label>
                        <div class="col-10">
                            <input name="tgl_keluar" class="form-control" type="date" id="example-date-input">
                        </div>
                        
                    </div>

                    <div class="form-group row">
                        <label for="example-time-input" class="col-2 col-form-label">Jam Masuk</label>
                        <div class="col-10">
                            <input name="jam_masuk" class="form-control" type="time" id="example-time-input">
                        </div>
                        
                    </div>

                    <div class="form-group row">
                        <label for="example-time-input" class="col-2 col-form-label">Jam Keluar</label>
                        <div class="col-10">
                            <input name="jam_keluar" class="form-control" type="time" id="example-time-input">
                        </div>
                    </div>

                    {{-- <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Lokasi</label>
                        <input name="tempat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Lantai</label>
                        <input name="lantai" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div> --}}

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                </form>
            </div>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    </body>
</html>

