<div class="form-row">
    <div class="col-md-12 mb-5">
        <label for="validationTooltip01">Title</label>
        <input type="text" class="form-control" name="title" id="validationTooltip01" placeholder="Title" @if($errors->has('title')) invalid @else value="{{ old('title', $slider->title ?? null) }}" @endif required>
        @error('title')
        <div class="invalid-tooltip">
            <strong>{{ $message }}</strong>
        </div>
        @enderror
    </div>
</div>
<div class="form-row">
    <div class="col-md-12 mb-5">
        <label for="validationTooltip03">Sub Title</label>
        <input type="text" class="form-control" name="sub_title" id="validationTooltip03" placeholder="Sub Title" @if($errors->has('sub_title')) invalid @else value="{{ old('sub_title', $slider->sub_title ?? null) }}" @endif required>
        @error('sub_title')
        <div class="invalid-tooltip">
            <strong>{{ $message }}</strong>
        </div>
        @enderror
    </div>
</div>
<div class="form-row">
    <div class="col-md-12 mb-5">
        <label for="validationTooltip01">Discover Link</label>
        <input type="text" class="form-control" name="discover_link" id="validationTooltip01" placeholder="Discover Link" @if($errors->has('discover_link')) invalid @else value="{{ old('discover_link', $slider->discover_link ?? null) }}" @endif required>
        @error('discover_link')
        <div class="invalid-tooltip">
            <strong>{{ $message }}</strong>
        </div>
        @enderror
    </div>
</div>
<div class="custom-file-container" data-upload-id="myFirstImage">
    <label>Upload (Single File) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
    <label class="custom-file-container__custom-file" >
        <input type="file" class="custom-file-container__custom-file__custom-file-input form-control" name="file" accept="image/*"  @if( $errors->has('file') ) invalid @endif required>
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
