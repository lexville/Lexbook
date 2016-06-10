@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-lg-5">
            @include("layouts.partials.user")
        </div>
        <div class="col-lg-4 col-lg-offset-3">
            <!-- Friends, friend requests -->
        </div>
    </div>
@stop
