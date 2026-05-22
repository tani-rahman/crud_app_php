<?php
 include 'functions.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CSS -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <!-- DaisyUI -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />

    <!-- Summernote CSS -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- Summernote JS -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <title>User Management</title>
</head>

<body class="bg-gray-100">

<!-- Navbar -->
<div class="bg-[#f1efef] shadow-sm py-4">

    <div class="max-w-7xl mx-auto">

        <div class="navbar justify-center relative">

            <!-- Mobile Menu -->
            <div class="dropdown lg:hidden absolute left-4">

                <div tabindex="0" role="button" class="btn btn-ghost">

                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">

                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />

                    </svg>

                </div>

                <ul tabindex="0"
                    class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">

                    <li>
                        <a href="index.php"
                            class="text-[18px] font-medium text-gray-700 hover:text-black bg-transparent hover:bg-transparent">
                            Add User
                        </a>
                    </li>

                    <li>
                        <a href="all-users.php"
                            class="text-[18px] font-medium text-gray-700 hover:text-black bg-transparent hover:bg-transparent">
                            All User
                        </a>
                    </li>

                </ul>

            </div>

            <!-- Desktop Menu -->
            <div class="hidden lg:flex">

                <ul class="menu menu-horizontal gap-6 px-1">

                    <li>
                        <a href="index.php"
                            class="text-[18px] font-medium text-gray-700 hover:text-black bg-transparent hover:bg-transparent">
                            Add User
                        </a>
                    </li>

                    <li>
                        <a href="all-users.php"
                            class="text-[18px] font-medium text-gray-700 hover:text-black bg-transparent hover:bg-transparent">
                            All User
                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </div>

</div>