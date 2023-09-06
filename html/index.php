<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./form.php" method="post">
        <ul>
            <li>
                <label for="name">名前</label>
                <input type="text" name="name" id="name">
            </li>
            <li>
                <label for="company">会社名</label>
                <input type="text" name="company" id="company">
            </li>
            <li>
                <label for="inquiry">問い合わせ</label>
                <input type="text" name="inquiry" id="inquiry">
            </li>
            <li>
                <input type="submit" value="送信" id="submit">
            </li>
        </ul>

    </form>
</body>

</html>