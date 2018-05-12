@extends('admin.layouts.layout',['title' => 'Users'])
@section('content')
    <div class="row">
        <div class="col">
            <div class="pb-2 mt-4 mb-2 border-bottom">
                <h2>Create User</h2>
            </div>
            <form method="POST" action="{{url('admin/users')}}">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{ $user->email }}">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" value="{{ $user->password }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection