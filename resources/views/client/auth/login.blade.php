@extends('client.auth.master')

@section('content')
    <div class="col-11 col-sm-10 col-xl-8">
        <div class="card border border-translucent auth-card">
            <div class="card-body pe-md-0">
                <div class="row align-items-center gx-0 gy-7">
                    <div
                        class="col-auto bg-body-highlight dark__bg-gray-1100 rounded-3 position-relative overflow-hidden auth-title-box">
                        <div class="bg-holder"
                            style="background-image:url({{ asset('theme/prium.github.io/phoenix/v1.22.0/assets/img/bg/38.png') }});">
                        </div>
                        <!--/.bg-holder-->
                        <div
                            class="position-relative px-4 px-lg-7 pt-7 pb-7 pb-sm-5 text-center text-md-start pb-lg-7 pb-md-7">
                            <h3 class="mb-3 text-body-emphasis fs-7">Phoenix Authentication</h3>
                            <p class="text-body-tertiary">Give yourself some hassle-free development process with the
                                uniqueness of Phoenix!</p>
                            <ul class="list-unstyled mb-0 w-max-content w-md-auto">
                                <li class="d-flex align-items-center"><span
                                        class="uil uil-check-circle text-success me-2"></span><span
                                        class="text-body-tertiary fw-semibold">Fast</span></li>
                                <li class="d-flex align-items-center"><span
                                        class="uil uil-check-circle text-success me-2"></span><span
                                        class="text-body-tertiary fw-semibold">Simple</span></li>
                                <li class="d-flex align-items-center"><span
                                        class="uil uil-check-circle text-success me-2"></span><span
                                        class="text-body-tertiary fw-semibold">Responsive</span></li>
                            </ul>
                        </div>
                        <div class="position-relative z-n1 mb-6 d-none d-md-block text-center mt-md-15"><img
                                class="auth-title-box-img d-dark-none" src="{{asset('theme/prium.github.io/phoenix/v1.22.0/assets/img/spot-illustrations/auth.png')}}"
                                alt="" /><img class="auth-title-box-img d-light-none"
                                src="{{asset('theme/prium.github.io/phoenix/v1.22.0/assets/img/spot-illustrations/auth-dark.png')}}" alt="" /></div>
                    </div>
                    <div class="col mx-auto">
                        <div class="auth-form-box">
                            <div class="text-center mb-7"><a class="d-flex flex-center text-decoration-none mb-4"
                                    href="{{ asset('theme/prium.github.io/phoenix/v1.22.0/index.html') }}">
                                    <div class="d-flex align-items-center fw-bolder fs-3 d-inline-block"><img
                                            src="{{ asset('theme/prium.github.io/phoenix/v1.22.0/assets/img/icons/logo.png') }}"
                                            alt="phoenix" width="58" /></div>
                                </a>
                                <h3 class="text-body-highlight">Sign In</h3>
                                <p class="text-body-tertiary">Get access to your account</p>
                            </div><button class="btn btn-phoenix-secondary w-100 mb-3"><span
                                    class="fab fa-google text-danger me-2 fs-9"></span>Sign in with google</button><button
                                class="btn btn-phoenix-secondary w-100"><span
                                    class="fab fa-facebook text-primary me-2 fs-9"></span>Sign in with facebook</button>
                            <div class="position-relative">
                                <hr class="bg-body-secondary mt-5 mb-4" />
                                <div class="divider-content-center bg-body-emphasis">or use email</div>
                            </div>
                            <div class="mb-3 text-start"><label class="form-label" for="email">Email address</label>
                                <div class="form-icon-container"><input class="form-control form-icon-input" id="email"
                                        type="email" placeholder="name@example.com" /><span
                                        class="fas fa-user text-body fs-9 form-icon"></span></div>
                            </div>
                            <div class="mb-3 text-start"><label class="form-label" for="password">Password</label>
                                <div class="form-icon-container" data-password="data-password"><input
                                        class="form-control form-icon-input pe-6" id="password" type="password"
                                        placeholder="Password" data-password-input="data-password-input" /><span
                                        class="fas fa-key text-body fs-9 form-icon"></span><button
                                        class="btn px-3 py-0 h-100 position-absolute top-0 end-0 fs-7 text-body-tertiary"
                                        data-password-toggle="data-password-toggle"><span
                                            class="uil uil-eye show"></span><span
                                            class="uil uil-eye-slash hide"></span></button></div>
                            </div>
                            <div class="row flex-between-center mb-7">
                                <div class="col-auto">
                                    <div class="form-check mb-0"><input class="form-check-input" id="basic-checkbox"
                                            type="checkbox" checked="checked" /><label class="form-check-label mb-0"
                                            for="basic-checkbox">Remember me</label></div>
                                </div>
                                <div class="col-auto"><a class="fs-9 fw-semibold" href="forgot-password.html">Forgot
                                        Password?</a></div>
                            </div><button class="btn btn-primary w-100 mb-3">Sign In</button>
                            <div class="text-center"><a class="fs-9 fw-bold" href="sign-up.html">Create an account</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
