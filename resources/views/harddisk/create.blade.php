@extends('template')
@section('title', 'Data harddisk')
@section('konten')

    <a href="/harddisk" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Tambah Data harddisk
        </div>

        <div class="card-body">
            <form action="/harddisk/store" method="post">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">merkharddisk</label>
                    <div class="col-sm-10">
                        <input type="text" name="merkharddisk" id="merkharddisk" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="jabatan" class="col-sm-2 col-form-label">stockharddisk</label>
                    <div class="col-sm-10">
                        <input type="number" name="stockharddisk" id="stockharddisk" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="umur" class="col-sm-2 col-form-label">tersedia</label>
                    <div class="col-sm-10">
                        <input type="text" name="tersedia" id="tersedia" class="form-control" required>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="store" class="btn btn-primary">
                    </div>
                </div>

            </form>
        </div>
    </div>


@endsection
