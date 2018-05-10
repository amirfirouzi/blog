@extends('layout')
@section('content')
    <div class="card card-body bg-light">
        <div class="row">
            <div class="col">
                <div class="pb-2 mt-4 mb-2 border-bottom">
                    <h2>Contact</h2>
                </div>
                <form>
                    <div class="form-group">
                        <label for="contact_name">Name</label>
                        <input type="email" class="form-control" id="contact_name" placeholder="John Doe">
                    </div>
                    <div class="form-group">
                        <label for="contact_email">Email address</label>
                        <input type="email" class="form-control" id="contact_email" placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                        <label for="contact_message">Message</label>
                        <textarea class="form-control" id="contact_message" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-info">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection