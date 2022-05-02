@extends('layout.master')
@section('title', __('public.title main'))
@section('content')

    <div class="flex-center course-title position-ref full-height">

        @guest
        <x-alert />
            <div class="content">
                <div class="text-center m-5 h1 fw-bold">
                    @lang('public.Welcome to systeam')
                </div>

                <div class="text-center m-5 h6 ">
                    @lang('public.about site')
                </div>
            </div>

        @endguest

        @auth
            {{-- <div class="text-center m-5 h1 fw-bold">
                @lang('public.Welcome Mr') {{ Auth::user()?->name }}
            </div> --}}
   
            <x-profile :user="Auth::user()"></x-profile>
        @endauth


    </div>

@endsection
