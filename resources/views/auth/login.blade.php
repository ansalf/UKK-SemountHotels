@extends('layouts.login')

@section('container')

<div class="container col-xl-8 col-xxl-6">
    <div class="row align-items-center py-5">

        @if (session()->has('loginError'))
            <div class="alert alert-danger col-lg-10 mx-auto col-lg-5" role="alert">
                {{ session('loginError') }}
            </div>
        @endif

        @if (session()->has('success'))
            <div class="alert alert-success col-lg-10 mx-auto col-lg-5" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <h2 class="text-center mb-4">Login</h2>
        <div class="col-lg-8 mx-auto col-lg-4">
            <form action="/login" method="POST" class="p-4 p-md-5 border rounded-3 bg-light" autocomplete="off">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="username" name="username" style="border-radius: 10px;" placeholder="Username" autofocus required>
                    <label for="username">Username</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="password" name="password" style="border-radius: 10px;" placeholder="Password" required>
                    <label for="password">Password</label>
                </div>
                <button class="w-100 btn btn-lg btn-secondary" type="submit" style="border-radius: 30px;">Login</button>
                <hr class="my-4">
                <div class="text-center">
                    <small class="text-muted text-center" >Not registered? <a href="/register">Register Now!</a></small>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection