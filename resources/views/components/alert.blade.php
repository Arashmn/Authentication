@if (session('success'))
    <div class="alert alert-success text-center" role="alert">{{ session('success') }}</div>
@endif

@if (session('failed'))
    <div class="alert alert-danger text-center" role="alert">{{ session('failed') }}</div>
@endif
@if (session('successSendEmail'))
    <div class="alert alert-success text-center" role="alert">@lang('public.successSendEmail')</div>
@endif
@if (session('resetPasswordsuccess'))
    <div class="alert alert-success text-center" role="alert">@lang('public.resetPasswordsuccess')</div>
@endif

