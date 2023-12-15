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
@if($message = json_decode(session()->get('system-message')))
    <div style="max-width: 350px;border: 1px solid #ddd; position: absolute; top: 20px; right: 20px; padding: 15px; border-radius: 8px; transition: 500ms all;" id="system-message">
        <h3 style="font-size: 20px; font-family: Arial, sans-serif; margin-bottom: 4px;">{!! $message->title !!}</h3>
        <p style="font-size: 15px; font-family: Arial, sans-serif;">{!! $message->message !!}</p>
    </div>
@endif

<center>
    <form action="" method="POST">
        @csrf
        <table>
            <tbody>
            <tr>
                <td><label for="email">E-posta</label></td>
                <td>
                    <input type="text" id="email" name="email" placeholder="E-posta" value="{{ $formdata['email'] ?? '' }}"><br>
                    @geterror('email')
                </td>
            </tr>
            <tr>
                <td><label for="name">Ad</label></td>
                <td>
                    <input type="text" id="name" name="name" placeholder="Ad" value="{{ $formdata['name'] ?? '' }}"><br>
                    @geterror('name')
                </td>
            </tr>
            <tr>
                <td><label for="surname">Soyad</label></td>
                <td>
                    <input type="text" name="surname" id="surname" placeholder="Soyad" value="{{ $formdata['surname'] ?? '' }}"><br>
                    @geterror('surname')
                </td>
            </tr>
            </tbody>
        </table>
        <button type="submit"> Gönder </button>
    </form>
</center>
<script src="{{assets('js/app.js')}}" type="module"></script>
</body>
</html>