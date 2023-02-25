<header>
    <nav
        class="flex flex-wrap items-center justify-between w-full py-4 md:py-0 px-4 text-lg text-gray-700 shadow-sm shadow-green-200"
    >
        <div class="container flex flex-wrap items-center justify-between mx-auto">       
                <a href="#"  class="flex items-center text-green-400">
                    <img src="{{ asset('images/logo.png') }}" alt="logo" class=" aspect-square mt-1" width="50" height="50">
                    Mada Annonce
                </a>    
            <div class=" md:order-2">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                id="menu-button"
                class="h-6 w-6 cursor-pointer md:hidden block text-green-400"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16"
                />
            </svg>
            <div class=" hidden md:flex">
            <a href="#" class=" btn-success mr-2 text-base">Se connecter</a>
            <a href="#" class=" btn-success text-base">S'inscrire</a>

            <!-- <a href="#" class=" mx-1 rounded-md shadow-sm shadow-green-300 text-green-400 px-3 border border-green-300 hover:bg-green-400 hover:text-gray-100 hover:border-gray-100 ">Se connecter</a>
            <a href="#" class=" mx-1 rounded-md shadow-sm shadow-green-300 text-green-400 px-3 border border-green-300 hover:bg-green-400 hover:text-gray-100 hover:border-gray-100">S'inscrire</a> -->
            </div>
        </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="menu">
                <ul
                    class="pt-4 text-base text-gray-700 md:flex md:justify-between md:pt-0"
                >  
                    <li>
                        <a class="md:p-4 py-1 block hover:text-green-600" href="#"
                            >Annonces </a
                        >
                    </li>
                    <li>
                        <a class="md:p-4 py-1 block hover:text-green-600" href="#"
                            >Ajouter une annonce</a
                        >
                    </li>
                    <li class=" md:hidden">
                    <a href="#" class="  text-green-400 py-1 my-2">Se connecter</a>
                    <a href="#" class="  text-green-400 py-1 my-2">S'inscrir</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>
</header>