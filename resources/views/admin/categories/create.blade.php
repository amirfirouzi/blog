@extends('admin.layouts.layout',['title' => 'Categories'])
@section('content')
    <div class="row">
        <div class="col">
            <div class="pb-2 mt-4 mb-2 border-bottom">
                <h2>Create Category</h2>
            </div>
            <form method="POST" action="{{url('admin/categories')}}">
                <div class="form-group">
                    <label for="contact_name">Name</label>
                    <input type="text" class="form-control" id="contact_name" placeholder="News">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection