<x-layout.app title="Blog - Create">
    <h1>Create Post</h1>
    <form action="{{ route('posts.store') }}" method="post">
        @csrf
       @include('posts.form-fields')
        <button type="submit">Send</button>
    </form>
    <br>
    <a href="{{ route('posts.index') }}">Return</a>
</x-layout.app>
