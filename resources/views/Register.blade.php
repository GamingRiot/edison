@extends('layout.home')
@section('title')
    Register
@endsection
@section('content')

    <body style="position: relative;min-height: 100vh;background: linear-gradient(180deg, #000000 0%, #1E1E1E 100%);">
        <x-navbar />
        <div class="comtainer form-register">
            <form method="post">
                @csrf
                @include('errors')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter name">

                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp"
                        placeholder="Enter email">

                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>
                <div class="form-group ">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation"
                        placeholder="Confirm Password">
                </div>

                <button type="submit" class="btn btn-primary submit-btn">Submit</button>
            </form>
            @if (session()->has('success'))
                <div class="alert alert-success mt-3">
                    {{ session()->get('success') }}
                </div>
            @endif
        </div>

    </body>
@endsection
