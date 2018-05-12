@extends('admin.layouts.layout',['title' => 'Posts'])
@section('content')
    <div class="row">
        <div class="col-8">
            <h3>Manage Posts</h3>
        </div>
        <div class="col-4 text-right">
            <a href="{{ route('admin.posts.create') }}" class="btn btn-success btn-sm">Add New</a>
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
                <th class="col-2 text-center">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr class="d-flex">
                    <th class="col-1">{{$post->id}}</th>
                    <td class="col-3">{{$post->title}}</td>
                    <td class="col-2">{{$post->category->name}}</td>
                    <td class="col-2">{{$post->user->name}}</td>
                    <td class="col-2">{{$post->tags}}</td>
                    <td class="col-2">
                        <form id="deleteForm" class="form-inline actions-form justify-content-center" method="POST"
                              action="{{ route('admin.posts.destroy', $post) }}">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <div class="form-row">
                                <div class="col">
                                    <a href="{{ route('admin.posts.edit', $post) }}"
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