<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- flowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <!-- Load Tailwind CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.16/tailwind.min.css">
    <!-- cdnjquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Load custom styles -->
    <link rel="stylesheet" href="css/style.css">
    <!-- load custom js -->
    <script src="js/script.js"></script>
</head>

<body class="bg-gradient-to-r from-gray-600 to-gray-300">
    <nav class="bg-gray-900 py-2">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="navbar-brand">
                    <a href="#">
                        <img src="img/mine.png" alt="Logo" class="h-10 mr-2">
                    </a>
                    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline">
                        <a href="index.php"
                            class="nav-link px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700 mx-4 flex flex-col items-center">
                            <i class="bi bi-house">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-house" viewBox="0 0 16 16">
                                    <path
                                        d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z" />
                                </svg>
                            </i>
                            <p class="text-center">Beranda</p>
                        </a>

                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                            class="nav-link px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700 mx-4 flex flex-col items-center">Kategori
                            <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar"
                            class="hidden bg-white text-base z-10 list-none divide-y divide-gray-100 rounded shadow my-4 w-44">
                            <ul class="py-1" aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="#"
                                        class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Settings</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Earnings</a>
                                </li>
                            </ul>
                            <div class="py-1">
                                <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Sign out</a>
                            </div>
                        </div>
                        <script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>

                        <a href="promo.php"
                            class="nav-link px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700 mx-4 flex flex-col items-center">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-discount-2 w-6 h-6 mb-1" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <line x1="9" y1="15" x2="15" y2="9" />
                                <circle cx="9.5" cy="9.5" r=".5" fill="currentColor" />
                                <circle cx="14.5" cy="14.5" r=".5" fill="currentColor" />
                                <path
                                    d="M5 7.2a2.2 2.2 0 0 1 2.2 -2.2h1a2.2 2.2 0 0 0 1.55 -.64l.7 -.7a2.2 2.2 0 0 1 3.12 0l.7 .7a2.2 2.2 0 0 0 1.55 .64h1a2.2 2.2 0 0 1 2.2 2.2v1a2.2 2.2 0 0 0 .64 1.55l.7 .7a2.2 2.2 0 0 1 0 3.12l-.7 .7a2.2 2.2 0 0 0 -.64 1.55v1a2.2 2.2 0 0 1 -2.2 2.2h-1a2.2 2.2 0 0 0 -1.55 .64l-.7 .7a2.2 2.2 0 0 1 -3.12 0l-.7 -.7a2.2 2.2 0 0 0 -1.55 -.64h-1a2.2 2.2 0 0 1 -2.2 -2.2v-1a2.2 2.2 0 0 0 -.64 -1.55l-.7 -.7a2.2 2.2 0 0 1 0 -3.12l.7 -.7a2.2 2.2 0 0 0 .64 -1.55v-1" />
                            </svg>
                            <p class="text-xs">promo</p>
                        </a>
                        <div class="search">
                            <form action="#">
                                <div class="wave-group">
                                    <input required="" type="text" class="input">
                                    <span class="bar"></span>
                                    <label class="label">
                                        <span class="label-char" style="--index: 0">S</span>
                                        <span class="label-char" style="--index: 1">e</span>
                                        <span class="label-char" style="--index: 2">a</span>
                                        <span class="label-char" style="--index: 3">r</span>
                                        <span class="label-char" style="--index: 3">c</span>
                                        <span class="label-char" style="--index: 3">h</span>
                                        <span class="label-char" style="--index: 3">.</span>
                                        <span class="label-char" style="--index: 3">.</span>
                                        <span class="label-char" style="--index: 3">.</span>
                                    </label>
                                </div>
                            </form>
                        </div>
                        <a href="#"
                            class="nav-link px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700 mx-4 flex flex-col items-center"><i
                                class="bi bi-person-circle">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                    <path fill-rule="evenodd"
                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                </svg>
                            </i></a>
                        <a href="cart.php"
                            class="nav-link px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700 flex flex-col items-center"><i
                                class="bi bi-cart">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-cart" viewBox="0 0 16 16">
                                    <path
                                        d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                </svg>
                            </i>
                            <p class="text-center">Cart</p>
                        </a>
                    </div>
                </div>
                <div class="-mr-2 flex md:hidden">
                    <button type="button"
                        class="nav-toggle inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-white transition duration-150 ease-in-out"
                        aria-label="Toggle menu">
                        <svg class="block h-6 w-6" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16">
                            </path>
                        </svg>
                        <svg class="hidden h-6 w-6" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="md:hidden nav-menu">
            <div class="px-2 pt-2 pb-3 sm:px-3">
                <a href="#"
                    class="nav-link px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700">Home</a>
                <a href="#"
                    class="nav-link px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700">Kategori</a>
                <a href="#"
                    class="nav-link px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700">Promo</a>
                <a href="#"
                    class="nav-link mt-1 px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700">Akun</a>
                <a href="#"
                    class="nav-link px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700">Keranjang</a>
            </div>
    </nav>
    <main>
        <section>

            <style>
                .card {
                    margin-right: 20px;
                    /* Atur jarak antara setiap kartu */
                }

                .card:last-of-type {
                    margin-right: 0;
                    /* Hapus margin kanan pada kartu terakhir */
                }
            </style>
            <div class="flex flex-wrap card h-300 w-300">>
                <div
                    class="mx-auto mt-11 w-80 transform overflow-hidden rounded-lg bg-white dark:bg-slate-800 shadow-md duration-300 hover:scale-105 hover:shadow-lg">
                    <img class="h-49 w-full object-cover object-center" src="img/promo/pr1.jpg" alt="Product Image" />
                    <div class="p-4">
                        <h2 class="mb-2 text-lg font-medium dark:text-white text-gray-900">Pakai CIMB Niaga Credit Card
                            Hemat s.d Rp 500rb</h2>
                        <p class="mb-2 text-base dark:text-gray-300 text-gray-700">Periode Promo <br> 1 Mar - 15 Jun
                            2023</p>
                        <div class="flex items-center">
                            <p class="mr-2 text-lg text-gray-900 dark:text-white">4 Kode Promo</p>
                        </div>
                        <button type="button"
                            class="ml-20 border border-gray-700 bg-gray-700 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-gray-800 focus:outline-none focus:shadow-outline">
                            Lihat Detail
                        </button>
                    </div>
                </div>
                <div
                    class="mx-auto mt-11 w-80 transform overflow-hidden rounded-lg bg-white dark:bg-slate-800 shadow-md duration-300 hover:scale-105 hover:shadow-lg">
                    <img class="h-49 w-full object-cover object-center" src="img/promo/pr2.jpg" alt="Product Image" />
                    <div class="p-4">
                        <h2 class="mb-2 text-lg font-medium dark:text-white text-gray-900">Makin Untung Investasi Pakai
                            Kupon SEKUTU</h2>
                        <p class="mb-2 text-base dark:text-gray-300 text-gray-700">periode promo <br> 1 Mar - 3 Des 2023
                        </p>
                        <div class="flex items-center">
                            <p class="mr-2 text-lg text-gray-900 dark:text-white">tanpa kode promo</p>
                        </div>
                        <button type="button"
                            class="ml-20 border border-gray-700 bg-gray-700 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-gray-800 focus:outline-none focus:shadow-outline">
                            Lihat Detail
                        </button>
                    </div>
                </div>
                <div
                    class="mx-auto mt-11 w-80 transform overflow-hidden rounded-lg bg-white dark:bg-slate-800 shadow-md duration-300 hover:scale-105 hover:shadow-lg">
                    <img class="h-49 w-full object-cover object-center" src="img/promo/pr3.jpg" alt="Product Image" />
                    <div class="p-4">
                        <h2 class="mb-2 text-lg font-medium dark:text-white text-gray-900">Ada yang Lebih Murah? 📱💻📷
                        </h2>
                        <p class="mb-2 text-base dark:text-gray-300 text-gray-700">Periode Promo <br> 1 Jan - 31 Des
                            2023</p>
                        <div class="flex items-center">
                            <p class="mr-2 text-lg  text-gray-900 dark:text-white">6 kode promo</p>
                        </div>
                        <button type="button"
                            class="ml-20 border border-gray-700 bg-gray-700 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-gray-800 focus:outline-none focus:shadow-outline">
                            Lihat Detail
                        </button>
                    </div>
                </div>
                <div
                    class="mx-auto mt-11 w-80 transform overflow-hidden rounded-lg bg-white dark:bg-slate-800 shadow-md duration-300 hover:scale-105 hover:shadow-lg">
                    <img class="h-49 w-full object-cover object-center" src="img/promo/FeatureImage-940x339px-11.jpg"
                        alt="Product Image" />
                    <div class="p-4">
                        <h2 class="mb-2 text-lg font-medium dark:text-white text-gray-900">Belanja Hemat Anti Rugi Pakai
                            Kartu Kredit BNI Diskon hingga Rp 50.000,-</h2>
                        <p class="mb-2 text-base dark:text-gray-300 text-gray-700">periode promo <br> 13 Jan - 31 Des
                        </p>
                        <div class="flex items-center">
                            <p class="mr-2 text-lg text-gray-900 dark:text-white">7 kode promo</p>
                        </div>
                        <button type="button"
                            class="ml-20 border border-gray-700 bg-gray-700 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-gray-800 focus:outline-none focus:shadow-outline">
                            Lihat Detail
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="bg-gray-900 text-white py-8 mt-4">
        <div class="container mx-auto flex justify-between items-center">
          <p>© 2023 MineCOM. All rights reserved.</p>
          <ul class="flex">
            <li class="m-4"><a href="#">Tentang Kami</a></li>
            <li class="m-4"><a href="#">Kebijakan Privasi</a></li>
            <li class="m-4"><a href="#">Hubungi Kami</a></li>
          </ul>

        </div>
      </footer>
    <!-- Load jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>