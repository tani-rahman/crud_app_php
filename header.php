<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CSS -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <!-- DaisyUI -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />

    <title>Navbar</title>
</head>

<body>

<div class="bg-slate-100 shadow-sm">
    <div class="navbar max-w-7xl mx-auto justify-center relative">

        <!-- Mobile Dropdown -->
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
                class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-slate-100 rounded-box w-52">

                <li>
                    <a href="index.php"
                       class="px-3 py-2 text-[17px] font-medium text-gray-500 hover:text-black">
                        Add User
                    </a>
                </li>

                <li>
                    <a href="all-users.php"
                       class="px-3 py-2 text-[17px] font-medium text-gray-500 hover:text-black">
                        All User
                    </a>
                </li>

            </ul>
        </div>

        <!-- Desktop Menu -->
        <div class="hidden lg:flex">

            <ul class="menu menu-horizontal gap-4">

                <li>
                    <a href="index.php"
                       class="px-3 py-2 text-[17px] font-medium text-gray-500 hover:text-black">
                        Add User
                    </a>
                </li>

                <li>
                    <a href="all-users.php"
                       class="px-3 py-2 text-[17px] font-medium text-gray-500 hover:text-black">
                        All User
                    </a>
                </li>

            </ul>

        </div>

    </div>
</div>

</body>
</html>