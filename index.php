<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- CSS Style -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>Ecological Engineering Project</title>
</head>

<style>
    .login{
        border-radius: 5px;
        -webkit-box-shadow: 3px 3px 5px 6px #ccc;  /* Safari 3-4, iOS 4.0.2 - 4.2, Android 2.3+ */
        -moz-box-shadow:    3px 3px 5px 6px #ccc;  /* Firefox 3.5 - 3.6 */
        box-shadow:         3px 3px 5px 6px #ccc;  /* Opera 10.5, IE 9, Firefox 4+, Chrome 6+, iOS 5 */

        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
    }
</style>

<body>
    <!-- Navbar Start -->
    <section class="navbar">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
            <div class="container">

                <!-- Brand -->
                <a class="navbar-brand" href="index.php" target="_blank">
                    <strong>Water Positive</strong>
                </a>

                <!-- Collapse -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Links -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About This Project</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="authors.html">Authors</a>
                        </li>
                    </ul>

                </div>

            </div>
        </nav>
        <!-- Navbar -->
    </section>
    <!-- Navbar End -->

    <!-- Login Section Start -->
    <section class="login-class m-2">
        <div class="container login" style="font-family: 'Josefin Sans', sans-serif; color: white; font-weight:bolder; font-size:larger">
        <br><br><br>
            <div class="row">
                <div class="col-lg-6 home-img justify-content-center d-flex align-items-center p-5">
                    <img src="images/login.png" alt="login" style="border-radius: 100%; height: 200px; width: 200px;">
                </div>
                <div class="col-lg-6 text-center justify-content-center d-flex align-items-center flex-column p-5">
                    <form action="" method="POST">
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username" placeholder="Enter Username" required><br>

                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" placeholder="Enter Password" required><br>

                        <button type="submit" name="submit" class="btn btn-success">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Login Section End -->
</body>

</html>

<?php
    include("db-connection.php");

    if(isset($_POST['submit'])){
    
        $uname=$_POST['username'];
        $password=$_POST['password'];
        
        $sql="select * from user_list where Username='".$uname."'AND Password='".$password."' limit 1";
        
        $result=mysqli_query($conn, $sql);
        
        if(mysqli_num_rows($result)==1){
            ?>
            <script>
                alert("Successfully Logged In");
                window.location.href = "waterpositive.php";
            </script>
            <?php
            exit();
        }
        else{
            ?>
            <script>
                alert("Incorrect Password Entered");
            </script>
            <?php
            exit();
        }
            
    }
?>