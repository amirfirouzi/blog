@extends('admin.layouts.layout',['title' => 'Categories'])
@section('content')
    <div class="row">
        <div class="col-8">
            <h3>Manage Categories</h3>
        </div>
        <div class="col-4 text-right">
            <a href="{{ route('admin.categories.create') }}" class="btn btn-success btn-sm">Add New</a>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-hover border-bottom">
            <thead class="thead-dark">
            <tr class="d-flex">
                <th class="col-2">#</th>
                <th class="col-7">Name</th>
                <th class="col-3 text-center">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr class="d-flex">
                    <th class="col-2">{{$category->id}}</th>
                    <td class="col-7">{{$category->name}}</td>
                    <td class="col-3">
                        <form id="deleteForm" class="form-inline actions-form justify-content-center" method="POST"
                              action="{{ route('admin.categories.destroy', $category) }}">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <div class="form-row">
                                <div class="col">
                                    <a href="{{ route('admin.categories.edit', $category) }}"
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