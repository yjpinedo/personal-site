<x-layout.app title="Login">
    <h1 class="text-center mt-2 font-monospace">{{ __('Login') }}</h1>
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-8 col-xl-6">
            <div class="card mt-3">
                <div class="card-body">
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Email address') }}</label>
                            <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}" autofocus="autofocus">
                            @error('email')
                            <small class="text-danger fw-semibold font-monospace">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <input type="password" name="password" class="form-control" id="password">
                            @error('password')
                            <small class="text-danger fw-semibold font-monospace">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="remember" name="remember">
                            <label class="form-check-label" for="remember">{{ __('Remember') }}</label>
                        </div>
                        <div class="float-end">
                            <a class="btn btn-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout.app>

