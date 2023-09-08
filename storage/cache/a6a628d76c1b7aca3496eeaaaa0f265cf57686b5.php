<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Burası </title>
</head>
<body>
<form method="POST">
    <ul>
        <li>
            <input type="text" name="name" placeholder="İsim" value="<?php echo e(old('name')); ?>">
        </li>
        <li>
            <input type="text" name="surname" placeholder="Soyisim" value="<?php echo e(old('surname')); ?>">
        </li>
        <li>
            <button type="submit"> Gönder</button>
        </li>
    </ul>
</form>
</body>
</html><?php /**PATH /Users/bekir/Desktop/projects/framework/public/view/home.blade.php ENDPATH**/ ?>