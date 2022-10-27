<div class="mb-3">
    <label for="title">{{ __('Title') }}</label>
    <input id="title" class="form-control" name="title" type="text" value="{{ old('title', $post->title) }}">
    @error('title')
    <small class="text-danger fw-semibold font-monospace">{{ $message }}</small>
    @enderror
</div>
<div class="mb-3">
    <label for="body">{{ __('Body') }}</label>
    <textarea id="body" class="form-control" name="body" cols="30" rows="5">{{ old('body', $post->body) }}</textarea>
    @error('body')
    <small class="fw-semibold font-monospace text-danger">{{ $message }}</small>
    @enderror
</div>
