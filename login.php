<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign In - My App</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <link rel="stylesheet" href="css/headers.css">
    <link rel="stylesheet" href="css/signin.css">

    <style>
        .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          user-select: none;
        }
  
        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }
      </style>
    
</head>
<body>
    <div class="container">
        <header>
            <?php include('header.php'); ?>
        </header>
        <main class="form-signin">
            <form class="text-center">
                <img class="mb-4" src="assets/earth.png" alt="" width="100 px" height="100 px">
                <h1 class="h3 mb-3 fw-normal">Please Sign In</h1>

                <div class="form-floating">
                    <input
                    type="email"
                    class="form-control"
                    id="floatingInput"
                    name="email"
                    placeholder="Email address"
                    maxlength="60"
                    required
                    value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>"
                    >
                    <label for="floatingInput">Email address</label>
                </div>
                
                <div class="form-floating">
                    <input
                    type="password"
                    class="form-control"
                    id="password1"
                    name="password1"
                    placeholder="Password"
                    minlength="8"
                    maxlength="12"
                    required
                    value="<?php if (isset($_POST['password1'])) echo $_POST['password1']; ?>"
                    >
                    <label for="floatingInput">Password</label>
                </div>
            
                <button class="w-100 btn btn-lg btn-primary" id="submit" type="submit" name="submit">Sign In</button>
            </form>
        </main> 
    </div>
</body>
</html>