@extends('layout.master')
@section('title', __('public.login main'))
@section('content')
    <section class="vh-100">
        <div class="container-fluid h-custom my-5 ">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                        class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1  text-end    ">
                    <form  autocomplete="off" action="{{ route('auth.login.store') }}" method="post">
                        @csrf
                        <x-alert></x-alert>
                        <x-validation />
                        <!-- Email input -->
                        <div class="form-outline mb-4 ">
                            <input type="text" name="email" class="form-control form-control-lg text-end"
                                placeholder="@lang('auth.Enter a valid email address')" />
                            <label class="form-label" for="form3Example3">@lang('auth.Your Email')</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" name="password" class="form-control form-control-lg text-end"
                                placeholder="@lang('auth.Enter password')" />
                            <label class="form-label" for="form3Example4">@lang('auth.Password')</label>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-0 ">
                                <input class="form-check-input me-2" name="remember" type="checkbox" value=""
                                    id="form2Example3" />
                                <label class="form-check-label " for="form2Example3">
                                    @lang('auth.Remember me')
                                </label>
                            </div>
                            <a href="{{ route('auth.forget') }}" class="text-body"> @lang('auth.Forgot password?')</a>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2 text-end">
                            <button type="submit" class="btn btn-primary btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem; ">@lang('auth.Btn Loggin')</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0 text-end">@lang('auth.Don\'t have an account?') <a
                                    href="{{ route('auth.Register') }}" class="link-danger">@lang('auth.Btn Register')</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>

@endsection
