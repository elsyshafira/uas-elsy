@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>EDIT DATA KATEGORI</h3>
        <form action="{{ url('/kategori/' .$row->kat_id)}}" method="post">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label for="">KAT ID</label>
                <input type="text" name="kat_id" class="form-control" value="{{$row->kat_id}}">
            </div>
            <div class="mb-3">
                <label for="">KODE</label>
                <input type="text" name="kat_kode" class="form-control" value="{{$row->kat_kode}}">
            </div>
            <div class="mb-3">
                <label for="">NAMA</label>
                <input type="text" name="kat_nama" class="form-control" value="{{$row->kat_nama}}">
            </div>
            <div class="mb-3">
                <input class="btn btn-success" type="submit" name="" id="" value="UPDATE">
            </div>
        </form>
    </div>
@endsection