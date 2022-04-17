<div class="form-row">
    <div class="col-md-12 mb-5">
        <label for="validationTooltip01">Title</label>
        <input type="text" class="form-control" name="title" id="validationTooltip01" placeholder="Title" @if($errors->has('title')) invalid @else value="{{ old('title', $project->title ?? null) }}" @endif required>
        @error('title')
        <div class="invalid-tooltip">
            <strong>{{ $message }}</strong>
        </div>
        @enderror
    </div>
</div>
<div class="form-row">
    <div class="col-md-12 mb-5">
        <label>Category</label>
        <select class="form-control" name="category">
            <option>Choose...</option>
            <option value="web">
                Web Application
            </option>
            <option value="mobile">Mobile Application</option>
        </select>
        @error('category')
        <div class="invalid-tooltip">
            <strong>{{ $message }}</strong>
        </div>
        @enderror
    </div>
</div>
<div class="form-row">
    <div class="col-md-12 mb-5">
        <label for="validationTooltip03">Link</label>
        <input type="text" class="form-control" name="link" id="validationTooltip03" placeholder="Link" @if($errors->has('link')) invalid @else value="{{ old('link', $project->link ?? null) }}" @endif required>
        @error('link')
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
