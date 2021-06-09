@extends('layout.home')

@section('content')

    <body style="position: relative;min-height: 100vh;background: linear-gradient(180deg, #000000 0%, #1E1E1E 100%);">
        <x-navbar />
        <div class="comtainer form-register">
            <form method="post">
                @csrf
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp"
                        placeholder="Enter email">

                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>


                <button type="submit" class="btn btn-primary submit-btn">Submit</button>
            </form>
        </div>

    </body>
@endsection
