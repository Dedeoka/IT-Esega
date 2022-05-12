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
                                            <h2 class="mb-3">{{ __('Verify Your Email Address') }}</h2>
                                        </div>
                                        <div class="contact-form">
                                             @if (session('resent'))
                                                <div class="alert alert-success" role="alert">
                                                    {{ __('A fresh verification link has been sent to your email address.') }}
                                                </div>
                                            @endif
                                            <div style="color: #FFFFFF">
                                            {{ __('Before proceeding, please check your email for a verification link.') }}
                                            {{ __('If you did not receive the email') }},
                                            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                                @csrf
                                                <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                                            </form>
                                            </div>
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
