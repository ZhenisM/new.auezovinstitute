@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Создание статьи Программа целевого финансирования @endslot
            @slot('parent') Главная @endslot
            @slot('active') Программа целевого финансирования @endslot
        @endcomponent

        <hr />

        <form class="form-horizontal" action="{{route('admin.seconds.store')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            {{-- Form include --}}
            @include('admin.seconds.partials.form')

            <input type="hidden" name="created_by" value="{{Auth::id()}}">
        </form>
    </div>
@endsection
