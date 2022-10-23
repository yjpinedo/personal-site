<x-layout.app title="Blog - Create">
    <h1>Create Post</h1>
    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <label>
            {{ __('Title') }} <br>
            <input name="title" type="text" value="{{ old('title') }}">
            @error('title')
            <br>
            <small style="color: red">{{ $message }}</small>
            @enderror
        </label>
        <br>
        <label>
            Body <br>
            <textarea name="body" cols="30" rows="5">{{ old('body') }}</textarea>
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
