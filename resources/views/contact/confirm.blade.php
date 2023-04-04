
@section('content')
    <h1>入力内容確認</h1>
    <form method="POST" action="{{ route('contact.thanks') }}">
        @csrf
        <input type="hidden" name="fullname" value="{{ $contact['fullname'] }}">
        <input type="hidden" name="gender" value="{{ $contact['gender'] }}">
        <input type="hidden" name="email" value="{{ $contact['email'] }}">
        <input type="hidden" name="postcode" value="{{ $contact['postcode'] }}">
        <input type="hidden" name="address" value="{{ $contact['address'] }}">
        <input type="hidden" name="building_name" value="{{ $contact['building_name'] }}">
        <input type="hidden" name="opinion" value="{{ $contact['opinion'] }}">
        <div>
            <label for="fullname">お名前</label>
            {{ old('fullname', $contact['fullname']) }}
        </div>
        <div>
            <label for="gender">性別</label>
            {{ old('gender', $contact['gender']) == 1 ? '男性' : '女性' }}
        </div>
        <div>
            <label for="email">メールアドレス</label>
            {{ old('email', $contact['email']) }}
        </div>
        <div>
            <label for="postcode">郵便番号</label>
            {{ old('postcode', $contact['postcode']) }}
        </div>
        <div>
            <label for="address">住所</label>
            {{ old('address', $contact['address']) }}
        </div>
        <div>
            <label for="building_name">建物名</label>
            {{ old('building_name', $contact['building_name']) }}
        </div>
        <div>
            <label for="opinion">ご意見</label>
            <p>{{ old('opinion', $contact['opinion']) }}</p>
        </div>
        <button type="submit" name="action" value="send">送信する</button>
        <form method="post" action="{{ route('contact.fix') }}">
    @csrf
    <input type="hidden" name="name" value="{{ $contact->name }}">
    <input type="hidden" name="email" value="{{ $contact->email }}">
    <input type="hidden" name="body" value="{{ $contact->body }}">
    <button type="submit">修正する</button>
</form>
    </form>
