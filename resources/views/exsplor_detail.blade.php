<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/build.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hurricane&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        @media(max-width:768px) {
            .flex-container {
                flex-direction: column;
            }

            .fulwidth {
                width: 100%;
            }

            .fulheight {
                height: 100%;
            }
        }

        .scrollbar-hidden::-webkit-scrollbar {
            display: none;
        }
    </style>
    <title>MG | Home</title>
</head>

<body>


    <nav class="fixed top-0 z-20 w-full bg-white shadow-md">
        <div class="flex flex-wrap items-center justify-center max-w-screen-xl p-4 mx-auto">
            <a href="explore.html" class="mr-4">EXPLORE</a>
            <a href="explore.html" class="mr-4">PINNED</a>
            <input type="text" class="px-4 py-1 mr-4 rounded-full" placeholder="Search ...">
            <a href="pin.html" class="mr-4">PIN</a>
            <div class="flex items-center space-x-1 md:order-2 md:space-x-0 rtl:space-x-reverse">
                <img src="/asset/profile.jpg" alt="" class="w-10 rounded-full" data-dropdown-toggle="user-dropdown-menu">
                <!-- Drop Down -->
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow "
                    id="user-dropdown-menu">
                    <ul class="py-2" role="none">
                        <li>
                            <a href="my-pin.html"
                                class="px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                role="menuitem">
                                <div class="inline-flex items-center">
                                    Profile
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="changepassword.html"
                                class="px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                role="menuitem">
                                <div class="inline-flex items-center">
                                    Change Password
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="index.html"
                                class="px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                role="menuitem">
                                <div class="inline-flex items-center">
                                    Log Out
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End Navigation -->
            </div>
        </div>
    </nav>
    <section class="mt-32">
        <div class="items-center max-w-screen-md mx-auto ">
            <h3 class="text-5xl text-center font-hurricane">MG</h3>
        </div>
    </section>
    <section class="mt-10">
        <div class="max-w-screen-md mx-auto">
            <div class="flex flex-wrap px-2 flex-container">
                <div class="w-3/5 max-[480px]:w-full">
                    <div class="flex justify-center overflow-hidden">
                        <img src="/asset/explore.jpg" alt=""
                            class="w-full h-auto max-w-xl px-2 transition duration-500 ease-in-out hover:scale-105">
                    </div>
                    <div class="flex flex-col px-2">
                        <div class="font-semibold">
                            Bunga
                        </div>
                        <div>
                            <small class="text-abuabu"> Bawah </small>
                        </div>
                    </div>
                </div>
                <div class="w-2/5  max-[480px]:w-full">
                    <div class="flex flex-wrap items-center justify-between ">
                        <div class="flex flex-row items-center gap-2">
                            <div>
                                <img src="/assets/users.png" class="w-10" alt="">
                            </div>
                            <div class="flex flex-col">
                                <a href="other-pin.html" class="text-md">OmenSoft</a>
                                <small class="text-xs">100 Pengikut</small>
                            </div>
                        </div>
                        <div>
                            <button class="px-4 rounded-full bg-bgcolor2">Ikuti</button>
                        </div>
                    </div>
                    <div class="mt-[33px]">
                        Comments
                    </div>
                    <div class="relative flex flex-col overflow-y-auto h-[200px] scrollbar-hidden">
                        <div class="flex flex-row justify-start mt-4">
                            <div class="w-1/4">
                                <img src="/aset/profile.jpg" class="w-8 h-auto rounded-full " alt="" >
                            </div>
                            <div class="flex flex-col mr-2">
                                <h5 class="text-sm">Atas</h5>
                                <small class="text-xs text-abuabu">Bawah</small>
                            </div>
                            <h5 class="text-sm">Fotonya sangat Bagus Sekali, apakah saya bisa memintanya</h5>
                        </div>
                        <div class="flex flex-row justify-start mt-4">
                            <div class="w-1/4">
                                <img src="/aset/profile 2.jpg" class="w-8 h-auto rounded-full" alt="">
                            </div>
                            <div class="flex flex-col mr-2">
                                <h5 class="text-sm">Atas</h5>
                                <small class="text-xs text-abuabu">Bawah</small>
                            </div>
                            <h5 class="text-sm">Fotonya sangat Bagus Sekali, apakah saya bisa memintanya</h5>
                        </div>
                        <div class="flex flex-row justify-start mt-4">
                            <div class="w-1/4">
                                <img src="/aset/profile 3.jpg" class="w-8 h-auto rounded-full" alt="">
                            </div>
                            <div class="flex flex-col mr-2">
                                <h5 class="text-sm">Atas</h5>
                                <small class="text-xs text-abuabu">Bawah</small>
                            </div>
                            <h5 class="text-sm">Fotonya sangat Bagus Sekali, apakah saya bisa memintanya</h5>
                        </div>
                        <div class="flex flex-row justify-start mt-4">
                            <div class="w-1/4">
                                <img src="/assets/users.png" class="w-8 h-auto" alt="">
                            </div>
                            <div class="flex flex-col mr-2">
                                <h5 class="text-sm">Atas</h5>
                                <small class="text-xs text-abuabu">Bawah</small>
                            </div>
                            <h5 class="text-sm">Fotonya sangat Bagus Sekali, apakah saya bisa memintanya</h5>
                        </div>
                        <div class="flex flex-row justify-start mt-4">
                            <div class="w-1/4">
                                <img src="/assets/users.png" class="w-8 h-auto" alt="">
                            </div>
                            <div class="flex flex-col mr-2">
                                <h5 class="text-sm">Atas</h5>
                                <small class="text-xs text-abuabu">Bawah</small>
                            </div>
                            <h5 class="text-sm">Fotonya sangat Bagus Sekali, apakah saya bisa memintanya</h5>
                        </div>
                        <div class="flex flex-row justify-start mt-4">
                            <div class="w-1/4">
                                <img src="/assets/users.png" class="w-8 h-auto" alt="">
                            </div>
                            <div class="flex flex-col mr-2">
                                <h5 class="text-sm">Atas</h5>
                                <small class="text-xs text-abuabu">Bawah</small>
                            </div>
                            <h5 class="text-sm">Fotonya sangat Bagus Sekali, apakah saya bisa memintanya</h5>
                        </div>
                        <div class="flex flex-row justify-start mt-4">
                            <div class="w-1/4">
                                <img src="/assets/users.png" class="w-8 h-auto" alt="">
                            </div>
                            <div class="flex flex-col mr-2">
                                <h5 class="text-sm">Atas</h5>
                                <small class="text-xs text-abuabu">Bawah</small>
                            </div>
                            <h5 class="text-sm">Fotonya sangat Bagus Sekali, apakah saya bisa memintanya</h5>
                        </div>
                        <div class="flex flex-row justify-start mt-4">
                            <div class="w-1/4">
                                <img src="/assets/users.png" class="w-8 h-auto" alt="">
                            </div>
                            <div class="flex flex-col mr-2">
                                <h5 class="text-sm">Atas</h5>
                                <small class="text-xs text-abuabu">Bawah</small>
                            </div>
                            <h5 class="text-sm">Fotonya sangat Bagus Sekali, apakah saya bisa memintanya</h5>
                        </div>
                        <div class="flex flex-row justify-start mt-4">
                            <div class="w-1/4">
                                <img src="/assets/users.png" class="w-8 h-auto" alt="">
                            </div>
                            <div class="flex flex-col mr-2">
                                <h5 class="text-sm">Atas</h5>
                                <small class="text-xs text-abuabu">Bawah</small>
                            </div>
                            <h5 class="text-sm">Fotonya sangat Bagus Sekali, apakah saya bisa memintanya</h5>
                        </div>
                    </div>
                    <div class="flex gap-2 mt-2">
                        <div class="w-3/4">
                            <input type="text" name="" id="" class="w-full px-2 py-1 rounded-full border-slate-500">
                        </div>
                        <button class="px-4 rounded-full bg-biru"><span class="text-white bi bi-send"></span></button>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap mt-10 flex-container">
                <div class="flex mx-auto mt-2 bg-white">
                    <div class="flex flex-col px-2">
                        <a href="explore-detail.html">
                            <div class="w-[363px] h-[192px] bg-bgcolor2 overflow-hidden">
                                <img src="/assets/bg_01.png" alt="" class="w-full transition duration-300 ease-in-out hover:scale-105">
                            </div>
                        </a>
                        <div class="flex flex-wrap items-center justify-between px-2 mt-2">
                            <div>
                                <div class="flex flex-col">
                                    <div>
                                        flower
                                    </div>
                                    <div class="text-xs text-abuabu">
                                        15w
                                    </div>
                                </div>
                            </div>
                            <div>
                                <span class="bi bi-tag-fill"></span>
                                <small>40</small>
                                <span class="bi bi-chat-left-text"></span>
                                <small>14</small>
                                <span class="bi bi-heart"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex mx-auto mt-2 bg-white">
                    <div class="flex flex-col px-2">
                        <a href="explore-detail.html">
                            <div class="w-[363px] h-[192px] bg-bgcolor2 overflow-hidden">
                                <img src="/assets/bg_02.png" alt="" class="w-full transition duration-300 ease-in-out hover:scale-105">
                            </div>
                        </a>
                        <div class="flex flex-wrap items-center justify-between px-2 mt-2">
                            <div>
                                <div class="flex flex-col">
                                    <div>
                                        Kebahagiaan
                                    </div>
                                    <div class="text-xs text-abuabu">
                                        15w
                                    </div>
                                </div>
                            </div>
                            <div>
                                <span class="bi bi-tag-fill"></span>
                                <small>40</small>
                                <span class="bi bi-chat-left-text"></span>
                                <small>14</small>
                                <span class="bi bi-heart"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex mx-auto mt-2 bg-white">
                    <div class="flex flex-col px-2">
                        <a href="explore-detail.html">
                            <div class="w-[363px] h-[192px] bg-bgcolor2 overflow-hidden">
                                <img src="/assets/bg_04.png" alt="" class="w-full transition duration-300 ease-in-out hover:scale-105">
                            </div>
                        </a>
                        <div class="flex flex-wrap items-center justify-between px-2 mt-2">
                            <div>
                                <div class="flex flex-col">
                                    <div>
                                        Kebahagiaan
                                    </div>
                                    <div class="text-xs text-abuabu">
                                        15w
                                    </div>
                                </div>
                            </div>
                            <div>
                                <span class="bi bi-tag-fill"></span>
                                <small>40</small>
                                <span class="bi bi-chat-left-text"></span>
                                <small>14</small>
                                <span class="bi bi-heart"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex mx-auto mt-2 bg-white">
                    <div class="flex flex-col px-2">
                        <a href="explore-detail.html">
                            <div class="w-[363px] h-[192px] bg-bgcolor2 overflow-hidden">
                                <img src="/assets/bg_01.png" alt="" class="w-full transition duration-300 ease-in-out hover:scale-105">
                            </div>
                        </a>
                        <div class="flex flex-wrap items-center justify-between px-2 mt-2">
                            <div>
                                <div class="flex flex-col">
                                    <div>
                                        Kebahagiaan
                                    </div>
                                    <div class="text-xs text-abuabu">
                                        15w
                                    </div>
                                </div>
                            </div>
                            <div>
                                <span class="bi bi-tag-fill"></span>
                                <small>40</small>
                                <span class="bi bi-chat-left-text"></span>
                                <small>14</small>
                                <span class="bi bi-heart"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="/node_modules/flowbite/dist/flowbite.min.js"></script>
</body>

</html>