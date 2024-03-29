<nav class="relative z-10">
    <div
        class="container min-w-full h-20 bg-[#839AD3] fixed flex justify-between items-center px-4 py-2 mx-auto
        md:flex-nowrap md:space-x-8">
        <a href="./" class="flex items-center">
            <img class="h-16 mr-2" src="./assets/logo.svg" alt="logo nadadoras" />
            <p class="text-xl font-bold text-zinc-200">Aquart Synchro</p>
        </a>

        <ul class="text-zinc-200 hidden md:flex space-x-8">
            <li>
                <a href="./" class=" hover:text-gray-600">Inicio</a>
            </li>
            <li>
                <a href="./history.php" class=" hover:text-gray-600">Historia</a>
            </li>
            <li>
                <a href="./rules.php" class="hover:text-gray-600">Reglas</a>
            </li>
            <li>
                <a href="./events.php" class="hover:text-gray-600">Eventos</a>
            </li>
        </ul>

        <button id="menu-btn" class="md:hidden focus:outline-none focus:ring-2 focus:ring-offset-2">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                height="24px" viewBox="0 0 300 300" enable-background="new 0 0 300 300" xml:space="preserve">
                <path
                    d="M178.793,143.838c4.953-5.756,6.439-13.5,7.874-20.741c6.468-25.914,13.014-51.815,19.407-77.746  c-0.021-0.592,0.491-3.428-0.647-1.539c-1.313,1.33-2.073,3.07-2.978,4.678c-5.815,10.944-11.728,21.842-17.183,32.97  c-2.853,6.932-5.7,13.879-9.242,20.497c-3.939,7.25-6.357,15.172-8.829,23.006c-1.344,4.889-2.628,9.962-1.979,15.072  C167.773,144.496,174.303,146.326,178.793,143.838z" />
                <path
                    d="M196.201,182.944c-1.353,4.898-2.634,9.984-1.987,15.106c2.916,5.289,12.864,7.393,15.681,0.967  c3.413-5.631,4.631-12.162,5.907-18.523c6.592-26.013,12.959-52.084,19.6-78.085c-0.298-0.246-0.894-0.737-1.19-0.983  c-6.794,12.606-13.623,25.202-19.953,38.049c-2.851,6.93-5.701,13.875-9.241,20.491C201.085,167.208,198.668,175.12,196.201,182.944  z" />
                <path
                    d="M81.043,164.328c11.018,3.193,22.508,4.65,33.974,4.559c3.152-0.005,6.514-0.042,9.372-1.525  c3.587-3.98,4.308-11.946-0.898-14.895c-3.544-0.959-7.171-1.723-10.832-2.057c-30.74-0.569-61.485-2.213-92.228-2.447  c1.075,1.321,2.706,1.783,4.264,2.22c10.199,2.852,20.352,5.868,30.581,8.612C63.737,161.227,72.572,161.922,81.043,164.328z" />
                <path
                    d="M141.721,208.416c-30.748-0.588-61.5-2.194-92.251-2.469c1.176,1.598,3.169,1.889,4.924,2.434  c11.884,3.286,23.669,6.951,35.655,9.857c6.959,1.352,13.983,2.401,20.828,4.299c11.401,3.301,23.333,4.551,35.182,4.334  c2.472-0.08,5.055-0.344,7.291-1.469c3.629-3.973,4.361-12.008-0.885-14.943C148.947,209.516,145.352,208.749,141.721,208.416z" />
                <path
                    d="M276.044,233.721c-4.531-0.35-8.841,1.701-12.833,3.608c-10.295,5.2-20.142,12.8-32.158,13.075  c-19.855-1.082-35.962-16.358-56.058-16.203c-18.558,0.035-33.693,13.402-51.966,14.846c-8.154,0.941-16.018-2.225-23.228-5.668  c-5.793-2.92-12.122-4.7-18.551-5.471c-9.411-0.703-18.7,1.617-27.606,4.419c-4.515,1.455-9.155,2.705-13.328,5.02  c0.049,1.438-0.279,3.182,0.999,4.224c2.948,0.904,5.892-0.43,8.639-1.392c9.77-3.35,19.893-6.718,30.352-6.179  c12.721,0.933,23.168,9.816,35.801,11.079c7.085,0.509,14.306-0.153,21.031-2.526c13.086-4.602,25.59-12.578,39.925-12.17  c18.442,1.207,33.336,15.061,51.846,15.981c13.208,1.116,24.577-6.848,35.644-12.834c3.816-2.251,8.113-3.427,12.435-4.239  C279.857,238.442,278.807,233.907,276.044,233.721z" />
                <circle cx="164.966" cy="181.35" r="21.875" />
                <circle cx="135.967" cy="123.35" r="21.875" />
            </svg>
        </button>
    </div>

    <div id="mobile-menu"
        class="fixed inset-0 bg-white px-4 py-6 transition-all duration-300 ease-in-out transform translate-y-full md:hidden">
        <ul class="space-y-2">
            <li>
                <a href="./" class="text-xl font-bold text-gray-800 block py-2">Aquart Synchro</a>
            </li>
            <li>
                <a href="./" class="text-gray-700 hover:text-gray-600 block py-2">Inicio</a>
            </li>
            <li>
                <a href="./history.php" class="text-gray-700 hover:text-gray-600 block py-2">Historia</a>
            </li>
            <li>
                <a href="./rules.php" class="text-gray-700 hover:text-gray-600 block py-2">Reglas</a>
            </li>
            <li>
                <a href="./events.php" class="text-gray-700 hover:text-gray-600 block py-2">Eventos</a>
            </li>
        </ul>
        <button id="close-btn" class="absolute top-4 right-4 focus:outline-none">
            <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>
</nav>

<script>
const menuBtn = document.getElementById("menu-btn");
const mobileMenu = document.getElementById("mobile-menu");
const closeBtn = document.getElementById("close-btn");

menuBtn.addEventListener("click", function() {
    mobileMenu.classList.toggle("translate-y-0");
});

closeBtn.addEventListener("click", function() {
    mobileMenu.classList.toggle("translate-y-0");
});
</script>