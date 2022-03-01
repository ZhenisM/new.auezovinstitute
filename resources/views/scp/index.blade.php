@extends('layouts.app')

@section('content')
    <div class="wrap__project">
        <div class="project">
            <div class="dep__way">
                <a href="{{ URL::to('/') }}">{{ trans('content.main') }}</a>&nbsp;/&nbsp;
                {{ trans('header.science') }}
            </div>
            <div class="project__page container">
                <div class="row">
                    <div class="col-sm-12 col-md-4 mb-5">
                        <a class="bg__first" href="{{ route('sciences.index') }}">
                            <div class="project__page__block">
                                <div class="project__page__block__text">
                                    {{ trans('content.grant_funding') }}
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-4 mb-5">
                        <a class="bg__nth" href="{{ route('seconds.index') }}">
                            <div class="project__page__block">
                                <div class="project__page__block__text">
                                    {{ trans('content.financing_program') }}
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-4 mb-5">
                    <a class="bg__last" href="{{ route('thehirds.index') }}">
                        <div class="project__page__block">
                            <div class="project__page__block__text">
                                {{ trans('content.state_tasks') }}
                            </div>
                        </div>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--<script src="js/script.js"></script>--}}
@endsection
