<?php
 require 'config.php';
 session_start();   
?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
<style>
    .a1 
    {
        border-radius: 100px;
        border-style:inset;
        background: white;
        padding: 20px;
        width: 450px;
        height:450px;
        text-align: center;
        margin-top:180px;
        margin-left:550px;
    }
    body
    {
        background-image: url("image1.webp");
    }
    .a3
    {
        border: 2px solid rgb(21, 152, 67);
        border-radius: 15px;
        padding: 10px;
    }
</style>
<body>
    <div class="a1">
        <h3 style="text-align: center;">Registration</h3>
        <form action="studentegister.php" method="POST">
        <input type="text"  id="name" placeholder="Enter firstname" name="firstname" class="a3"><br></br>
        <input type="text"  id="name" placeholder="Enter lastname" name="lastname" class="a3"><br></br>
        <input type="email"  id="email" placeholder="Enter email" name="email" class="a3"><br></br>
        <input type="password"  id="pwd" placeholder="Enter password" name="password" class="a3"><br></br>
        <input type="submit" class="btn btn-primary" name="register">
        <h4>Have an account?</h4><button type="button" class="btn btn-primary">login</button>
        
    </form>
    </div>
                <?php
                    if(isset($_POST['register']))
                    {
                        //$username=$_POST['username'];
                        $firstname=$_POST['firstname'];
                        $lastname=$_POST['lastname'];
                        $email=$_POST['email'];
                        $password=$_POST['password'];
                        $unqid=$_POST['email'];
                        echo $unqid;
                        echo $firstname;
                        echo $lastname;
                        // $_SESSION['unqid']=$unqid;
                        $q1="SELECT unqid FROM creds where unqid='$unqid'";
                        // $q2="SELECT email FROM creds where email='$email'";
                        // $q3="SELECT phone FROM creds where phone='$phone'";
                        $r1=mysqli_query($con,$q1);
                        // $r2=mysqli_query($con,$q2);
                        // $r3=mysqli_query($con,$q3);
                        if(mysqli_num_rows($r1))
                        {
                            echo "<script>
                            alert('Email already exist please choose different one');
                            </script>";
                        }
                        // else if(mysqli_num_rows($r2))
                        // {
                        //     echo "<script>
                        //     alert('email already exist please choose different one');
                        //     </script>";
                        // }
                        // else if(mysqli_num_rows($r3))
                        // {
                        //     echo "<script>
                        //     alert('phone number already exist please choose different one');
                        //     </script>";
                        // }
                        // else if($password!=$cpassword)
                        // {
                        //     echo "<script>
                        //     alert('password is not same');
                        //     </script>";
                        // }
                        // else if(strlen($phone)!=10)
                        // {
                        //     echo "<script>
                        //     alert('phone number length must be 10digts');
                        //     </script>";
                        // }
                        else
                        {
                            $q="INSERT INTO creds1
                            VALUES ('$firstname','$lastname','$email','$password')";
                            $_SESSION['unqid']=$unqid;
                            $r=mysqli_query($con,$q);
                            // $r1=mysqli_query($con,$q2);
                            if($r)
                            {
                               echo "
                               <script>
                               window.location.href = 'placement report.html'; 
                               </script>";
                            }
                            else
                            {
                                echo "<script>
                            alert('something went wrong');
                            </script>";
                            }
                        }
                        


                    }
                ?>
                
              
          </body>
           