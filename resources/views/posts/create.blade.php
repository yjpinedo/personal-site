<x-layout.app title="Blog - Create">
    <h1 class="text-center mt-3 font-monospace">Create Post</h1>
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-8 col-xl-6">
            <div class="card mt-3">
                <div class="card-body">
                    <form action="{{ route('posts.store') }}" method="post">
                        @csrf
                        @include('posts.form-fields')
                        <div>
                            <a class="btn btn-secondary" href="{{ route('posts.index') }}">{{ __('Return') }}</a>
                            <button class="btn btn-primary" type="submit">{{ __('Store') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout.app>
