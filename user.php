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
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                        <div
                            class="border rounded-lg divide-y divide-gray-200 dark:border-neutral-700 dark:divide-neutral-700">
                            <div class="py-3 px-4 space-y-3">
                                <h1 class="text-3xl text-gray-400 font-semibold font-roboto">Users List</h1>
                                <p class="text-sm text-gray-500">The product list effectively dictates product
                                    presentation and
                                    provides
                                    space
                                </p>
                                <p class="text-sm text-gray-500">to list your products and offering in the most
                                    appealing way.
                                </p>
                            </div>
                            <div class="py-3 px-4 flex justify-between items-center">
                                <div class="relative max-w-xs">
                                    <label class="sr-only">Search</label>
                                    <input type="text" name="hs-table-with-pagination-search"
                                        id="hs-table-with-pagination-search"
                                        class="py-2 px-3 ps-9 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                        placeholder="Search for items">
                                    <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-3">
                                        <svg class="size-4 text-gray-400 dark:text-neutral-500"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="11" cy="11" r="8"></circle>
                                            <path d="m21 21-4.3-4.3"></path>
                                        </svg>
                                    </div>
                                </div>
                                <a href="add_user.php"
                                    class="load-content link-button p-2 inline-flex items-center gap-x-2 text-base font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-plus">
                                        <path d="M5 12h14" />
                                        <path d="M12 5v14" />
                                    </svg>
                                    Add User
                                </a>
                            </div>
                            <div class="overflow-hidden">
                                <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                                    <thead class="bg-gray-50 dark:bg-neutral-700">
                                        <tr>
                                            <th scope="col" class="py-3 px-4 pe-0">
                                                <div class="flex items-center h-5">
                                                    <input id="hs-table-pagination-checkbox-all" type="checkbox"
                                                        class="border-gray-200 rounded text-blue-600 focus:ring-blue-500 dark:bg-neutral-700 dark:border-neutral-500 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                                                    <label for="hs-table-pagination-checkbox-all"
                                                        class="sr-only">Checkbox</label>
                                                </div>
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                                ID</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                                User Image</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                                User Name</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                                Phone</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                                Email</th>
                                            <th scope="col"
                                                class="px-12 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                                Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                                        <tr>
                                            <!-- Code -->
                                            <td class="py-3 ps-4">
                                                <div class="flex items-center h-5">
                                                    <input id="hs-table-pagination-checkbox-1" type="checkbox"
                                                        class="border-gray-200 rounded text-blue-600 focus:ring-blue-500 dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                                                    <label for="hs-table-pagination-checkbox-1"
                                                        class="sr-only">Checkbox</label>
                                                </div>
                                            </td>
                                            <!-- End Code -->

                                            <!-- Product -->
                                            <td
                                                class="px-6 py-4 whitespace-nowrap font-medium text-gray-800 dark:text-neutral-200">
                                            </td>
                                            <!-- End Product -->

                                            <!-- Code -->
                                            <td
                                                class="px-6 py-4 whitespace-nowrap uppercase text-gray-800 dark:text-neutral-200">
                                                <div class="flex gap-5">
                                                </div>
                                            </td>
                                            <!-- End Code -->

                                            <!-- User Name -->
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-800 dark:text-neutral-200">
                                            </td>
                                            <!-- End User Name -->

                                            <!-- User Phone -->
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-800 dark:text-neutral-200">
                                            </td>
                                            <!-- End User Phone -->

                                            <!-- User Email -->
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-800 dark:text-neutral-200">
                                            </td>
                                            <!-- End User Email -->

                                            <!-- Action -->
                                            <td class="px-6 py-4 whitespace-nowrap text-end font-medium">

                                                <!-- Edit -->
                                                <div class="group relative inline-block">
                                                    <a href="edit_user.php"
                                                        class="flex justify-center items-center size-7 text-sm font-semibold rounded-lg border  bg-[#5edcff] text-white shadow-sm hover:bg-[#3fcdfc] focus:outline-none focus:bg-[#3fcdfc] disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="1" stroke-linecap="round"
                                                            stroke-linejoin="round" class="lucide lucide-pencil">
                                                            <path
                                                                d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z" />
                                                            <path d="m15 5 4 4" />
                                                        </svg>
                                                        <div
                                                            class="absolute -top-2 -translate-y-full left-1/2 -translate-x-1/2 text-xs bg-white border p-1 shadow-md rounded-md opacity-0 scale-75 transition-all duration-300 ease-out pointer-events-none group-hover:opacity-100 group-hover:scale-100">
                                                            <span
                                                                class="text-gray-600 text-xs tracking-wide whitespace-nowrap">Edit</span>
                                                            <div
                                                                class="bg-inherit rotate-45 p-1 absolute bottom-0 translate-y-1/2 left-1/2 -translate-x-1/2">
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- End Edit -->

                                                <!-- Delete -->
                                                <div class="group relative inline-block">
                                                    <form action="code.php" method="post">
                                                        <input type="hidden" name="id">
                                                        <input type="hidden" name="image">
                                                        <button type=" submit" name="delete_image"
                                                            class="flex justify-center items-center size-7 text-sm font-semibold rounded-lg border  bg-[#5edcff] text-white shadow-sm hover:bg-[#3fcdfc] focus:outline-none focus:bg-[#3fcdfc] disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="17"
                                                                height="17" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="1"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-trash-2">
                                                                <path d="M3 6h18" />
                                                                <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" />
                                                                <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
                                                                <line x1="10" x2="10" y1="11" y2="17" />
                                                                <line x1="14" x2="14" y1="11" y2="17" />
                                                            </svg>
                                                            <div
                                                                class="absolute -top-2 -translate-y-full left-1/2 -translate-x-1/2 text-xs bg-white border p-1 shadow-md rounded-md opacity-0 scale-75 transition-all duration-300 ease-out pointer-events-none group-hover:opacity-100 group-hover:scale-100">
                                                                <span
                                                                    class="text-gray-600 text-xs tracking-wide whitespace-nowrap">Delete</span>
                                                                <div
                                                                    class="bg-inherit rotate-45 p-1 absolute bottom-0 translate-y-1/2 left-1/2 -translate-x-1/2">
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </form>
                                                </div>
                                                <!-- End Delete -->
                                            </td>
                                            <!-- End Action -->
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="py-1 px-4">
                                <nav class="flex items-center space-x-1" aria-label="Pagination">
                                    <button type="button"
                                        class="p-2.5 min-w-[40px] inline-flex justify-center items-center gap-x-2 text-sm rounded-full text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                                        aria-label="Previous">
                                        <span aria-hidden="true">«</span>
                                        <span class="sr-only">Previous</span>
                                    </button>
                                    <button type="button"
                                        class="min-w-[40px] flex justify-center items-center text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 py-2.5 text-sm rounded-full disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:focus:bg-neutral-700 dark:hover:bg-neutral-700"
                                        aria-current="page">1</button>
                                    <button type="button"
                                        class="min-w-[40px] flex justify-center items-center text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 py-2.5 text-sm rounded-full disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:focus:bg-neutral-700 dark:hover:bg-neutral-700">2</button>
                                    <button type="button"
                                        class="min-w-[40px] flex justify-center items-center text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 py-2.5 text-sm rounded-full disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:focus:bg-neutral-700 dark:hover:bg-neutral-700">3</button>
                                    <button type="button"
                                        class="p-2.5 min-w-[40px] inline-flex justify-center items-center gap-x-2 text-sm rounded-full text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                                        aria-label="Next">
                                        <span class="sr-only">Next</span>
                                        <span aria-hidden="true">»</span>
                                    </button>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- End Content -->
        </div>
    </div>
</div>