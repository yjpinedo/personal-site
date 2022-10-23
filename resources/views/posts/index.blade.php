<x-layout.app title="Post">
    <h1>Post</h1>
    <a href="{{ route('posts.create') }}">Create</a>
    @foreach($posts as $post)
        <h2>
            <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
        </h2>
    @endforeach
</x-layout.app>


