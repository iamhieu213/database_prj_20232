<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body class="login-page">
    <div class="container">
        <form class="form-group">
            <div class="mb-3 bg p-5 rounded">
                <h2 class="text-center mt-5">Login</h2>
                <label for="exampleFormControlInput1" class="form-label mt-5 fw-semibold">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="abc@gmail.com">
                <label for="exampleFormControlInput1" class="form-label mt-3 fw-semibold">Password</label>
                <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Password">
                <div class="input-group   mb-3 d-flex justify-content-between">
                    <div><small class="text-decoration-none"><a href="signup.php">Sign up</a></small></div>
                    <div><small><a class="text-decoration-none" href="Forgotpassword.php">Forgot Password?</a></small></div>
                </div>
                <input type="submit" class="form-control btn-color mt-3" id="exampleFormControlInput1">
              </div>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>