<x-layout.app title="Register">
    <h1 class="text-center mt-2 font-monospace">Register</h1>
    <div class="d-flex justify-content-center">
        <div class="card w-50 mt-3">
            <div class="card-body">
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}" autofocus="autofocus">
                        @error('name')
                        <small class="text-danger fw-semibold font-monospace">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}">
                        @error('email')
                        <small class="text-danger fw-semibold font-monospace">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                        @error('password')
                        <small class="text-danger fw-semibold font-monospace">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Password Confirmation</label>
                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                        @error('password_confirmation')
                        <small class="text-danger fw-semibold font-monospace">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-between">
                        <a class="btn btn-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout.app>

