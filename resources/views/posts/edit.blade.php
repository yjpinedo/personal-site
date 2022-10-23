<x-layout.app title="Blog - Edit">
    <h1>Edit Post</h1>
    <form action="{{ route('posts.update', $post) }}" method="post">
        @csrf @method('PUT')
        <label>
            {{ __('Title') }} <br>
            <input name="title" type="text" value="{{ old('title', $post->title) }}">
            @error('title')
            <br>
            <small style="color: red">{{ $message }}</small>
            @enderror
        </label>
        <br>
        <label>
            Body <br>
            <textarea name="body" cols="30" rows="5">{{ old('body', $post->body) }}</textarea>
            @error('body')
            <br>
            <small style="color: red">{{ $message }}</small>
            @enderror
        </label>
        <br>
        <button type="submit">Send</button>
    </form>
    <br>
    <a href="{{ route('posts.index') }}">Return</a>
</x-layout.app>
