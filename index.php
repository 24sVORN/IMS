<?php
session_start();
include "./function/functions.php";
if (!isset($_SESSION["User_Name"]) && !isset($_SESSION["User_Password"])) {
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/style.css">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.0/dist/tailwind.min.css" rel="stylesheet">
        <title>Login</title>
    </head>

    <body class="">
        <div class="flex items-center justify-center h-screen relative">
            <img class="w-full h-full object-cover blur-[2px]"
                src="https://cogsy.com/wp-content/uploads/2023/06/Multi-location-inventory-management-scaled.jpg" alt="">

            <div class="w-[35rem] h-[23rem] p-3 bg-[#F9FAFB]/50 shadow-2xl rounded-lg absolute">
                <div class="my-5">
                    <h1 class="text-center text-4xl font-bold font-roboto uppercase text-[#14213D]">im system</h1>
                </div>
                <div class="flex flex-auto justify-center items-center my-10">
                    <form action="./function/login-config.php" method="post" class="space-y-10 my-2">
                        <div class="">
                            <label for="name" class="text-lg font-semibold">Name :</label>
                            <input type="text" name="User_Name" id="name"
                                class="ml-12 w-[18rem] py-1.5 px-3 rounded-md font-medium focus:outline-none border border-gray-dark/50"
                                required>
                        </div>
                        <div class="">
                            <label for="password" class="text-lg font-semibold">Password :</label>
                            <input type="password" name="User_Password" id="password"
                                class="ml-5 w-[18rem] py-1.5 px-3 rounded-md font-medium focus:outline-none border border-gray-dark/50"
                                required>
                        </div>
                        <div class="absolute font-medium bottom-[27%] text-sm font-roboto text-red-600">
                            <?= alertMessage() ?>
                        </div>
                        <div class="flex justify-center items-center">
                            <button type="submit"
                                class="py-2.5 px-5 text-base my-2 font-semibold uppercase tracking-widest rounded-md shadow-sm bg-[#FDB035] hover:bg-[#FDA821] text-[#FFFFFF] transition-all">Login</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </body>

    </html>
<?php } else {
    header("Location: overview.php");
} ?>