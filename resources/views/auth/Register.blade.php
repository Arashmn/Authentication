@extends('layout.master')
@section('title', __('public.Register main'))
@section('content')
<section class="vh-100" style="background-color: #eee;">
    <div class="container h-100 pt-5">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">@lang('auth.Sign up')</p>

                                <form class="mx-1 mx-md-4 text-end" action="{{ route('auth.Register.store') }}" method="POST">
                                    @csrf
                                    <x-alert/>
                                     <x-validation/>
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="text" name="name" value="{{ old('name')}}" class="form-control" />
                                            <label class="form-label" for="form3Example1c">@lang('auth.Your Name')</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="email" name="email"  value="{{ old('email')}}"
                                                class="form-control" />
                                            <label class="form-label" for="form3Example3c">@lang('auth.Your Email')</label>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="text" name="phone_Number"  value="{{ old('phone_Number')}}" id="form3Example3c"
                                                class="form-control" />
                                            <label class="form-label"
                                                for="form3Example3c">@lang('auth.mobile')</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="password" name="password"  id="form3Example4c"
                                                class="form-control" />
                                            <label class="form-label"
                                                for="form3Example4c">@lang('auth.Password')</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="password" name="password_confirmation"
                                                id="form3Example4cd" class="form-control" />
                                            <label class="form-label" for="form3Example4cd">@lang('auth.Repeat your password')</label>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <button type="submit"
                                            class="btn btn-primary btn-lg">@lang('public.Btn Register')</button>
                                    </div>

                                </form>
                                <p class="small fw-bold mt-2 pt-1 mb-0 text-end">@lang('auth.Do you have an account?') <a
                                    href="{{ route('auth.login') }}"
                                    class="link-danger">@lang('auth.Btn Loggin')</a></p>

                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                                    class="img-fluid" alt="Sample image">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection