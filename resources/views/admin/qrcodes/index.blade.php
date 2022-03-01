@extends('admin.qrcodes.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Управление объектами QRCode</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('admin.qrcodes.create') }}"> Создать новый QRCode</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>Наименование</th>
            <th>Ссылка</th>
            <th>QRCode</th>
            <th width="280px">Действие</th>
        </tr>
        @foreach ($qrcodes as $qrcode)
            <tr>
                <td>{{ $qrcode->name }}</td>
                <td>{{ $qrcode->source }}</td>
                <td>
                    <img src="data:image/png;base64, {!! $qrcode->qrcode !!} ">
                </td>
                <td>
                    <form onsubmit="if(confirm('Удалить?')){ return true }else{ return false }" action="{{ route('admin.qrcodes.destroy',$qrcode->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('admin.qrcodes.show',$qrcode->id) }}"><i class="fa fa-fw fa-eye"></i></a>
                        <a class="btn btn-primary" href="{{ route('admin.qrcodes.edit',$qrcode->id) }}"><i class="fa fa-fw fa-edit"></i></a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="fa fa-fw fa-trash"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
