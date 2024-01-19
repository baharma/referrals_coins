@extends('layouts.app-login')

@section('content')
<div id="particles-js" class="snow"></div>

<main>
    <div class="left-side"></div>

    <div class="right-side">
        <h1>Login</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" type="email" name="email" aria-describedby="emailHelp">
              </div>

              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input class="form-control"  type="password"
                name="password" id="exampleInputPassword1">
              </div>

              <button type="submit" class="btn btn-primary">Login</button>
              <br><a href="{{ route('register') }}" class="">
                Register ?
            </a>
        </form>
    </div>

</main>


@endsection


@push('style')
<link rel="stylesheet" href="{{ asset('Arsha/assets/css/style-login.css') }}">
@endpush

