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
                                            <h2 class="mb-3">{{ __('Reset Password') }}</h2>
                                        </div>
                                        <div class="contact-form">
                                             <form method="POST" action="{{ route('password.update') }}">
                                            @csrf
                                            <input type="hidden" name="token" value="{{ $token }}">
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <input id="email" type="email" class="form-control costume-form @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus placeholder="Your Email ...">
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <input id="password" type="password" class="form-control costume-form @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="New Password ...">
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <input id="password-confirm" type="password" class="form-control costume-form" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password ...">
                                                </div>
                                            </div>
                                            <div class="row mb-0">
                                                <div class="col-md-6 offset-md-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        {{ __('Reset Password') }}
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                        <div class="image-container">
                                        <img src="{{ asset('img/zilong.png')}}" alt="" class="img-fluid">
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
@endsection
