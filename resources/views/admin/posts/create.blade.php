@extends('admin.layouts.layout',['title' => 'Posts'])
@section('content')
    <div class="row">
        <div class="col">
            <div class="pb-2 mt-4 mb-2 border-bottom">
                <h2>Create Post</h2>
            </div>
            <form method="POST" action="{{route('admin.posts.index')}}">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title">
                </div>
                <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                    <label for="category">Category</label>
                    <select name="category_id" id="category" class="form-control" required autofocus>
                        @foreach($categories as $key => $category)
                            <option value="{{ $key }}">{{ $category }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group{{ $errors->has('user') ? ' has-error' : '' }}">
                    <label for="user">User</label>
                    <select name="user_id" id="user" class="form-control" required autofocus>
                        @foreach($users as $key => $user)
                            <option value="{{ $key }}">{{ $user }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="tags">Tags</label>
                    <input type="text" class="form-control" name="tags" id="tags">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection