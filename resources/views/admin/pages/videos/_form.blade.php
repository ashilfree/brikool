<div class="form-row">
    <div class="col-md-12 mb-5">
        <label >Title</label>
        <input type="text" class="form-control" name="title"  placeholder="Title" @if($errors->has('title')) invalid @else value="{{ old('title', $video->title ?? null) }}" @endif required>
        @error('title')
        <div class="invalid-tooltip">
            <strong>{{ $message }}</strong>
        </div>
        @enderror
    </div>
</div>
<div class="form-row">
    <div class="col-md-12 mb-5">
        <label >Video Link</label>
        <input type="text" class="form-control" name="video_link"  placeholder="Video Link" @if($errors->has('video_link')) invalid @else value="{{ old('video_link', $video->video_link ?? null) }}" @endif required>
        @error('video_link')
        <div class="invalid-tooltip">
            <strong>{{ $message }}</strong>
        </div>
        @enderror
    </div>
</div>
<div class="form-row">
    <div class="col-md-12 mb-5">
        <label >Learn More Link</label>
        <input type="text" class="form-control" name="learn_more_link"  placeholder="Learn more Link" @if($errors->has('learn_more_link')) invalid @else value="{{ old('learn_more_link', $video->learn_more_link ?? null) }}" @endif required>
        @error('learn_more_link')
        <div class="invalid-tooltip">
            <strong>{{ $message }}</strong>
        </div>
        @enderror
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
