@extends('template')
@section('title', 'Data Gaji')
@section('konten')

    <a href="/eas" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Kode Soal Penggajian
        </div>

        <div class="card-body">
            <form action="/eas/store" method="post">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">NIP</label>
                    <div class="col-sm-10">
                        <input type="text" name="NIP" id="NIP" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="jabatan" class="col-sm-2 col-form-label">Gaji Pokok</label>
                    <div class="col-sm-10">
                        <input type="text" name="gajipokok" id="gajipokok" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="umur" class="col-sm-2 col-form-label">Potongan</label>
                    <div class="col-sm-10">
                        <input type="number" name="potongan" id="potongan" class="form-control" required>
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

    <script>
function validasiForm() {
        let potongan = document.getElementById('potongan').value;
        let gajipokok = document.getElementById('gajipokok').value;

            if (potongan < (gajipokok * 0.30)) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "potongan tidak boleh dibawah 30% gaji pokok",
                    icon: "error"
                });
                return false;
            }


        }
        </script>

@endsection
