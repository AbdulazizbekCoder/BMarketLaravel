@extends('components.loyaut.auth')
@section('content')

    <div class="text text-center text-primary fs-2 mt-3 fw-bold">Register</div>
    <hr>
    <div class="input">
        <form action="{{route('registerStore')}}" method="post">
            @csrf
            <input name="name" class="form-control mt-3 " type="text" placeholder="Username" required>
            <input name="email" class="form-control mt-3 " type="email" placeholder="Email" required>
            <input name="phone" class="form-control mt-3 " type="number" placeholder="Phone number..." required>
            <input name="password" class="form-control mt-3 " type="password" placeholder="Password..." required>
            <button class="btn btn-primary mt-3 mb-2  w-100" type="submit">Register</button>
            <a href="{{route('home')}}" class="btn btn-dark  mb-4  w-100">Orqaga</a>
        </form>
    </div>


@endsection
