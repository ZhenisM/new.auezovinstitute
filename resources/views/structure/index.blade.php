@extends('layouts.app')

@section('content')
  	<div>
		<div class="structur">
			<div class="structur__way">
				<a href="{{ URL::to('/') }}">{{ trans('content.main') }}</a>&nbsp;/&nbsp;
				<a>{{ trans('content.structure') }}</a>
			</div>
			<div class="structur__state">
				<p><i class="fas fa-users"></i>&nbsp;&nbsp;{{ trans('content.structure') }}</p>
			</div>
            <div class="structur__admins__wrap">
                Structure was here!
            </div>
    	</div>
    </div>
@endsection
