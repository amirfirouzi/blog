@extends('layouts.layout')
@section('content')
    <div class="card card-body bg-light">
        <div class="pb-2 mt-4 mb-2 border-bottom">
            <h3>Home</h3>
        </div>
        <div class="row">
            <div class="col-md-6">
                @include('posts._post')
            </div>
            <div class="col-md-6">
                @include('posts._post')
            </div>
        </div>
    </div>
@endsection