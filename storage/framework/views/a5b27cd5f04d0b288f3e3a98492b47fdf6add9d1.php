
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Create user</h2>
    <form action="/UserView/Update/<?php echo e($user->id); ?>" method="post">
        <?php echo csrf_field(); ?>
        <label>
            Name:
            <input type="text" name="Hoten" value="<?php echo e($user->HoTen); ?>">
        </label><br><br>
        <label>
            Mssv:
            <input type="text" name="Mssv" value="<?php echo e($user->Mssv); ?>">
        </label><br><br>
        <label>
            Lop:
            <input type="text" name="Lop" >
        </label><br><br>
        <button type="submit">Edit user</button>
    </form>
    
</body>
</html><?php /**PATH C:\xampp\htdocs\chan-network\resources\views/Cont.blade.php ENDPATH**/ ?>