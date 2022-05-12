@extends('template.landing-page')
@section('content')
        <main>
            <section>
                <div class="bg-auth">
                    <div class="container">
                        <div class="auth pb-5">
                            <div class="row d-flex align-items-center">
                                <div class="col-12 col-lg-6">
                                    <div class="auth-card">
                                        <div class="text-container text-light text-center">
                                            <h1 class="mb-3">LOGIN</h1>
                                        </div>
                                        <div class="contact-form">
                                            <form class="text-light" method="POST" action="{{ route('login') }}">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="email" class="form-control costume-form @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus id="email" placeholder="Your Email ...">
                                                     @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" class="form-control costume-form @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"" id="password" placeholder="Your Password ...">
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group text-center">
                                                    <input type="submit" value="Login" class="btn btn-costume btn-danger">
                                                </div>
                                                <div class="text-center">
                                                    @if (Route::has('password.request'))
                                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                                            {{ __('Forgot Your Password?') }}
                                                        </a>
                                                    @endif
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="image-container">
                                        <img src="../img/grangger.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
@endsection

