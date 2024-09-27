<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー登録</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>

<body>
    <header class="header">
        <h1 class="header__title">FashionablyLate</h1>
        <a href="{{ route('login') }}" class="header__login-btn">login</a>
    </header>

    <main class="main">
        <div class="form-container">
            <h2 class="form__heading">Register</h2>
            <form method="POST" action="{{ route('register') }}" class="form">
                @csrf
                <div class="form__group">
                    <label for="name">お名前</label>
                    <div class="form__input--text">
                        <input type="text" id="name" name="name" placeholder="例: 山田太郎" value="{{ old('name') }}">
                    </div>
                    <!-- バリデーションエラー表示 -->
                    <div class="form__error">
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>

                <div class="form__group">
                    <label for="email">メールアドレス</label>
                    <input type="email" id="email" name="email" placeholder="例: test@example.com" value="{{ old('email') }}">
                    <div class="form__error">
                    @error('email')
                        {{ $message }}
                    @enderror
                </div>

                <div class="form__group">
                    <label for="password">パスワード</label>
                    <input type="password" id="password" name="password" placeholder="例: coachtechno6">
                    <div class="form__error">
                    @error('password')
                        {{ $message }}
                    @enderror
                </div>

                <button type="submit" class="form__submit-btn">登録</button>
            </form>
        </div>
    </main>
</body>

</html>