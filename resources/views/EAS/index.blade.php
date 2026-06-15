@extends('template')
@section('title', 'Data penggajian')
@section('konten')

    <h2>Kode Soal penggajian</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('eas.create') }}">Tambah Data</a>

    <table class="table table-striped table-hover">
        <tr>
            <th>NIP</th>
            <th>Gaji Pokok</th>
            <th>Potongan</th>
            <th>Gaji Bersih</th>
            <th>Persentase Potongan</th>
        </tr>

        @forelse($gaji as $g)
            <tr>
                <td>{{ $g->nip}}
                <td>{{ $g->gajipokok}}</td>
                <td>{{ $g->potongan}}</td>
                <td>{{ $g->gajipokok - $g->potongan }}</td>
                <td>{{ ($g->gajipokok - $g->potongan) / $g->gajipokok * 1 . "%" }}</td>


            </tr>
        @empty
            <tr>
                <td colspan="5">Belum ada data penggajian.</td>
            </tr>
        @endforelse
    </table>
@endsection
