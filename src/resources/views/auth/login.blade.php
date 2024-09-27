<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>ログイン</title>
</head>

<body>
    <header>
        <h1>FashionablyLate</h1>
        <a href="register.html" class="register-button">register</a>
    </header>
    <main>
        <div class="login-container">
            <h2>ログイン</h2>
            <form action="/login" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">メールアドレス</label>
                    <input type="email" id="email" name="email" required placeholder="例: test@example.com">
                    <input type="email" name="email" value="{{ old('email') }}" />
                    <span class="error-message">メールアドレスを入力してください</span>
                    <span class="error-message">メールアドレスは「ユーザー名@ドメイン」形式で入力してください</span>
                </div>
                <div class="form-group">
                    <label for="password">パスワード</label>
                    <input type="password" id="password" name="password" required placeholder="例: coachtech106">
                    <input type="password" name="password" />
                    <span class="error-message">パスワードを入力してください</span>
                </div>
                <button type="submit" class="login-button">ログイン</button>
            </form>
        </div>
    </main>
</body>

</html>