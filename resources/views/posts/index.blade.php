<x-layout.app title="Blog">
    <header class="text-center mt-3">
        <h1 class="font-monospace">Post</h1>
        <a class="btn btn-primary btn-sm" href="{{ route('posts.create') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send text-danger"
                 viewBox="0 0 16 16">
                <path
                    d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"/>
            </svg>
            {{ __('Create new post') }}
        </a>
    </header>
    <div class="row mt-2">
        @foreach($posts as $post)
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="mt-2 mb-2">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text fst-italic">{{ $post->body_format }}</p>
                            <form action="{{ route('posts.destroy', $post) }}" method="post">
                                @csrf @method('DELETE')
                                <div class="float-end">
                                    <a class="btn btn-outline-light btn-sm text-info"
                                       href="{{ route('posts.show', $post) }}">{{ __('Show') }}</a>
                                    <a class="btn btn-outline-light btn-sm text-warning"
                                       href="{{ route('posts.edit', $post) }}">{{ __('Edit') }}</a>
                                    <button class="btn btn-outline-light btn-sm text-danger"
                                            type="submit">{{ __('Delete') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-layout.app>


