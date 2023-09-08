<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form id="demo-form" action="./form.php" method="post">
        <ul>
            <li>
                <label for="name">名前</label>
                <input type="text" name="name" id="name">
            </li>
            <li>
                <label for="telephonenumber">電話番号</label>
                <input type="text" name="telephonenumber" id="telephonenumber">
            </li>
            <li>
                <label for="inquiry">問い合わせ</label>
                <input type="text" name="inquiry" id="inquiry">
            </li>
            <li>
                <input type="submit" value="送信" id="button" class="g-recaptcha" data-sitekey="reCAPTCHA_site_key" data-callback='onSubmit' data-action='submit'>
            </li>
        </ul>

    </form>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="./index.js"></script>

</body>

</html>