@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>DATA Produk</h3>
        @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session ('success')}}
        </div>
        @endif
        <a class="btn btn-secondary btn-sm float-end" href="{{ url('produk/create')}}">Tambah Data</a>
        <table class="table table-success table-striped">
            <tr>
                <td>NO</td>
                <td>KODE</td>
                <td>NAMA</td>
                <td>HARGA</td>
                <td>STOK</td>
                <td>KETERANGAN</td>
                <td>EDIT</td>
                <td>HAPUS</td>
            </tr>
            @foreach ($rows as $row)
            <tr>
                <td>{{ $row->produk_id}}</td>
                <td>{{ $row->produk_no}}</td>
                <td>{{ $row->produk_nama}}</td>
                <td>{{ $row->produk_harga}}</td>
                <td>{{ $row->produk_stok}}</td>
                <td>{{ $row->produk_keterangan}}</td>
                <td><a class="btn btn-success btn-sm float" href="{{url('produk/' .$row->pel_id. '/edit')}}">Edit</a></td>
                <td>
                    <form action="{{url('produk/' .$row->pel_id)}}" method="post">
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