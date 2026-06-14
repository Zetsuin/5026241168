@extends('template')
@section('title', 'Nilai Kuliah')
@section('konten')

    <h2>Nilai Kuliah</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('nilaikuliah.create') }}">Tambah Data</a>

    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>

        @forelse($nilai as $row)
            <tr>
                <td>{{ $row->ID}}
                <td>{{ $row->NRP}}</td>
                <td>{{ $row->NilaiAngka}}</td>
                <td>{{ $row->SKS}}</td>
                <td>
                    @if ($row->NilaiAngka <= 40)
                        D
                    @elseif($row->NilaiAngka >= 41 && $row->NilaiAngka <= 60)
                        C
                    @elseif($row->NilaiAngka >= 61 && $row->NilaiAngka <= 80)
                        B
                    @else
                        A
                    @endif
                </td>
                <td>{{ $row->NilaiAngka * $row->SKS}}</td>


            </tr>
        @empty
            <tr>
                <td colspan="5">Belum ada data nilai.</td>
            </tr>
        @endforelse
    </table>
@endsection
