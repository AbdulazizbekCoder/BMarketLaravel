@extends('components.loyaut.auth')
@section('content')

    <div class="text text-center text-primary fs-2 mt-3 fw-bold">Login</div>
    <hr>
    <div class="input">
        <form action="{{route('loginStore')}}" method="post" id="login-form">
            @csrf
            <input name="phone" class="LoginPhone form-control mt-3" type="text" placeholder="Phone number..." required>
            <input name="password" class="form-control mt-3" type="password" placeholder="Password..." required>
            <button class="btn btn-primary mt-3 mb-2" type="submit">Kirish</button>
            <a href="{{route('register')}}" class="btn btn-success mt-3 mb-2" type="submit">Register</a>
            <a href="{{route('home')}}" class="btn btn-dark mt-3  mb-2" style="margin-left: 160px">Orqaga</a>
        </form>
    </div>


@endsection
