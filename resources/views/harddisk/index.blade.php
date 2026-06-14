@extends('template')
@section('title', 'Data harddisk')
@section('konten')

    <h2>Data harddisk</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('harddisk.create') }}">Tambah Data</a>

    <table class="table table-striped table-hover">
        <tr>
            <th>kodeharddisk</th>
            <th>merkharddisk</th>
            <th>stockharddisk</th>
            <th>tersedia</th>
        </tr>

        @forelse($harddisk as $h)
            <tr>
                <td>{{ $h->kodeharddisk}}
                <td>{{ $h->merkharddisk}}</td>
                <td>{{ $h->stockharddisk}}</td>
                <td>{{ $h->tersedia}}</td>


            </tr>
        @empty
            <tr>
                <td colspan="5">Belum ada data harddisk.</td>
            </tr>
        @endforelse
    </table>
@endsection
