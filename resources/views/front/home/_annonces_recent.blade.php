<section class="flex flex-col md:min-h-90 my-6">
    <!-- Catégorie Section Content -->
    <h2 class=" my-3 md:mt-0">Annonces récentes</h2>
    <div class="glide" id="annonceRecent">
        <div data-glide-el="track" class="glide__track mx-12 ">
            <ul class="glide__slides">
                <li class="glide__slide">
                    <div class="md:max-w-sm w-full overflow-hidden bg-white rounded-lg">
                        <img class="w-full" src="{{asset('images/house.jpg')}}" alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class=" font-semibold text-xl text-green-500">The Coldest Sunset</div>
                            <p class="text-gray-500 text-sm">
                                <i class="fa-solid fa-location-dot text-red-300 mr-2"></i>
                                Antanarivo
                            </p>
                            <p class="text-gray-600 text-sm">
                                {{ Str::limit(' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus
                                quia, nulla!
                                Maiores et perferendis eaque, exercitationem praesentium nihil.', 50) }}
                                <a href="" class=" text-sm text-blue-400 underline">Voir la suite</a>
                            </p>
                        </div>
                        <div class="flex justify-between px-3">
                            <span
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Demande</span>

                            <span
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">300$</span>

                        </div>
                    </div>
                </li>
                <li class="glide__slide">
                    <div class="max-w-sm overflow-hidden bg-white rounded-lg">
                        <img class="w-full" src="{{asset('images/0x0.jpg')}}" alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class=" font-semibold text-xl text-green-500">The Coldest Sunset</div>
                            <p class="text-gray-500 text-sm">
                                <i class="fa-solid fa-location-dot text-red-300 mr-2"></i>
                                Antanarivo
                            </p>
                            <p class="text-gray-600 text-sm">
                                {{ Str::limit(' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus
                                quia, nulla!
                                Maiores et perferendis eaque, exercitationem praesentium nihil.', 50) }}
                                <a href="" class=" text-sm text-blue-400 underline">Voir la suite</a>
                            </p>
                        </div>
                        <div class="flex justify-between px-3">
                            <span
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Demande</span>

                            <span
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">300$</span>

                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="glide__arrows" data-glide-el="controls">
            <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                <i class="fa-solid fa-chevron-left text-green-500 text-2xl"></i>
            </button>
            <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                <i class="fa-solid fa-chevron-right text-green-500 text-2xl "></i>
            </button>
        </div>
    </div>
</section>