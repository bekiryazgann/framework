<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Burası </title>
    <link rel="stylesheet" href="{{assets('css/app.css')}}">
</head>
<body>

<center>
    <div style="margin-top: 30px">
        <table>
            <tr>
                <td><label for="username"> Kullanıcı Adı </label></td>
                <td><input type="text" id="username" name="username"></td>
            </tr>
            <tr>
                <td><label for="password"> Şifre </label></td>
                <td><input type="password" id="password" name="password"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <div style="display: flex; justify-content: end;">
                        <button type="submit">Giriş Yap</button>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</center>

</body>
</html>