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
                            <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                            <p class="text-gray-700 text-base">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla!
                                Maiores et perferendis eaque, exercitationem praesentium nihil.
                            </p>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            <span
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                            <span
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                            <span
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                        </div>
                    </div>
                </li>
                <li class="glide__slide">
                    <div class="max-w-sm overflow-hidden bg-white rounded-lg">
                        <img class="w-full" src="{{asset('images/0x0.jpg')}}" alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                            <p class="text-gray-700 text-base">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla!
                                Maiores et perferendis eaque, exercitationem praesentium nihil.
                            </p>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            <span
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                            <span
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                            <span
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="glide__arrows" data-glide-el="controls">
            <button class="glide__arrow glide__arrow--left bg-green-500" data-glide-dir="<">
                <i class="fa-solid fa-chevron-left text-white"></i>
            </button>
            <button class="glide__arrow glide__arrow--right bg-green-500" data-glide-dir=">">
                <i class="fa-solid fa-chevron-right text-white "></i>
            </button>
        </div>
    </div>
</section>