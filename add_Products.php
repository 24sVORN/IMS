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
                <div class="border-b rounded-lg dark:border-neutral-700">
                    <div class="py-3 px-4">
                        <h1 class="text-3xl font-semibold text-gray-500 font-roboto">
                            Add Product
                        </h1>
                    </div>
                </div>
                <div class="py-3 px-4">
                    <form action="">
                        <div class="my-5">
                            <label for="" class="text-xl">Product Type *</label>
                            <!-- Select -->
                            <div class="my-3">
                                <select
                                    class="py-3 px-4 block w-full border border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                    <option value="name">Name</option>
                                    <option>Disabled</option>
                                    <option>Description</option>
                                    <option>User ID</option>
                                </select>
                            </div>
                            <!-- End Select -->
                        </div>
                        <div class="grid grid-cols-2 gap-10 my-5">
                            <div class="">
                                <label for="name" class="block text-xl mb-2 dark:text-white">
                                    Name *
                                </label>
                                <input type="text" id="name"
                                    class="py-3 px-4 block w-full border border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    placeholder="Enter Name" />
                            </div>
                            <div class="">
                                <label for="code" class="block text-xl mb-2 dark:text-white">
                                    Code *
                                </label>
                                <input type="text" id="code"
                                    class="py-3 px-4 block w-full border border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    placeholder="Enter Code" />
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-10 my-5">
                            <div class="">
                                <label for="barcode" class="block text-xl mb-2 dark:text-white">
                                    Barcode Symbol *
                                </label>
                                <select
                                    class="py-3 px-4 block w-full border border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                    <option value="name">Name</option>
                                    <option>Disabled</option>
                                    <option>Description</option>
                                    <option>User ID</option>
                                </select>
                            </div>
                            <div class="">
                                <label for="with-corner-hint" class="block text-xl mb-2 dark:text-white">
                                    Category *
                                </label>
                                <select
                                    class="py-3 px-4 block w-full border border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                    <option value="name">Name</option>
                                    <option>Disabled</option>
                                    <option>Description</option>
                                    <option>User ID</option>
                                </select>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-10 my-5">
                            <div class="">
                                <label for="cost" class="block text-xl mb-2 dark:text-white">
                                    Cost *
                                </label>
                                <input type="text" id="cost"
                                    class="py-3 px-4 block w-full border border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    placeholder="Enter Cost" />
                            </div>
                            <div class="">
                                <label for="price" class="block text-xl mb-2 dark:text-white">
                                    Price *
                                </label>
                                <input type="text" id="price"
                                    class="py-3 px-4 block w-full border border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    placeholder="Enter Price" />
                            </div>
                        </div>
                        <div class="my-5">
                            <label for="" class="text-xl">Tex Method *</label>
                            <div class="my-3">
                                <select
                                    class="py-3 px-4 block w-full border border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">>
                                    <option value="name">Exclusive</option>
                                    <option>Inclusive</option>
                                </select>
                            </div>
                        </div>
                        <div class="my-5">
                            <label for="qty" class="block text-xl mb-2 dark:text-white">
                                Quantity *
                            </label>
                            <input type="text" id="qty"
                                class="py-3 px-4 block w-full border border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="Enter Name" />
                        </div>
                        <div class="my-5">
                            <form class="">
                                <label for="file-input" class="text-xl">Image</label>
                                <input type="file" name="file-input" id="file-input"
                                    class="block w-full border border-gray-200 mt-3 shadow-sm rounded-lg text-sm cursor-pointer focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 file:bg-white file:border-0 file:me-4 file:py-4 file:px-4 dark:file:bg-neutral-700 dark:file:text-neutral-400" />
                            </form>
                        </div>
                        <div class="my-5">
                            <div class="space-y-3">
                                <label for="" class="text-xl">Description / Product Details</label>
                                <textarea
                                    class="py-3 px-4 block w-full border border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    rows="7"></textarea>
                            </div>
                        </div>
                        <div class="mt-5">
                            <button type="button"
                                class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                Add Product
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End Content -->
        </div>
    </div>
</div>