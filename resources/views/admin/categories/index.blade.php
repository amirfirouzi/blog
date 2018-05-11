@extends('admin.layouts.layout',['title' => 'Categories'])
@section('content')
    <div class="table-responsive">
        <table class="table table-hover border-bottom">
            <thead class="thead-dark">
            <tr class="d-flex">
                <th class="col-2">#</th>
                <th class="col-7">Name</th>
                <th class="col-3 text-center">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr class="d-flex">
                <th class="col-2">1</th>
                <td class="col-7">Mark</td>
                <td class="col-3 text-center">
                    <button type="button" class="btn btn-primary btn-sm">Edit</button>
                    <button type="button" class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection