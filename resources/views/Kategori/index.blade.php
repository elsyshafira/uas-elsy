@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>DAFTAR KATEGORI</h3>
        @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session ('success')}}
        </div>
        @endif
        <a class="btn btn-secondary btn-sm float-end" href="{{ url('kategori/create')}}">Tambah Data</a>
        <table class="table table-success table-striped">
            <tr>
                <td>NO</td>
                <td>KODE</td>
                <td>NAMA</td>
                <td>EDIT</td>
                <td>HAPUS</td>
            </tr>
            @foreach ($rows as $row)
            <tr>
                <td>{{ $row->kat_id}}</td>
                <td>{{ $row->kat_kode}}</td>
                <td>{{ $row->kat_nama}}</td>
                <td><a class="btn btn-success btn-sm float" href="{{url('kategori/' .$row->kat_id. '/edit')}}">Edit</a></td>
                <td>
                    <form action="{{url('kategori/' .$row->kat_id)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-success btn-sm float" onclick="return confirm('Apakah yakin ingin dihapus')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection