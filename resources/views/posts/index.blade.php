<x-layout.app title="Post">
    <h1>Post</h1>
    <a href="{{ route('posts.create') }}">Create</a>
    @foreach($posts as $post)
        <div style="display: flex; align-items: baseline">
            <h2>
                <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
            </h2> &nbsp;
            <a href="{{ route('posts.edit', $post) }}">Edit</a>
        </div>
    @endforeach
</x-layout.app>


