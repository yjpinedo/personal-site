<x-layout.app title="Post">
    <h1>Post</h1>
    <a href="{{ route('posts.create') }}">Create</a>
    @foreach($posts as $post)
        <div style="display: flex; align-items: baseline">
            <h2>
                <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
            </h2> &nbsp;
            <a href="{{ route('posts.edit', $post) }}">{{ __('Edit') }}</a> &nbsp;
            <form action="{{ route('posts.destroy', $post) }}" method="post">
                @csrf @method('DELETE')
                <button type="submit">{{ __('Delete') }}</button>
            </form>
        </div>
    @endforeach
</x-layout.app>


