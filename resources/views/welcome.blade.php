<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <title>mada-annonce</title>
      @viteReactRefresh
      @vite(['resources/css/app.css',
      'resources/js/app.jsx'])
   </head>
   <body>
      @include('layouts._header')
      <div class="container mx-auto">
         <!-- Hero Section -->
         <section class="flex flex-col min-h-screen">
            <!-- Hero Section Content -->
            <div class="text-center mx-auto">
               <h1 class="text-4xl font-semibold mt-16 text-green-600">Trouvez des annonces partout où vous êtes</h1>
               <p class=" text-base mt-5">Bienvenue sur Mada Annonce, la plateforme en ligne dédiée aux Malgaches, qui vous offre une expérience de recherche et de publication d'annonces optimale pour des biens, des services, des offres d'emploi et de logement, avec une diffusion rapide et efficace auprès d'une audience spécifiquement ciblée à Madagascar.</p>
              <!-- component -->
              <div class="flex md:flex-row flex-col items-center p-3 space-x-6 mt-3 md:mx-16 bg-white rounded-md boreder shadow-lg hover:shadow-lg transform hover:scale-105 transition duration-500 mx-auto justify-between">
               <div class="flex bg-gray-100 p-4 md:w-1/2 w-full space-x-4 rounded-lg">
                 <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 opacity-30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                 </svg>
                 <input class="bg-gray-100 outline-none" type="text" placeholder="Article name or keyword..." />
               </div>
               <div class="flex py-3 px-4 rounded-lg text-gray-500 font-semibold cursor-pointer">
                 <span>Categorie</span>
                 <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                 </svg>
               </div>
               <div class="flex py-3 px-4 rounded-lg text-gray-500 font-semibold cursor-pointer">
                  <span>offre</span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                  </svg>
                </div>
               <div class="bg-red-600 py-2 px-5 text-white font-semibold rounded-lg hover:shadow-lg transition duration-3000 cursor-pointer md:w-36 w-full mx-3">
                 <span>Search</span>
               </div>
             </div>
            </div>
         </section>
         <div class="flex flex-wrap justify-center gap-4 p-4">
            <a href="#" class="btn-indigo">
            Button 1
            </a>
            <a href="#" class=" btn-error">
            Button 2
            </a>
            <a href="#" class="btn-success">
            Button 3
            </a>
            <a href="#" class="btn-info">
            Button 4
            </a>
            <a href="#" class="btn-warning">
            Button 4
            <i class="las la-user-circle text-slate-900 text-3xl²&"></i>
            </a>
            <i class="fa-solid fa-cart-arrow-down text-cyan-400"></i>
            <i class="fa-light fa-user"></i>
         </div>
      </div>
   </body>
</html>
