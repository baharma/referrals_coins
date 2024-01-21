@extends('layouts.app-login')

@section('content')

<div id="particles-js" class="snow"></div>

<main>
    <div class="left-side"></div>

    <div class=""  style="padding: 40px" >
        <h1>Register</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input  class="form-control" type="text" name="name" >
              </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" type="email" name="email" aria-describedby="emailHelp">
              </div>

              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input class="form-control"  type="password"
                name="password" id="exampleInputPassword1">
              </div>

              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input class="form-control"  type="password"
                name="password_confirmation" required autocomplete="new-password">
              </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Reverall Code</label>
                <input  class="form-control" type="text" value="{{ $reverarll }}" name="token_reveral" >
              </div>

              <button type="submit" class="btn btn-primary">Register</button>
              <br><a href="{{ route('login') }}" class="">
                Already Have Account ?
            </a>
        </form>
    </div>

</main>


@endsection


@push('style')
<link rel="stylesheet" href="{{ asset('Arsha/assets/css/style-login.css') }}">
@endpush
