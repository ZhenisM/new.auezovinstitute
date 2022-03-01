@extends('admin.qrcodes.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>QRCode</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin.qrcodes.index') }}"> Назад</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Наименование:</strong>
                {{ $qrcode->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>QRCode:</strong>
                <img src="data:image/png;base64, {!! $qrcode->qrcode !!} ">
            </div>
        </div>
    </div>
@endsection
