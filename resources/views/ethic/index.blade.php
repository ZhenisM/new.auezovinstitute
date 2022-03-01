@extends('layouts.app')

@section('content')
    <div>
        <div class="pnwes">
            <div class="pnwes__way">
                <br>
                <br>
                <a href="{{ URL::to('/') }}">{{ trans('content.main') }}</a>&nbsp;/&nbsp;
                <a>{{ trans('content.ethic') }}</a>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <a href="/ethic/ethicofficer">Уполномоченный по этике</a>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <a href="/ethic/documentsList">Документы</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--<script src="js/script.js"></script>--}}
@endsection
