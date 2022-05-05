@extends('layout.master')
@section('title', __('public.forget main'))
@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="text-center ">
                            <h3><i class="fa fa-lock fa-4x"></i></h3>
                            <h2 class="text-center">@lang('public.Forgot Password?')</h2>
                            <p class='py-3 h6'>@lang('public.You can reset your password here.')</p>
                            <div class="panel-body">
                                 <x-alert/>
                                <x-validation/>
                                <form  autocomplete="off" class="form" action="{{ route('auth.forget.store') }}" method="post">
                                   @csrf
                                    <div class="form-group ">
                                        <div class="input-group ">
                                            <span class="input-group-addon "><i
                                                    class="glyphicon glyphicon-envelope color-blue text-end"></i></span>
                                            <input id="email" name="email" placeholder="@lang('public.email address')"
                                                class="form-control text-end" type="email">
                                        </div>
                                    </div>
                                    <div class="form-group pt-5">
                                        <button type="submit" class="btn btn-primary btn-lg"
                                        style="padding-left: 2.5rem; padding-right: 2.5rem; ">@lang('public.Btn Rest')</button>
                                    </div>

                                    <input type="hidden" class="hide" name="token" id="token" value="">
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
