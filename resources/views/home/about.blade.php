@extends('layout')
@section('content')
    <div class="card card-body bg-light">
        <div class="row">
            <div class="col">
                <div class="pb-2 mt-4 mb-2 border-bottom">
                    <h2>About</h2>
                </div>
                {!! lorem(4) !!}
            </div>
        </div>
    </div>
@endsection