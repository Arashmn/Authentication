@extends('layout.master')
@section('title', __('public.forget main'))
@section('content')
    <section class="vh-100">
        <div class="container-fluid h-custom my-5 ">
            <div class="row d-flex justify-content-center align-items-center h-100 pt-5">
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1  text-end    ">
                    <form autocomplete="off" action="{{ route('auth.resetPasword') }}" method="post">
                        @csrf
                          <input type="hidden" name="token" value="{{ $token }}">
                        <x-validation />
                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" name="password" class="form-control form-control-lg text-end"
                                placeholder="@lang('public.restPassworddic')" />
                            <label class="form-label" for="form3Example4">@lang('public.restPassword')</label>
                        </div>
                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" name="password_confirmation" class="form-control form-control-lg text-end"
                                placeholder="@lang('public.repetrestPassworddic')" />
                            <label class="form-label" for="form3Example4">@lang('public.repetrestPassword')</label>
                        </div>
                        <div class="text-center text-lg-start mt-4 pt-2 ">
                            <button type="submit" class="btn btn-primary btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem; ">@lang('public.Btn reset')</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>
@endsection
