<?php
session_start();

if (!isset($_SESSION['User_Name'])) {
    header('location: index.php');
    exit;
}


include "./function/functions.php";
include "./admin/include/header.php";
include "./admin/include/sidebar.php";
?>

<div class="mx-4 py-4 md:ml-4 lg:ml-64 lg:mt-7 lg:py-2 mt-12">
    <div
        class="pr-0.5 border overflow-auto border-gray-300 rounded-xl bg-gray-50 dark:border-gray-700 dark:bg-[#13141a] dark:text-[#9a9cae]">
        <div
            class="lg:h-[55.5rem] overflow-y-auto dark:bg-[#13141a] [&::-webkit-scrollbar]:w-1 [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 [&::-webkit-scrollbar-thumb]:rounded-md dark:[&::-webkit-scrollbar-track]:bg-transparent dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 p-5">
            <!-- Content -->
            <div class="flex flex-col">
                <h1 class="text-xl font-semibold">Add User</h1>
                <form action="code.php" method="POST" enctype="multipart/form-data">
                    <div class="grid grid-cols-2 gap-10 my-5">
                        <div class="">
                            <label for="name" class="block text-xl mb-2 dark:text-white">
                                Name *
                            </label>
                            <input type="text" id="name" name="name"
                                class="py-3 px-4 block w-full border border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="Enter Name" />
                        </div>
                        <div class="">
                            <label for="phoneNumber" class="block text-xl mb-2 dark:text-white">
                                Phone Number *
                            </label>
                            <input type="text" id="phoneNumber" name="phone"
                                class="py-3 px-4 block w-full border border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="Enter PhoneNumber" />
                        </div>
                        <div class="">
                            <label for="email" class="block text-xl mb-2 dark:text-white">
                                Email *
                            </label>
                            <input type="text" id="email" name="email"
                                class="py-3 px-4 block w-full border border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="Enter Email" />
                        </div>
                    </div>
                    <div class="">
                        <label for="file-input" class="text-xl">Image</label>
                        <input type="file" name="image" id="file-input"
                            class="block w-full border border-gray-200 mt-3 shadow-sm rounded-lg text-sm cursor-pointer focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 file:bg-white file:border-0 file:me-4 file:py-4 file:px-4 dark:file:bg-neutral-700 dark:file:text-neutral-400" />
                    </div>
                    <div class="my-5">
                        <button type="submit" name="save_image"
                            class="px-5 py-2.5 text-sm font-semibold rounded-lg border bg-[#5edcff] text-white shadow-sm hover:bg-[#3fcdfc] focus:outline-none focus:bg-[#3fcdfc] disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">Add
                            User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>