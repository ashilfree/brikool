<div class="form-row">
    <div class="col-md-12 mb-5">
        <label>User</label>
        <select class="form-control disabled-results" name="user_id">
            <option>Choose...</option>
            @foreach($users as $user)
             @if ($user->profile)
                    <option value="{{ $user->id }}" {{ (!isset($member)?:($user->id !== $member->user_id)?: 'selected') }} disabled="disabled">{{ $user->name }}</option>
             @else
                    <option value="{{ $user->id }}" {{ (!isset($member)?:($user->id !== $member->user_id)?: 'selected') }}>{{ $user->name }}</option>
             @endif
            @endforeach
        </select>
        @error('phone')
        <div class="invalid-tooltip">
            <strong>{{ $message }}</strong>
        </div>
        @enderror
    </div>
</div>

<div class="form-row">
    <div class="col-md-12 mb-5">
        <label for="validationTooltip01">Phone</label>
        <input type="text" class="form-control" name="phone" placeholder="Phone"
               @if($errors->has('phone')) invalid @else value="{{ old('phone', $member->phone ?? null) }}" @endif required>
        @error('phone')
        <div class="invalid-tooltip">
            <strong>{{ $message }}</strong>
        </div>
        @enderror
    </div>
</div>

<div class="form-row">
    <div class="col-md-12 mb-5">
        <label for="validationTooltip01">Profession</label>
        <input type="text" class="form-control" name="profession" placeholder="Profession"
               @if($errors->has('profession')) invalid @else value="{{ old('profession', $member->profession ?? null) }}" @endif required>
        @error('profession')
        <div class="invalid-tooltip">
            <strong>{{ $message }}</strong>
        </div>
        @enderror
    </div>
</div>

<div class="form-row">
    <div class="col-md-12 mb-5">
        <label>Language</label>
        <select class="form-control" name="locale">
            <option>Choose your language...</option>
            @foreach(\App\Models\Profile::LOCALES as $key => $value)
                <option value="{{ $key }}" {{ !($member ?? null) ?: $member->locale !== $key ?: 'selected' }}>{{ $value }}</option>
            @endforeach
        </select>
        @error('phone')
        <div class="invalid-tooltip">
            <strong>{{ $message }}</strong>
        </div>
        @enderror
    </div>
</div>

<div class="form-row">
    <div class="col-md-12 mb-5">
        <label for="validationTooltip01">Facebook Link</label>
        <input type="text" class="form-control" name="fb_link" placeholder="Facebook Link"
               @if($errors->has('fb_link')) invalid @else value="{{ old('fb_link', $member->fb_link ?? null) }}" @endif>
        @error('fb_link')
        <div class="invalid-tooltip">
            <strong>{{ $message }}</strong>
        </div>
        @enderror
    </div>
</div>

<div class="form-row">
    <div class="col-md-12 mb-5">
        <label for="validationTooltip01">Instagram Link</label>
        <input type="text" class="form-control" name="instagram_link" placeholder="Instagram Link"
               @if($errors->has('instagram_link')) invalid @else value="{{ old('instagram_link', $member->instagram_link ?? null) }}" @endif>
        @error('instagram_link')
        <div class="invalid-tooltip">
            <strong>{{ $message }}</strong>
        </div>
        @enderror
    </div>
</div>

<div class="form-row">
    <div class="col-md-12 mb-5">
        <label for="validationTooltip01">Twitter Link</label>
        <input type="text" class="form-control" name="twitter_link" placeholder="Twitter Link"
               @if($errors->has('twitter_link')) invalid @else value="{{ old('twitter_link', $member->twitter_link ?? null) }}" @endif>
        @error('twitter_link')
        <div class="invalid-tooltip">
            <strong>{{ $message }}</strong>
        </div>
        @enderror
    </div>
</div>

<div class="form-row">
    <div class="col-md-12 mb-5">
        <label for="validationTooltip01">Pinterest Link</label>
        <input type="text" class="form-control" name="pinterest_link" placeholder="Pinterest Link"
               @if($errors->has('pinterest_link')) invalid @else value="{{ old('pinterest_link', $member->pinterest_link ?? null) }}" @endif>
        @error('pinterest_link')
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
