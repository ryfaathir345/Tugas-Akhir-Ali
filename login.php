<?php

include 'DB.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 
    
    $myusername = mysqli_real_escape_string($conn,$_POST['namauser']);
    $mypassword = mysqli_real_escape_string($conn,$_POST['kunci']); 
    
    $sql = "SELECT * FROM users WHERE username = '$myusername' and password = '$mypassword'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    // $active = $row['active'];
    
    $count = mysqli_num_rows($result);
    
    // If result matched $myusername and $mypassword, table row must be 1 row
      
    if($count == 1) {
    //    session_register("myusername");
       $_SESSION['login_user'] = $myusername;
       echo "<script type='text/javascript'> alert('Login berhasil'); </script> ";
       header("location: http://localhost/MineCom/index.php");
       exit;

    }elseif(empty($myusername)  || empty($mypassword)) {
        $error = "please fill all input";
        echo "<script type='text/javascript'> alert('please fill all input'); </script> ";
    }else{
        $error = "Your Login Password is invalid";
       echo "<script type='text/javascript'> alert('password salah'); </script> ";
    }
 }
 

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.16/tailwind.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="h-screen md:flex">
        <div
            class="relative overflow-hidden md:flex w-1/2 bg-gradient-to-tr from-gray-800 to-gray-600 i justify-around items-center hidden">
            <div>
                <h1 class="text-white font-bold text-4xl font-sans">MineCOM</h1>
                <p class="text-white mt-1">The most popular clothes strore ever.. Aamiin...</p>
                <button type="submit"
                    class="block w-28 bg-white text-indigo-800 mt-4 py-2 rounded-2xl font-bold mb-2">Read More</button>
            </div>
            <div class="absolute -bottom-32 -left-40 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8">
            </div>
            <div class="absolute -bottom-40 -left-20 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8">
            </div>
            <div class="absolute -top-40 -right-0 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
            <div class="absolute -top-20 -right-20 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
        </div>
        <div class="flex md:w-1/2 justify-center py-10 items-center bg-white">
            <form action="" method="POST" class="bg-white">
                <h1 class="text-gray-800 font-bold text-2xl mb-1">Hello Again!</h1>
                <p class="text-sm font-normal text-gray-600 mb-7">Welcome Back</p>
                <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                    </svg>
                    <input class="pl-2 outline-none border-none" type="text" name="namauser" id="username"
                        placeholder="Username" />
                </div>
                <div class="flex items-center border-2 py-2 px-3 rounded-2xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                            clip-rule="evenodd" />
                    </svg>
                    <input class="pl-2 outline-none border-none" type="password" name="kunci" id="password"                        placeholder="Password" />
                </div>
                <button type="submit" id="submit" name="kirim"
                    class="block w-full bg-indigo-900 mt-4 py-2 rounded-2xl text-white font-semibold mb-2">Login</button>
                <span class="text-sm ml-20 hover:text-blue-500 cursor-pointer">
                    Forgot Password ?
                </span> <br>
                <span class="text-sm ml-5 hover:text-blue-500 cursor-pointer">
                    Don't have account?
                    <a href="registrate.php">register now</a>
                </span>
            </form>
        </div>
    </div>
</body>

</html>