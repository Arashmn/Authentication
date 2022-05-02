@if (session('success'))
    <div class="alert alert-success text-center" role="alert">{{ session('success') }}</div>
@endif

@if (session('failed'))
    <div class="alert alert-danger text-center" role="alert">{{ session('failed') }}</div>
@endif
