<x-layout.app title="Blog">
    <h1>Blog</h1>
    @foreach($posts as $post)
        <h2>{{ $post->title }}</h2>
    @endforeach
</x-layout.app>


