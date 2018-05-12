@extends('admin.layouts.layout',['title' => 'Users'])
@section('content')
    <div class="row">
        <div class="col-8">
            <h3>Manage Users</h3>
        </div>
        <div class="col-4 text-right">
            <a href="{{ route('admin.users.create') }}" class="btn btn-success btn-sm">Add New</a>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-hover border-bottom">
            <thead class="thead-dark">
            <tr class="d-flex">
                <th class="col-1">#</th>
                <th class="col-3">Name</th>
                <th class="col-5">Email</th>
                <th class="col-3 text-center">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr class="d-flex">
                    <th class="col-1">{{$user->id}}</th>
                    <td class="col-3">{{$user->name}}</td>
                    <td class="col-5">{{$user->email}}</td>
                    <td class="col-3">
                        <form id="deleteForm" class="form-inline actions-form justify-content-center" method="POST"
                              action="{{ route('admin.users.destroy', $user) }}">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <div class="form-row">
                                <div class="col">
                                    <a href="{{ route('admin.users.edit', $user) }}"
                                       class="btn btn-primary btn-sm">Edit</a>
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </div>
                            </div>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection