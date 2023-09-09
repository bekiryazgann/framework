<!doctype html>
<html lang="en" style="zoom:2;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Burası </title>
    <link rel="stylesheet" href="<?php echo e(assets('css/app.css')); ?>">
</head>
<body>
<?php if($message = json_decode(session()->get('system-message'))): ?>
    <div style="max-width: 350px;border: 1px solid #ddd; position: absolute; top: 20px; right: 20px; padding: 15px; border-radius: 8px; transition: 500ms all;" id="system-message">
        <h3 style="font-size: 20px; font-family: Arial, sans-serif; margin-bottom: 4px;"><?php echo $message->title; ?></h3>
        <p style="font-size: 15px; font-family: Arial, sans-serif;"><?php echo $message->message; ?></p>
    </div>
<?php endif; ?>
<center>
    <h3 style="margin-bottom: 20px;"> Todo </h3>
    <ul style="max-width: 550px; margin: 0 auto; display: flex; flex-direction: column; gap: 10px">
        <?php $__currentLoopData = $todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li style="text-align: left;">
                <label>
                    <input type="checkbox" <?php echo e($todo->completed == '1' ? 'checked' : ''); ?>>
                    <?php echo e($todo->title); ?>

                </label>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</center>
<script src="<?php echo e(assets('js/app.js')); ?>"></script>

</body>
</html><?php /**PATH /Users/bekir/Desktop/projects/framework/public/view/home.blade.php ENDPATH**/ ?>