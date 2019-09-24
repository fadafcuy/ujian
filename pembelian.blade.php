@extends('template')
@section('content')

    <section class="main-section">
    <div class="content">
    <h1>Data pembelian</h1>
    @if(Session::has('alert_message'))
        <div class="alert alert-success">
            <strong>{{ Session::get('alert_message') }}</strong>
        </div>
        @endif
        <hr>
        <table class="table table-bordered">
            <thead>
                <tr>
                <a href="{{ route('pembelian.create')}}" class="btn btn-sm btn-primary">create</a>
                    <th>id</th>
                    <th>kd_barang</th>
                    <th>jml</th>
                    <th>total_harga</th>
                    <th>aksi</th>
                </tr>
            </thead>
            <tbody>
            @php $no = 1; @endphp
            @foreach($data as $datas)
                <tr>
                    <td>{{$datas->id}}</td>
                    <td>{{$datas->kd_barang}}</td>
                    <td>{{$datas->jml}}</td>
                    <td>{{$datas->total_harga}}</td>
                    <td>
                        <form action="{{ route('pembelian.destroy', $datas->id)}}" method="post">
                        {{ csrf_field()}}
                        {{ method_field('DELETE')}}
                        <a href="{{ route('pembelian.edit',$datas->id)}}" class="btn btn-sm btn-primary">Edit</a>
                        
                        <button class="btn btn-sm btn-danger" type="sumbit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection