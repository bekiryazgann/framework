<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Burası </title>
    {{--<link rel="stylesheet" href="{{assets('css/app.css')}}">--}}
</head>
<body>
@if($message = json_decode(session()->get('system-message')))
    <div style="max-width: 350px;border: 1px solid #ddd; position: absolute; top: 20px; right: 20px; padding: 15px; border-radius: 8px; transition: 500ms all;" id="system-message">
        <h3 style="font-size: 20px; font-family: Arial, sans-serif; margin-bottom: 4px;">{!! $message->title !!}</h3>
        <p style="font-size: 15px; font-family: Arial, sans-serif;">{!! $message->message !!}</p>
    </div>
@endif
<center>
    <form method="POST">
        @csrf
        <input type="text" name="title" placeholder="Todo" style="margin-right: 4px">
        <button>Ekle</button>
    </form>
    <h3 style="margin-bottom: 20px;"> Todo </h3>
    <ul style="max-width: 550px; margin: 0 auto; display: flex; flex-direction: column; gap: 10px">
        @foreach($todos as $todo)
            <li style="text-align: left;">
                <label>
                    <input type="checkbox" {{ $todo->completed == '1' ? 'checked' : '' }}>
                    {{$todo->title}}
                </label>
            </li>
        @endforeach
    </ul>
</center>
{{--<script src="{{assets('js/app.js')}}"></script>--}}

</body>
</html>