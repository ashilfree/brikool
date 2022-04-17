<div class="form-row">
    <div class="col-md-12 mb-5">
        <label >Title</label>
        <input type="text" class="form-control" name="title"  placeholder="Title" @if($errors->has('title')) invalid @else value="{{ old('title', $about->title ?? null) }}" @endif required>
        @error('title')
        <div class="invalid-tooltip">
            <strong>{{ $message }}</strong>
        </div>
        @enderror
    </div>
</div>
<div class="form-row">
    <div class="col-md-12 mb-5">
        <label >Colorful Title</label>
        <input type="text" class="form-control" name="colorful_title"  placeholder="Title" @if($errors->has('colorful_title')) invalid @else value="{{ old('colorful_title', $about->colorful_title ?? null) }}" @endif required>
        @error('colorful_title')
        <div class="invalid-tooltip">
            <strong>{{ $message }}</strong>
        </div>
        @enderror
    </div>
</div>
<div class="form-row">
    <div class="col-md-12">
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <span class="input-group-text">Description</span>
            </div>
            <textarea name="description" class="form-control" aria-label="With textarea" @error('description') invalid  @enderror required rows="5">@if(!$errors->has('description')) {{ old('description', $about->description ?? null) }} @endif</textarea>
            @error('description')
            <div class="invalid-tooltip">
                <strong>{{ $message }}</strong>
            </div>
            @enderror
        </div>
    </div>
</div>

<div class="form-row">
    <div class="col-md-12 mb-5">
        <label >Tags</label>
        <input class="form-control" type="text" data-role="tagsinput" name="tags"
               value="@foreach($about->tags as $tag){{ $tag->name }},@endforeach"
        >
    </div>
</div>
<div class="custom-file-container" data-upload-id="myFirstImage">
    <label>Upload (Single File) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
    <label class="custom-file-container__custom-file" >
        <input type="file" class="custom-file-container__custom-file__custom-file-input form-control" name="file" accept="image/*"  @if( $errors->has('file') ) invalid @endif>
        @error('file')
        <div class="invalid-tooltip">
            <strong>{{ $message }}</strong>
        </div>
        @enderror
        <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
        <span class="custom-file-container__custom-file__custom-file-control"></span>
    </label>
    <div class="custom-file-container__image-preview"></div>
</div>
