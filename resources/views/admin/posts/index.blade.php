@extends('admin.layouts.layout',['title' => 'Posts'])
@section('content')

    <div class="row">
        <div class="col-8">
            <h3>Manage Posts</h3>
        </div>
        <div class="col-4 text-right">
            <button type="button" class="btn btn-success btn-sm">Add New</button>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-hover border-bottom">
            <thead class="thead-dark">
            <tr class="d-flex">
                <th class="col-1">#</th>
                <th class="col-3">Title</th>
                <th class="col-2">Category</th>
                <th class="col-2">Auther</th>
                <th class="col-2">Tags</th>
                <th class="col-2 text-center">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr class="d-flex">
                <th class="col-1">1</th>
                <td class="col-3">Mark</td>
                <td class="col-2">Otto</td>
                <td class="col-2">@mdo</td>
                <td class="col-2">@mdo</td>
                <td class="col-2 text-center">
                    <button type="button" class="btn btn-primary btn-sm">Edit</button>
                    <button type="button" class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection