<x-layout.app title="Blog - Edit">
    <h1 class="text-center mt-3 font-monospace">Edit Post</h1>
    <div class="d-flex justify-content-center">
        <div class="card w-50 mt-3">
            <div class="card-body">
                <form action="{{ route('posts.update', $post) }}" method="post">
                    @csrf @method('PATCH')
                    @include('posts.form-fields')
                    <a class="btn btn-secondary" href="{{ route('posts.index') }}">{{ __('Return') }}</a>
                    <button class="btn btn-primary" type="submit">{{ __('Update') }}</button>
                </form>
            </div>
        </div>
    </div>
</x-layout.app>
