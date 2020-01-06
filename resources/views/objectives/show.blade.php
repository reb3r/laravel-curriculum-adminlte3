@extends((Auth::user()->id == env('GUEST_USER')) ? 'layouts.contentonly' : 'layouts.master')

@section('title')
    {{ trans('global.details') }}
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item">
        @if (Auth::user()->id == env('GUEST_USER')) 
            <a href="/navigators/{{Auth::user()->organizations()->where('organization_id', '=',  Auth::user()->current_organization_id)->first()->navigators()->first()->id}}">Home</a>
        @else
            <a href="/">{{ trans('global.home') }}</a>
        @endif
    </li>
    <li class="breadcrumb-item "><a href="/curricula/{{ $objective->curriculum_id}}">{{ trans('global.curriculum.title_singular') }}</a></li>
    <li class="breadcrumb-item active">{{ trans('global.details') }}</li>
    <li class="breadcrumb-item "><a href="/documentation" class="text-black-50"><i class="fas fa-question-circle"></i></a></li>
@endsection
@section('content')
    <objective-view
        ref="curriculumView"
        :objective="{{ $objective }}" 
    >
    </objective-view>
<terminal-objective-modal></terminal-objective-modal>
<enabling-objective-modal></enabling-objective-modal>
<content-modal></content-modal>
<content-create-modal></content-create-modal>
<objective-medium-modal></objective-medium-modal>
<medium-modal></medium-modal>
@endsection
@section('scripts')
@parent

@endsection