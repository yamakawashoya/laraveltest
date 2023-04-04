<!--<form method="POST" action="{{ route('contact.confirm') }}">
    @csrf
    <div>
        <label for="fullname">お名前<span class="required">*</span></label>
        <input type="text" name="fullname" id="fullname" value="{{ old('fullname',) }}" required>
        @error('fullname')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label>性別</label>
        <label><input type="radio" name="gender" value="1" {{ old('gender', '1') == '1' ? 'checked' : '' }}>男性</label>
        <label><input type="radio" name="gender" value="2" {{ old('gender') == '2' ? 'checked' : '' }}>女性</label>
    </div>
    <div>
        <label for="email">メールアドレス<span class="required">*</span></label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" required>
        @error('email')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="postcode">郵便番号<span class="required">*</span></label>
        <input type="text" name="postcode" id="postcode" value="{{ old('postcode') }}" pattern="[0-9]{3}-[0-9]{4}" maxlength="8" required>
        @error('postcode')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="address">住所<span class="required">*</span></label>
        <input type="text" name="address" id="address" value="{{ old('address') }}" required>
        @error('address')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="building_name">建物名</label>
        <input type="text" name="building_name" id="building_name" value="{{ old('building_name') }}">
    </div>
    <div>
        <label for="opinion">ご意見<span class="required">*</span></label>
        <textarea name="opinion" id="opinion" rows="5" maxlength="120" required>{{ old('opinion') }}</textarea>
        @error('opinion')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit">確認</button>
</form>-->

<form method="POST" action="{{ route('contact.confirm') }}">
    @csrf
    <input type="hidden" name="fullname" value="{{ old('fullname') }}">
    <input type="hidden" name="gender" value="{{ old('gender') }}">
    <input type="hidden" name="email" value="{{ old('email') }}">
    <input type="hidden" name="postcode" value="{{ old('postcode') }}">
    <input type="hidden" name="address" value="{{ old('address') }}">
    <input type="hidden" name="building_name" value="{{ old('building_name') }}">
    <input type="hidden" name="opinion" value="{{ old('opinion') }}">
    <div>
        <label for="fullname">お名前<span class="required">*</span></label>
        <input type="text" name="fullname" id="fullname" value="{{ old('fullname') }}" required>
        @error('fullname')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label>性別</label>
        <label><input type="radio" name="gender" value="1" {{ old('gender', '1') == '1' ? 'checked' : '' }}>男性</label>
        <label><input type="radio" name="gender" value="2" {{ old('gender') == '2' ? 'checked' : '' }}>女性</label>
    </div>
    <div>
        <label for="email">メールアドレス<span class="required">*</span></label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" required>
        @error('email')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="postcode">郵便番号<span class="required">*</span></label>
        <input type="text" name="postcode" id="postcode" value="{{ old('postcode') }}" pattern="[0-9]{3}-[0-9]{4}" maxlength="8" required>
        @error('postcode')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="address">住所<span class="required">*</span></label>
        <input type="text" name="address" id="address" value="{{ old('address') }}" required>
        @error('address')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="building_name">建物名</label>
        <input type="text" name="building_name" id="building_name" value="{{ old('building_name') }}">
    </div>
    <div>
        <label for="opinion">ご意見<span class="required">*</span></label>
        <textarea name="opinion" id="opinion" rows="5" maxlength="120" required>{{ old('opinion') }}</textarea>
        @error('opinion')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit">確認</button>
</form>