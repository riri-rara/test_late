@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endsection

<main>
    <div class="fashionably-late__content">
        <div class="fashionably-late__heading">
            <h1>Contact</h1>
        </div>
        <form action="{{ route('contacts.confirm') }}" method="post">
            @csrf
            <!-- 名前入力 -->
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">お名前</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group--content">
                    <div class="form__input--text">
                        <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="例: 山田">
                        <input type="text" id="surname" name="surname" value="{{ old('surname') }}" placeholder="例: 太郎">
                    </div>
                    <div class="form__error">
                        @error('name')
                            <span class="error">{{ $message }}</span>
                        @enderror
                        @error('surname')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- 性別入力 -->
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">性別</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group--content">
                    <input type="radio" id="male" name="gender" value="male" {{ old('gender') == 'male' ? 'checked' : '' }}>
                    <label for="male">男性</label>

                    <input type="radio" id="female" name="gender" value="female" {{ old('gender') == 'female' ? 'checked' : '' }}>
                    <label for="female">女性</label>

                    <input type="radio" id="other" name="gender" value="other" {{ old('gender') == 'other' ? 'checked' : '' }}>
                    <label for="other">その他</label>

                    <div class="form__error">
                        @error('gender')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- メールアドレス入力 -->
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">メールアドレス</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group--content">
                    <div class="form__input--text">
                        <input type="email" name="email" value="{{ old('email') }}" placeholder="test@example.com">
                    </div>
                    <div class="form__error">
                        @error('email')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- 電話番号入力 -->
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">電話番号</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group--content">
                    <div class="form__input--text">
                        <input type="text" id="phone-part1" name="phone_part1" value="{{ old('phone_part1') }}"
                            placeholder="080"> -
                        @error('phone_part1')
                            <span class="error">{{ $message }}</span>
                        @enderror

                        <input type="text" id="phone-part2" name="phone_part2" value="{{ old('phone_part2') }}"
                            placeholder="1234"> -
                        @error('phone_part2')
                            <span class="error">{{ $message }}</span>
                        @enderror

                        <input type="text" id="phone-part3" name="phone_part3" value="{{ old('phone_part3') }}"
                            placeholder="5678">
                        @error('phone_part3')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- 住所入力 -->
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">住所</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group--content">
                    <div class="form__input--text"></div>
                    <input type="text" id="address" name="address" value="{{ old('address') }}"
                        placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3">
                    @error('address')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <!-- 建物入力 -->
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">建物</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group--content">
                    <div class="form__input--text"></div>
                    <input type="text" id="building" name="building" value="{{ old('building') }}"
                        placeholder="例: 千駄ヶ谷マンション101">
                    @error('building')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <!-- お問い合わせの種類 -->
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">お問い合わせの種類</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group--content">
                    <div class="form__input--text"></div>
                    <select id="inquiry-type" name="inquiry_type">
                        <option value="">選択してください</option>
                        <option value="product" {{ old('inquiry_type') == 'product' ? 'selected' : '' }}>製品について</option>
                        <option value="support" {{ old('inquiry_type') == 'support' ? 'selected' : '' }}>サポートについて</option>
                    </select>
                    @error('inquiry_type')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <!-- お問い合わせ内容 -->
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">お問い合わせ内容</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group--content">
                    <div class="form__input--text"></div>
                    <textarea id="inquiry-content" name="inquiry_content"
                        placeholder="お問い合わせ内容をご記載ください">{{ old('inquiry_content') }}</textarea>
                    @error('inquiry_content')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <!-- 確認画面ボタン -->
            <button type="submit">確認画面</button>
        </form>
    </div>
</main>