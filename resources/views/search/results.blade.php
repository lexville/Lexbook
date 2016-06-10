@extends('layouts.default')

@section('content')
    <h4>You serched for "{{ Request::input('query') }}"</h4>

    @if (!$users->count())
        <h3>Sorry we do not have such a user </h3>
    @else
        <div class="row">
            <div class="col-lg-12">
                @foreach( $users as $user)
                    @include('layouts/partials/user')
                @endforeach
            </div>
        </div>
    @endif
@stop
