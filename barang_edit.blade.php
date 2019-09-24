@extends('template')
@section('content')

    <section class="main-section">
      <div class="content">
        <h1>Ubah barang</h1>
        <hr>
        @if($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
          </ul>
        </div>
        @endif

        @foreach($data as $datas)
        <form action="{{ route('barang.update', $datas->id) }}" method="post">
          {{ csrf_field() }}
          {{ method_field('PUT') }}
          <div class="form-group">
            <label for="nama">Id:</label>
            <input type="text" class="form-control" id="usr" name="id" value="{{ $datas->id}}">
          </div>
          <div class="form-group">
            <label for="email">kd_barang:</label>
            <input type="text" class="form-control" id="kd_barang" name="kd_barang" value="{{ $datas->kd_barang}}">
          </div>
          <div class="form-group">
            <label for="nohp">nama_barang:</label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ $datas->nama_barang}}">
          </div>
          <div class="form-group">
            <label for="nohp">stok:</label>
            <input type="text" class="form-control" id="stok" name="stok" value="{{ $datas->stok}}">
          </div>
          <div class="form-group">
            <label for="nohp">harga:</label>
            <input type="text" class="form-control" id="harga" name="harga" value="{{ $datas->harga}}">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-md btn-primary">Submit</button>
            <button type="reset" class="btn btn-md btn-danger">Cancel</button>
          </div>
        </form>
        @endforeach
      </div>
    </section>
    @endsection