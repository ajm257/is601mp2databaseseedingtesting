
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Contact</div>
                    <p class="lead">Please use this form to contact the site owner.</p>

                    <div class="card-body">
                        <form action="{{route('contact.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input name="name" class="form-control" id="name" placeholder="Full Name">
                        </div>

                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input name="email" class="form-control" id="email" placeholder="name@example.com">
                        </div>

                        <div class="form-group">
                            <label for="body">Message</label>
                            <textarea name="body" class="form-control" id="body" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

