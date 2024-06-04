<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign_up</title>
</head>
<body class="signup">
    <div class="container">
        <form class="form-group">
        <div class="mb-3 bg p-5 rounded">
            <h2 class="text-center">Sign Up</h2>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="First Name" aria-label="Username">
                <input type="text" class="form-control" placeholder="Last Name" aria-label="Server">
              </div>
              <div class="row align-items-start">
                <div class="col"><input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel1" value="" aria-label="Male"><small>Male</small></div>
                <div class="col"><input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel1" value="" aria-label="Female"><small>Female</small></div>
                <div class="col"><input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel1" value="" aria-label="Others"><small>Others</small></div>
              </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class='bx bxs-user'></i></span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
              </div>
              
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="nhatnehihi2110" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <span class="input-group-text" id="basic-addon2">@gmai.com</span>
              </div>
              
              <div class="mb-3">
                <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Password">
              </div>
              <div class="mb-3">
                <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Re-type Password">
              </div>   
              
              <input type="submit" class="form-control btn-color mt-3" id="exampleFormControlInput1">
              <div class="text-center"><small class="fw-bold"><div class="text-center"><small>Have an account ?<a href="login.php" class="text-decoration-none">Login</a></small></div></small></div>
              </div>
        </div>
        </form>
    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>