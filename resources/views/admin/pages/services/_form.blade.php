<div class="form-row">
    <div class="col-md-12 mb-5">
        <label for="validationTooltip01">Title</label>
        <input type="text" class="form-control" name="title" id="validationTooltip01" placeholder="Title" @if($errors->has('title')) invalid @else value="{{ old('title', $service->title ?? null) }}" @endif required>
        @error('title')
        <div class="invalid-tooltip">
            <strong>{{ $message }}</strong>
        </div>
        @enderror
    </div>
</div>
<div class="form-row">
    <div class="col-md-12">
        {{--                                        <label for="">Description</label>--}}
        {{--                                        <div class="widget-content widget-content-area">--}}
        {{--                                            <textarea id="textarea1" hidden name="description">{{ old('description') }}</textarea>--}}
        {{--                                            <div id="editor-container">--}}

        {{--                                            </div>--}}
        {{--                                        </div>--}}
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <span class="input-group-text">Description</span>
            </div>
            <textarea name="description" class="form-control" aria-label="With textarea" @error('description') invalid  @enderror required>@if(!$errors->has('description')) {{ old('description', $service->description ?? null) }} @endif</textarea>
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
        <label for="validationTooltip03">Sub Title</label>
        <input type="text" class="form-control" name="sub_title" id="validationTooltip03" placeholder="Sub Title" @if($errors->has('sub_title')) invalid @else value="{{ old('sub_title', $service->sub_title ?? null) }}" @endif required>
        @error('sub_title')
        <div class="invalid-tooltip">
            <strong>{{ $message }}</strong>
        </div>
        @enderror
    </div>
</div>
<div class="form-row">
    <div class="col-md-12">
        {{--                                        <label for="">Sub Description</label>--}}
        {{--                                        <div class="widget-content widget-content-area">--}}
        {{--                                            <textarea id="textarea2" hidden name="sub_description"></textarea>--}}
        {{--                                            <div id="editor-container2">--}}
        {{--                                            </div>--}}

        {{--                                        </div>--}}
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <span class="input-group-text">Sub Description</span>
            </div>
            <textarea name="sub_description" class="form-control" aria-label="With textarea" @error('sub_description') invalid  @enderror required>@if(!$errors->has('sub_description')) {{ old('sub_description', $service->sub_description ?? null) }} @endif</textarea>
            @error('sub_description')
            <div class="invalid-tooltip">
                <strong>{{ $message }}</strong>
            </div>
            @enderror
        </div>
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
