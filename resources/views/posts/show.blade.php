<x-layout.app :title="'Blog - ' . $post->title">
    <h1 class="text-center mt-3 font-monospace">Show Post</h1>
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-8 col-xl-6">
            <div class="card mt-3">
                <div class="card-body">
                    <h2 class="text-center lead fw-semibold">{{ $post->title }}</h2>
                    <hr class="border border-secondary border-3 opacity-75">
                    <figure>
                        <blockquote class="blockquote">
                            <p class="lead fst-italic">{{ $post->body }}</p>
                        </blockquote>
                        <figcaption class="blockquote-footer">
                            <small class="text-muted">{{ __('Created at date') . ' '. $post->created_at->diffForHumans() }}</small>
                        </figcaption>
                    </figure>
                    <div class="d-grid gap-2">
                        <a class="btn btn-secondary" href="{{ route('posts.index') }}">{{ __('Return') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout.app>
