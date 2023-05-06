<?php
include 'DB.php';

if (isset($_POST['submit'])) {
    $name = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confpassword = $_POST['confirm-password'];

    $cek_user = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
    $cek_login = mysqli_num_rows($cek_user);

    if ($cek_login > 0) {
        echo "<script>
            alert('username was used!!');
            window.location = 'registrate.php';
        </script>";
    } else {
        if (empty($username) || empty($email) || empty($password)) {
            echo "<script>alert('Lengkapi dulu registrasinya')</script>";
        } elseif ($password != $confpassword) {
            echo "<script>
            alert('Invalid Confirmation Password!!');
            window.location = 'registrate.php';
        </script>";
        } else {
            // $password = password_hash($password,PASSWORD_DEFAULT); 
            mysqli_query($conn, "INSERT INTO users VALUES('','$name','$username','$email','$password')");
            echo "<script>
            alert('Registrate Sucsess!!');
            window.location = 'login.php';
        </script>";
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.16/tailwind.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/regis.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.4.2/zxcvbn.js"></script>
    <style>
        @import url(https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css);
    </style>
</head>

<body>
    <script src="https://cdn.tailwindcss.com"></script>

    <body class="bg-gray-100">
        <div class="container mx-auto py-8">
            <h1 class="text-2xl font-bold mb-6 text-center">Registration Form</h1>
            <form class="w-full max-w-sm mx-auto bg-white p-8 rounded-md shadow-md" action="" method="POST">
                <div class="mb-4">
                    <label clas10="block text-gray-700 text-sm font-bold mb-2" for="name">Name</label>
                    <input
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                        type="text" id="nama" name="nama" placeholder="input username...">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Username</label>
                    <input
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                        type="text" id="username" name="username" placeholder="input username...">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                    <input
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                        type="email" id="email" name="email" placeholder="input an email...">
                </div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>

                <div class="min-w-screen min-h-screen bg-gray-50 flex items-center justify-center px-5 py-5">
                    <div class="w-full mx-auto rounded-lg bg-white shadow p-5 text-gray-800" style="max-width: 500px"
                        x-data="app()" x-init="generatePassword()">
                        <div class="relative mb-2">
                            <input :type="showPasswordField?'password':'text'" id="password" name="password"
                                x-model="password"
                                class="w-full pl-3 pr-10 py-2 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors"
                                placeholder="Password" @input="checkStrength()">
                            <button
                                class="block w-7 h-7 text-center text-xl leading-0 absolute top-2 right-2 text-gray-400 focus:outline-none hover:text-indigo-500 transition-colors"
                                @click.prevent="showPasswordField=!showPasswordField"><i class="mdi"
                                    :class="`mdi-${showPasswordField?'eye-outline':'eye-off-outline'}`"></i></button>
                        </div>
                        <div class="flex -mx-1">
                            <template x-for="(v,i) in 5">
                                <div class="w-1/5 px-1">
                                    <div class="h-2 rounded-xl transition-colors"
                                        :class="i<passwordScore?(passwordScore<=2?'bg-red-400':(passwordScore<=4?'bg-yellow-400':'bg-green-500')):'bg-gray-200'">
                                    </div>
                                </div>
                            </template>
                        </div>
                        <hr class="my-5 border border-gray-200">
                        <div class="mb-2">
                            <label class="block text-xs font-semibold text-gray-500 mb-2">PASSWORD LENGTH</label>
                            <input
                                class="w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors"
                                placeholder="Length" type="number" min="1" max="30" step="1" x-model="charsLength"
                                @input="generatePassword()" />
                            <input class="w-full" type="range" x-model="charsLength" min="1" max="30" step="1"
                                @input="generatePassword()">
                        </div>
                        <div class="flex -mx-2 mb-2">
                            <div class="w-1/2 px-2">
                                <label for="charsLower">
                                    <input type="checkbox" class="align-middle" id="charsLower"
                                        @input="generatePassword()" checked>
                                    <span class="text-xs font-semibold text-gray-500">LOWERCASE</span>
                                </label>
                            </div>
                            <div class="w-1/2 px-2">
                                <label for="charsUpper">
                                    <input type="checkbox" class="align-middle" id="charsUpper"
                                        @input="generatePassword()" checked>
                                    <span class="text-xs font-semibold text-gray-500">UPPERCASE</span>
                                </label>
                            </div>
                        </div>
                        <div class="flex -mx-2">
                            <div class="w-1/2 px-2">
                                <label for="charsNumeric">
                                    <input type="checkbox" class="align-middle" id="charsNumeric"
                                        @input="generatePassword()" checked>
                                    <span class="text-xs font-semibold text-gray-500">NUMBERS</span>
                                </label>
                            </div>
                            <div class="w-1/2 px-2">
                                <label for="charsSymbols">
                                    <input type="checkbox" class="align-middle" id="charsSymbols"
                                        @input="generatePassword()" checked>
                                    <span class="text-xs font-semibold text-gray-500">SYMBOLS</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="confirm-password">Confirm
                        Password</label>
                    <input
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                        type="password" id="confirm-password" name="confirm-password" placeholder="********">
                </div>
                <button
                    class="w-full bg-indigo-500 text-white text-sm font-bold py-2 px-4 rounded-md hover:bg-indigo-600 transition duration-300"
                    type="submit" name="submit">Register</button>
                <span class="text-sm ml-14 hover:text-blue-500 cursor-pointer">
                     have an account?
                    <a href="login.php">Login Now</a>
                </span>
            </form>
        </div>
    </body>
</body>

</html>