<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>確認画面</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
</head>

<body>

    <div class="container">
        <div class="header">
            FashionablyLate
        </div>
        <div class="subheader">
            Confirm
        </div>

        <table>
            <tr>
                <th>お名前</th>
                <td>
                    <input type="text" name="name" value="{{ $contact['name'] }}" readonly />
                    <input type="text" name="surname" value="{{ $contact['surname'] }}" readonly />
                </td>
            </tr>
            <tr>
                <th>性別</th>
                <td>
                    <input type="text" name="gender" value="{{ $contact['gender'] }}" readonly />
                </td>
            </tr>
            <tr>
                <th>メールアドレス</th>
                <td>
                    <input type="text" name="email" value="{{ $contact['email'] }}" readonly />
                </td>
            </tr>
            <tr>
                <th>電話番号</th>
                <td>
                    <input type="text" name="phone" value="{{ $contact['phone'] }}" readonly />
                </td>
            </tr>
            <tr>
                <th>住所</th>
                <td>
                    <input type="text" name="address" value="{{ $contact['address'] }}" readonly />
                </td>
            </tr>
            <tr>
                <th>建物名</th>
                <td>
                    <input type="text" name="building" value="{{ $contact['building'] }}" readonly />
                </td>
            </tr>
            <tr>
                <th>お問い合わせの種類</th>
                <td>
                    <input type="text" name="inquiry_type" value="{{ $contact['inquiry_type'] }}" readonly />
                </td>
            </tr>
            <tr>
                <th>お問い合わせ内容</th>
                <td>
                    <input type="text" name="inquiry_content" value="{{ $contact['inquiry_content'] }}" readonly />
                </td>
            </tr>
        </table>

        <div class="btn-group">
            <form action="{{ url('/submit') }}" method="post">
                @csrf
                <button type="submit" class="btn">送信</button>
            </form>
            <form action="{{ url('/edit') }}" method="get">
                <button type="submit" class="btn">修正</button>
            </form>
        </div>
    </div>

</body>

</html>