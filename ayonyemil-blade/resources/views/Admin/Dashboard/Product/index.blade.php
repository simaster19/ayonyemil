@extends('Admin.Dasboard.index')
@section('content')
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Masuk</h5>
            <h1 class="mb-5">Isikan Data Dengan Benar</h1>
        </div>
        <div class="row g-4">
            @if (session()->has('error_message'))
                <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                    <ul>

                        @foreach (session('error_message')->messages() as $error_message)
                            @foreach ($error_message as $value)
                                <li>{{ $value }}</li>
                            @endforeach
                        @endforeach
                    </ul>

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session()->has('message'))
                <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                    {{ session('message') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="col-md-10 m-auto">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <form action="{{ route('prosses_login') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="username" name="username"
                                        placeholder="Username / Email">
                                    <label for="name">Username</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Your Email">
                                    <label for="email">Password</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <img class="d-block m-auto" src="img/google.png" style="width: 50px; height: 50px;"
                                        alt="">
                                </div>


                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Masuk</button>
                            </div>
                            <div class="col-12 text-center">
                                <a href="{{ route('form_register') }}">
                                    <p>DAFTAR</p>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
