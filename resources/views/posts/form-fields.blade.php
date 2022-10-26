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
