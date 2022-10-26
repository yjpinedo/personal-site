<x-layout.app title="Blog - Edit">
    <h1>Edit Post</h1>
    <form action="{{ route('posts.update', $post) }}" method="post">
        @csrf @method('PATCH')
        @include('posts.form-fields')
        <button type="submit">Send</button>
    </form>
    <br>
    <a href="{{ route('posts.index') }}">Return</a>
</x-layout.app>
