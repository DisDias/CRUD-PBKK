<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Parkir</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
    
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card mt-5">
                        <div class="card-body">
                            <h3 class="text-center">Input Data</h3>
 
                            <br/>
                             <!-- form validasi -->
                             <form action="/parkir/create" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                        <div class="form-group">
                                            <label for="nomor_polisi">Nomor Polisi</label>
                                            <input class="form-control" type="text" name="nomor_polisi" value="{{ old('nomor_polisi') }}" class="@error('nomor_polisi') is-invalid @enderror">
                                            @error('nomor_polisi')
                                                       <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror
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
                                                    <input name="tgl_masuk" class="form-control" type="date" id="example-date-input" class="@error('tgl_masuk') is-invalid @enderror">
                                                </div>
                                                @error('tgl_masuk')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                        
                                        <div class="form-group row">
                                                <label for="example-date-input" class="col-2 col-form-label">Tanggal Keluar</label>
                                                <div class="col-10">
                                                    <input name="tgl_keluar" class="form-control" type="date" id="example-date-input" class="@error('tgl_keluar') is-invalid @enderror">
                                                </div>
                                                @error('tgl_keluar')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                        
                                        <div class="form-group row">
                                                <label for="example-time-input" class="col-2 col-form-label">Jam Masuk</label>
                                                <div class="col-10">
                                                    <input name="jam_masuk" class="form-control" type="time" id="example-time-input" class="@error('jam_masuk') is-invalid @enderror">
                                                </div>
                                                @error('jam_masuk')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                        
                                        <div class="form-group row">
                                                <label for="example-time-input" class="col-2 col-form-label">Jam Keluar</label>
                                                <div class="col-10">
                                                    <input name="jam_keluar" class="form-control" type="time" id="example-time-input" class="@error('jam_keluar') is-invalid @enderror">
                                                </div>
                                                @error('jam_keluar')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="nama">Lokasi</label>
                                            <input class="form-control" type="text" name="nama" value="{{ old('nama') }}" class="@error('nama') is-invalid @enderror">
                                            @error('nama')
                                                       <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror
                                        </div>

                                        <div class="form-group" align="right">
                                            <input class="btn btn-primary" type="submit" value="Submit">
                                        </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <body>
</html>