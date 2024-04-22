<?php include  './template/Layout/Nav.php'; ?>

<?php if (!empty($_SESSION['error'])) : ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $_SESSION['error'];?>
    </div>

<?php endif;
unset ($_SESSION['error']) ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <div>
        <form class="mt-4">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
            </div>
            <div class="btn btn-primary"> Ingresar </div>
        </form>
    </div>
</body>
</html>