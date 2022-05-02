<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
    <div class="container-fluid">

        <a class="navbar-brand" alt='صفحه اصلی' href="/"><img src="{{ asset('image/img.png') }}"
                alt=""></a>
        @guest
            <div>

                <a href="{{ route('auth.Register') }}" class="btn btn-primary">@lang('public.Btn Register')</a>
                <a href="{{ route('auth.login') }}" class="btn btn-primary">@lang('public.Btn Loggin')</a>
            </div>
        @endguest
        @auth
            <div>

                <a href="{{ route('auth.login.destory') }}" class="btn btn-primary">@lang('public.Exit')</a>

            </div>
        @endauth

    </div>
</nav>
