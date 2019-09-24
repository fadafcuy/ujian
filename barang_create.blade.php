@extends('template')
@section('content')

<section class="main-section">
    <div class="content">
    <h1>Tambah barang</h1>
    
    <form action="{{ route('barang.store') }}" method="post">
    {{ csrf_field() }}
        <div class="form-group">
            <label for="nama">Id:</label>
            <input type="text" class="form-control" id="user" name="id">
        </div>
        <div class="form-group">
            <label for="nama">kd_barang:</label>
            <input type="text" class="form-control" id="code" name="kd_barang">
        </div>
        <div class="form-group">
            <label for="nama">nama_barang:</label>
            <input type="text" class="form-control" id="jml" name="nama_barang">
        </div>
        <div class="form-group">
            <label for="nama">stok:</label>
            <input type="text" class="form-control" id="jml" name="stok">
        </div>
        <div class="form-group">
            <label for="nama">harga:</label>
            <input type="text" class="form-control" id="desc" name="harga">
        </div>
            <div class="form-group">
            <button type="submit" class="btn btn-md btn-primary">Submit</button>
            <button type="reset" class="btn btn-md btn-danger">Cancel</button>
            </div>
        </form>
    </div>
</section>
@endsection