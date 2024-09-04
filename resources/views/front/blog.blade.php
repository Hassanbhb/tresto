@section('title', __('Conseils et Astuces pour les Restaurateurs | Blog Tresto'))
@section('description', __("Découvrez des conseils d'experts et des tendances pour optimiser votre menu, améliorer l'expérience client, et développer votre présence en ligne."))

<x-layouts.front>
  <div class="">

    <x-front.nav />

    <section class="overflow-hidden">
      <div class="bg-tresto-500 pt-20 pb-80 px-10 relative">
        <div class="absolute left-1/2 top-0 transform -translate-x-1/2 flex gap-6">
          <div class="mt-20 rounded-3xl w-80 h-80"
            style="background:linear-gradient(180deg, rgba(255, 255, 255, 0.00) 0%, rgba(255, 255, 255, 0.10) 100%);">
          </div>
          <div class="rounded-3xl w-80 h-80"
            style="background:linear-gradient(180deg, rgba(255, 255, 255, 0.00) 0%, rgba(255, 255, 255, 0.10) 100%);">
          </div>
          <div class="rounded-3xl w-80 h-80"
            style="background:linear-gradient(180deg, rgba(255, 255, 255, 0.00) 0%, rgba(255, 255, 255, 0.10) 100%);">
          </div>
          <div class="mt-20 rounded-3xl w-80 h-80"
            style="background:linear-gradient(180deg, rgba(255, 255, 255, 0.00) 0%, rgba(255, 255, 255, 0.10) 100%);">
          </div>
        </div>
        <p class="uppercase text-center font-bold font-heading text-sm text-tresto-50 mb-6">{{ __("Blog") }}</p>
        <h1
          class="rtl:leading-relaxed text-center text-white font-bold font-heading text-4xl lg:text-6xl max-w-md lg:max-w-4xl mx-auto pb-32 lg:pb-0">
          {{ __("Discover the latest news, stories & insights") }}</h1>
      </div>
      <div class="container px-4 mx-auto">
        <a class="bg-white border border-gray-100 hover:border-tresto-500 transition duration-200 shadow rounded-3xl transform -translate-y-1/2 flex flex-wrap"
          href="{{ route('post') }}">
          <div class="w-full lg:w-1/2 px-8 lg:px-16 py-8">
            <div class="flex flex-col justify-center items-start h-full">
              <div class="py-1 px-3 rounded-md border border-gray-100 mb-4 text-sm font-medium text-gray-700">
                Productivity</div>
              <h2 class="text-2xl lg:text-3xl font-bold font-heading mb-4 max-w-sm">How to Learn Anything Faster and
                Master It</h2>
              <div class="flex flex-wrap items-center gap-3">
                <p class="text-gray-500 text-sm">20 Jul 2023</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="4" height="4" viewbox="0 0 4 4" fill="none">
                  <circle cx="2" cy="2" r="2" fill="#B8B8B8"></circle>
                </svg>
                <p class="text-gray-500 text-sm">4 min read</p>
              </div>
            </div>
          </div>
          <div class="w-full lg:w-1/2 relative">
            <div class="relative" style="height: 396px;">
              <img
                class="absolute inset-0 w-full h-full object-cover lg:rounded-tl-3xl lg:rounded-tr-3xl rounded-br-3xl rounded-bl-3xl"
                src="solstice-assets/images/blog/picture-large.png" alt="">
            </div>
          </div>
        </a>
        <div class="relative h-16 -mt-48 lg:-mt-20 mb-16">
          <div class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-gray-200 h-px w-full"></div>
          <div
            class="absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 py-3 px-8 rounded-2xl bg-gray-50 border border-gray-200 text-lg lg:text-2xl font-bold font-heading whitespace-nowrap">
            {{ __("Latest articles") }}</div>
        </div>
        <div class="flex flex-wrap mb-8 -mx-4">
          <div class="w-full md:w-1/2 lg:w-1/3 p-4">
            <a href="#">
              <div
                class="bg-white border border-gray-100 hover:border-tresto-500 transition duration-200 rounded-2xl h-full">
                <div class="relative" style="height: 240px;">
                  <div class="absolute top-0 left-0 z-10">
                    <svg class="rounded-tl-2xl" xmlns="http://www.w3.org/2000/svg" width="159" height="156"
                      viewbox="0 0 159 156" fill="none">
                      <path
                        d="M-30 81.9324V155.361C-30 155.714 -29.7141 156 -29.3615 156H21.62C21.9724 156 22.2585 155.714 22.2585 155.361V96.299C22.2585 57.5087 60.5087 19.2585 99.299 19.2585H158.361C158.714 19.2585 159 18.9724 159 18.62V-32.3615C159 -32.7139 158.714 -33 158.361 -33H84.9324C21.4572 -33 -30 18.4572 -30 81.9324Z"
                        fill="#FFF2D6"></path>
                    </svg>
                  </div>
                  <div class="absolute bottom-0 right-0 z-10">
                    <svg xmlns="http://www.w3.org/2000/svg" width="150" height="158" viewbox="0 0 150 158"
                      fill="none">
                      <path
                        d="M189 74.0676V0.638514C189 0.286054 188.714 0 188.361 0H137.38C137.028 0 136.742 0.286054 136.742 0.638514V59.701C136.742 98.4913 98.4914 136.742 59.701 136.742H0.638514C0.286054 136.742 0 137.028 0 137.38V188.361C0 188.714 0.286054 189 0.638514 189H74.0676C137.543 189 189 137.543 189 74.0676Z"
                        fill="#FFF2D6"></path>
                    </svg>
                  </div>
                  <img class="absolute inset-0 w-full h-full object-cover rounded-t-2xl"
                    src="solstice-assets/images/blog/picture1.png" alt="">
                </div>
                <div class="p-6">
                  <div
                    class="py-1 px-2 rounded-md border border-gray-100 text-xs font-medium text-gray-700 mb-3 inline-block">
                    Tips</div>
                  <h2 class="font-bold font-heading mb-3">Make Your Phone Your Best Study Tool</h2>
                  <p class="text-gray-500 text-sm mb-9">How do we make our phone best study tool? Read on to find out
                    more.</p>
                  <div class="flex flex-wrap items-center gap-3">
                    <p class="text-gray-500 text-sm">17 Jul 2023</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="4" height="4" viewbox="0 0 4 4"
                      fill="none">
                      <circle cx="2" cy="2" r="2" fill="#B8B8B8"></circle>
                    </svg>
                    <p class="text-gray-500 text-sm">4 min read</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="w-full md:w-1/2 lg:w-1/3 p-4">
            <a href="#">
              <div
                class="bg-white border border-gray-100 hover:border-tresto-500 transition duration-200 rounded-2xl h-full">
                <div class="relative" style="height: 240px;">
                  <div class="absolute top-0 left-0 z-10">
                    <svg class="rounded-tl-2xl" xmlns="http://www.w3.org/2000/svg" width="159" height="156"
                      viewbox="0 0 159 156" fill="none">
                      <path
                        d="M-30 81.9324V155.361C-30 155.714 -29.7141 156 -29.3615 156H21.62C21.9724 156 22.2585 155.714 22.2585 155.361V96.299C22.2585 57.5087 60.5087 19.2585 99.299 19.2585H158.361C158.714 19.2585 159 18.9724 159 18.62V-32.3615C159 -32.7139 158.714 -33 158.361 -33H84.9324C21.4572 -33 -30 18.4572 -30 81.9324Z"
                        fill="#530031"></path>
                    </svg>
                  </div>
                  <div class="absolute bottom-0 right-0 z-10">
                    <svg xmlns="http://www.w3.org/2000/svg" width="150" height="158" viewbox="0 0 150 158"
                      fill="none">
                      <path
                        d="M189 74.0676V0.638514C189 0.286054 188.714 0 188.361 0H137.38C137.028 0 136.742 0.286054 136.742 0.638514V59.701C136.742 98.4913 98.4914 136.742 59.701 136.742H0.638514C0.286054 136.742 0 137.028 0 137.38V188.361C0 188.714 0.286054 189 0.638514 189H74.0676C137.543 189 189 137.543 189 74.0676Z"
                        fill="#530031"></path>
                    </svg>
                  </div>
                  <img class="absolute inset-0 w-full h-full object-cover rounded-t-2xl"
                    src="solstice-assets/images/blog/picture2.png" alt="">
                </div>
                <div class="p-6">
                  <div
                    class="py-1 px-2 rounded-md border border-gray-100 text-xs font-medium text-gray-700 mb-3 inline-block">
                    Wellbeing</div>
                  <h2 class="font-bold font-heading mb-3">How to Maintain Good Wellbeing While Studying</h2>
                  <p class="text-gray-500 text-sm mb-3">Here are some tips on how to maintain good wellbeing while
                    studying.</p>
                  <div class="flex flex-wrap items-center gap-3">
                    <p class="text-gray-500 text-sm">17 Jul 2023</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="4" height="4" viewbox="0 0 4 4"
                      fill="none">
                      <circle cx="2" cy="2" r="2" fill="#B8B8B8"></circle>
                    </svg>
                    <p class="text-gray-500 text-sm">4 min read</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="w-full md:w-1/2 lg:w-1/3 p-4">
            <a href="#">
              <div
                class="bg-white border border-gray-100 hover:border-tresto-500 transition duration-200 rounded-2xl h-full">
                <div class="relative" style="height: 240px;">
                  <div class="absolute top-0 left-0 z-10">
                    <svg class="rounded-tl-2xl" xmlns="http://www.w3.org/2000/svg" width="159" height="156"
                      viewbox="0 0 159 156" fill="none">
                      <path
                        d="M-30 81.9324V155.361C-30 155.714 -29.7141 156 -29.3615 156H21.62C21.9724 156 22.2585 155.714 22.2585 155.361V96.299C22.2585 57.5087 60.5087 19.2585 99.299 19.2585H158.361C158.714 19.2585 159 18.9724 159 18.62V-32.3615C159 -32.7139 158.714 -33 158.361 -33H84.9324C21.4572 -33 -30 18.4572 -30 81.9324Z"
                        fill="#FF7100"></path>
                    </svg>
                  </div>
                  <div class="absolute bottom-0 right-0 z-10">
                    <svg xmlns="http://www.w3.org/2000/svg" width="150" height="158" viewbox="0 0 150 158"
                      fill="none">
                      <path
                        d="M189 74.0676V0.638514C189 0.286054 188.714 0 188.361 0H137.38C137.028 0 136.742 0.286054 136.742 0.638514V59.701C136.742 98.4913 98.4914 136.742 59.701 136.742H0.638514C0.286054 136.742 0 137.028 0 137.38V188.361C0 188.714 0.286054 189 0.638514 189H74.0676C137.543 189 189 137.543 189 74.0676Z"
                        fill="#FF7100"></path>
                    </svg>
                  </div>
                  <img class="absolute inset-0 w-full h-full object-cover rounded-t-2xl"
                    src="solstice-assets/images/blog/picture3.png" alt="">
                </div>
                <div class="p-6">
                  <div
                    class="py-1 px-2 rounded-md border border-gray-100 text-xs font-medium text-gray-700 mb-3 inline-block">
                    Productivity</div>
                  <h2 class="font-bold font-heading mb-3">Atomic Habits: Tiny Changes, Remarkable Results</h2>
                  <p class="text-gray-500 text-sm mb-3">Here are some tips on how to maintain good wellbeing while
                    studying.</p>
                  <div class="flex flex-wrap items-center gap-3">
                    <p class="text-gray-500 text-sm">17 Jul 2023</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="4" height="4" viewbox="0 0 4 4"
                      fill="none">
                      <circle cx="2" cy="2" r="2" fill="#B8B8B8"></circle>
                    </svg>
                    <p class="text-gray-500 text-sm">4 min read</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="w-full md:w-1/2 lg:w-1/3 p-4">
            <a href="#">
              <div
                class="bg-white border border-gray-100 hover:border-tresto-500 transition duration-200 rounded-2xl h-full">
                <div class="relative" style="height: 240px;">
                  <div class="absolute top-0 left-0 z-10 text-white text-opacity-20">
                    <svg class="rounded-tl-2xl" xmlns="http://www.w3.org/2000/svg" width="159" height="156"
                      viewbox="0 0 159 156" fill="none">
                      <path
                        d="M-30 81.9324V155.361C-30 155.714 -29.7141 156 -29.3615 156H21.62C21.9724 156 22.2585 155.714 22.2585 155.361V96.299C22.2585 57.5087 60.5087 19.2585 99.299 19.2585H158.361C158.714 19.2585 159 18.9724 159 18.62V-32.3615C159 -32.7139 158.714 -33 158.361 -33H84.9324C21.4572 -33 -30 18.4572 -30 81.9324Z"
                        fill="currentColor"></path>
                    </svg>
                  </div>
                  <div class="absolute bottom-0 right-0 z-10 text-white text-opacity-20">
                    <svg xmlns="http://www.w3.org/2000/svg" width="153" height="155" viewbox="0 0 153 155"
                      fill="none">
                      <path
                        d="M189 74.0676V0.638514C189 0.286054 188.714 0 188.361 0H137.38C137.028 0 136.742 0.286054 136.742 0.638514V59.701C136.742 98.4913 98.4914 136.742 59.701 136.742H0.638514C0.286054 136.742 0 137.028 0 137.38V188.361C0 188.714 0.286054 189 0.638514 189H74.0676C137.543 189 189 137.543 189 74.0676Z"
                        fill="currentColor"></path>
                    </svg>
                  </div>
                  <div
                    class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-purple-900 w-full h-full rounded-t-2xl">
                    <div class="flex items-center justify-center gap-4 h-full">
                      <img src="solstice-assets/images/logos/solstice-logo-light.svg" alt="">
                      <span class="font-medium text-white text-opacity-50">+</span>
                      <img src="solstice-assets/images/logos/zoom-logo.png" alt="">
                    </div>
                  </div>
                </div>
                <div class="p-6">
                  <div
                    class="py-1 px-2 rounded-md border border-gray-100 text-xs font-medium text-gray-700 mb-3 inline-block">
                    Integration</div>
                  <h2 class="font-bold font-heading mb-3">Zoom Integration</h2>
                  <p class="text-gray-500 text-sm mb-3">New Zoom integration for hosting video meetings to learn and
                    work together effortlessly.</p>
                  <div class="flex flex-wrap items-center gap-3">
                    <p class="text-gray-500 text-sm">17 Jul 2023</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="4" height="4" viewbox="0 0 4 4"
                      fill="none">
                      <circle cx="2" cy="2" r="2" fill="#B8B8B8"></circle>
                    </svg>
                    <p class="text-gray-500 text-sm">4 min read</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="w-full md:w-1/2 lg:w-1/3 p-4">
            <a href="#">
              <div
                class="bg-white border border-gray-100 hover:border-tresto-500 transition duration-200 rounded-2xl h-full">
                <div class="relative" style="height: 240px;">
                  <div class="absolute top-0 left-0 z-10 text-white text-opacity-20">
                    <svg class="rounded-tl-2xl" xmlns="http://www.w3.org/2000/svg" width="159" height="156"
                      viewbox="0 0 159 156" fill="none">
                      <path
                        d="M-30 81.9324V155.361C-30 155.714 -29.7141 156 -29.3615 156H21.62C21.9724 156 22.2585 155.714 22.2585 155.361V96.299C22.2585 57.5087 60.5087 19.2585 99.299 19.2585H158.361C158.714 19.2585 159 18.9724 159 18.62V-32.3615C159 -32.7139 158.714 -33 158.361 -33H84.9324C21.4572 -33 -30 18.4572 -30 81.9324Z"
                        fill="currentColor"></path>
                    </svg>
                  </div>
                  <div class="absolute bottom-0 right-0 z-10 text-white text-opacity-20">
                    <svg xmlns="http://www.w3.org/2000/svg" width="153" height="155" viewbox="0 0 153 155"
                      fill="none">
                      <path
                        d="M189 74.0676V0.638514C189 0.286054 188.714 0 188.361 0H137.38C137.028 0 136.742 0.286054 136.742 0.638514V59.701C136.742 98.4913 98.4914 136.742 59.701 136.742H0.638514C0.286054 136.742 0 137.028 0 137.38V188.361C0 188.714 0.286054 189 0.638514 189H74.0676C137.543 189 189 137.543 189 74.0676Z"
                        fill="currentColor"></path>
                    </svg>
                  </div>
                  <div
                    class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-black w-full h-full rounded-t-2xl">
                    <div class="flex items-center justify-center gap-4 h-full">
                      <img src="solstice-assets/images/logos/solstice-logo-light.svg" alt="">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16"
                        fill="none">
                        <g clip-path="url(#clip0_185_6392)">
                          <path d="M12 4L4 12" stroke="#5A5A5A" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                          <path d="M4 4L12 12" stroke="#5A5A5A" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                        </g>
                        <defs>
                          <clippath id="clip0_185_6392">
                            <rect width="16" height="16" fill="white"></rect>
                          </clippath>
                        </defs>
                      </svg>
                      <img src="solstice-assets/images/logos/udemy-logo.png" alt="">
                    </div>
                  </div>
                </div>
                <div class="p-6">
                  <div
                    class="py-1 px-2 rounded-md border border-gray-100 text-xs font-medium text-gray-700 mb-3 inline-block">
                    Partnership</div>
                  <h2 class="font-bold font-heading mb-3">Udemy Partnership</h2>
                  <p class="text-gray-500 text-sm mb-3">We partnership with Udemy for those who loves to take course
                    with friends.</p>
                  <div class="flex flex-wrap items-center gap-3">
                    <p class="text-gray-500 text-sm">17 Jul 2023</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="4" height="4" viewbox="0 0 4 4"
                      fill="none">
                      <circle cx="2" cy="2" r="2" fill="#B8B8B8"></circle>
                    </svg>
                    <p class="text-gray-500 text-sm">4 min read</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="w-full md:w-1/2 lg:w-1/3 p-4">
            <a href="#">
              <div
                class="bg-white border border-gray-100 hover:border-tresto-500 transition duration-200 rounded-2xl h-full">
                <div class="relative" style="height: 240px;">
                  <div class="absolute top-0 left-0 z-10">
                    <svg class="rounded-tl-2xl" xmlns="http://www.w3.org/2000/svg" width="159" height="156"
                      viewbox="0 0 159 156" fill="none">
                      <path
                        d="M-30 81.9324V155.361C-30 155.714 -29.7141 156 -29.3615 156H21.62C21.9724 156 22.2585 155.714 22.2585 155.361V96.299C22.2585 57.5087 60.5087 19.2585 99.299 19.2585H158.361C158.714 19.2585 159 18.9724 159 18.62V-32.3615C159 -32.7139 158.714 -33 158.361 -33H84.9324C21.4572 -33 -30 18.4572 -30 81.9324Z"
                        fill="#FFF2D6"></path>
                    </svg>
                  </div>
                  <div class="absolute bottom-0 right-0 z-10">
                    <svg xmlns="http://www.w3.org/2000/svg" width="150" height="158" viewbox="0 0 150 158"
                      fill="none">
                      <path
                        d="M189 74.0676V0.638514C189 0.286054 188.714 0 188.361 0H137.38C137.028 0 136.742 0.286054 136.742 0.638514V59.701C136.742 98.4913 98.4914 136.742 59.701 136.742H0.638514C0.286054 136.742 0 137.028 0 137.38V188.361C0 188.714 0.286054 189 0.638514 189H74.0676C137.543 189 189 137.543 189 74.0676Z"
                        fill="#FFF2D6"></path>
                    </svg>
                  </div>
                  <img class="absolute inset-0 w-full h-full object-cover rounded-t-2xl"
                    src="solstice-assets/images/blog/picture4.png" alt="">
                </div>
                <div class="p-6">
                  <div
                    class="py-1 px-2 rounded-md border border-gray-100 text-xs font-medium text-gray-700 mb-3 inline-block">
                    Productivity</div>
                  <h2 class="font-bold font-heading mb-3">The Power of Collaborative Learning</h2>
                  <p class="text-gray-500 text-sm mb-3">Read on to find out the power of learning together.</p>
                  <div class="flex flex-wrap items-center gap-3">
                    <p class="text-gray-500 text-sm">17 Jul 2023</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="4" height="4" viewbox="0 0 4 4"
                      fill="none">
                      <circle cx="2" cy="2" r="2" fill="#B8B8B8"></circle>
                    </svg>
                    <p class="text-gray-500 text-sm">4 min read</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="hidden sm:flex flex-wrap items-center justify-between gap-4 pb-32">
          <a class="inline-block py-3 px-4 rounded-full bg-white border border-gray-200 shadow text-sm font-semibold hover:bg-gray-50 focus:ring focus:ring-tresto-200 transition duration-200"
            href="#">{{ __("Prev") }}</a>
          <div class="flex items-center flex-wrap gap-1"><a
              class="w-8 h-8 flex items-center justify-center rounded-lg text-sm text-gray-500 hover:bg-gray-100 hover: transition duration-200"
              href="#">1</a><a class="w-8 h-8 flex items-center justify-center rounded-lg text-sm bg-gray-100 "
              href="#">2</a><a
              class="w-8 h-8 flex items-center justify-center rounded-lg text-sm text-gray-500 hover:bg-gray-100 hover: transition duration-200"
              href="#">3</a><a
              class="w-8 h-8 flex items-center justify-center rounded-lg text-sm text-gray-500 hover:bg-gray-100 hover: transition duration-200"
              href="#">...</a><a
              class="w-8 h-8 flex items-center justify-center rounded-lg text-sm text-gray-500 hover:bg-gray-100 hover: transition duration-200"
              href="#">10</a></div>
          <a class="inline-block py-3 px-4 rounded-full bg-white border border-gray-200 shadow text-sm font-semibold hover:bg-gray-50 focus:ring focus:ring-tresto-200 transition duration-200"
            href="#">{{ __("Next") }}</a>
        </div>
        <div class="sm:hidden pb-32">
          <div class="flex items-center justify-center flex-wrap gap-1 mb-8"><a
              class="w-8 h-8 flex items-center justify-center rounded-lg text-sm text-gray-500 hover:bg-gray-100 hover: transition duration-200"
              href="#">1</a><a class="w-8 h-8 flex items-center justify-center rounded-lg text-sm bg-gray-100 "
              href="#">2</a><a
              class="w-8 h-8 flex items-center justify-center rounded-lg text-sm text-gray-500 hover:bg-gray-100 hover: transition duration-200"
              href="#">3</a><a
              class="w-8 h-8 flex items-center justify-center rounded-lg text-sm text-gray-500 hover:bg-gray-100 hover: transition duration-200"
              href="#">...</a><a
              class="w-8 h-8 flex items-center justify-center rounded-lg text-sm text-gray-500 hover:bg-gray-100 hover: transition duration-200"
              href="#">10</a></div>
          <div class="flex flex-wrap items-center justify-center gap-4"><a
              class="inline-block py-3 px-4 rounded-full bg-white border border-gray-200 shadow text-sm font-semibold hover:bg-gray-50 focus:ring focus:ring-tresto-200 transition duration-200"
              href="#">{{ __("Prev") }}</a><a
              class="inline-block py-3 px-4 rounded-full bg-white border border-gray-200 shadow text-sm font-semibold hover:bg-gray-50 focus:ring focus:ring-tresto-200 transition duration-200"
              href="#">{{ __("Next") }}</a></div>
        </div>
      </div>
    </section>

    <section class="py-12 bg-tresto-50">
      <div class="container mx-auto px-4">
        <div class="py-28 relative">
          <div class="hidden sm:block absolute top-6 left-0 bg-tresto-600 rounded-xl px-6 pt-4">
            <img class="h-16 sm:h-20 md:h-auto" src="solstice-assets/images/cta/men-picture1.png" alt="">
          </div>
          <div class="absolute top-0 right-0 bg-purple-900 rounded-xl px-6 pt-4">
            <img class="h-16 sm:h-24 md:h-auto" src="solstice-assets/images/cta/woman-picture1.png" alt="">
          </div>
          <div class="absolute bottom-0 left-0 sm:left-24 bg-tresto-300 rounded-xl px-6 pt-4">
            <img class="h-16 sm:h-24 md:h-auto" src="solstice-assets/images/cta/woman-picture2.png" alt="">
          </div>
          <div class="hidden sm:block absolute bottom-0 right-0 sm:right-24 bg-tresto-100 rounded-xl px-6 pt-4">
            <img class="h-16 sm:h-20 md:h-auto" src="solstice-assets/images/cta/men-picture2.png" alt="">
          </div>
          <div class="relative z-10">
            {{-- <div class="flex justify-center mb-6">
              <svg xmlns="http://www.w3.org/2000/svg" width="68" height="34" viewbox="0 0 68 34"
                fill="none">
                <path
                  d="M2 34C1.99977 29.7976 2.8273 25.6364 4.43533 21.7539C6.04336 17.8713 8.40039 14.3436 11.3718 11.3721C14.3433 8.40056 17.8709 6.04346 21.7533 4.43539C25.6358 2.82732 29.7969 1.99977 33.9991 2C51.6726 2 66 16.3261 66 34"
                  stroke="#530031" stroke-width="4" stroke-miterlimit="10"></path>
                <path
                  d="M9.22571 34.0001C9.22571 27.4085 11.8358 21.0869 16.4819 16.4259C21.128 11.765 27.4294 9.14648 33.9999 9.14648C40.5704 9.14648 46.8718 11.765 51.5179 16.4259C56.164 21.0869 58.7741 27.4085 58.7741 34.0001"
                  stroke="#FF7100" stroke-width="4" stroke-miterlimit="10"></path>
                <path
                  d="M16.1339 34C16.1339 29.2617 18.0162 24.7174 21.3667 21.3669C24.7173 18.0163 29.2616 16.134 33.9999 16.134C38.7383 16.134 43.2826 18.0163 46.6331 21.3669C49.9836 24.7174 51.8659 29.2617 51.8659 34"
                  stroke="#FFC96D" stroke-width="4" stroke-miterlimit="10"></path>
              </svg>
            </div> --}}
            <h1 class="text-4xl lg:text-5xl mb-10 font-bold font-heading text-center max-w-lg lg:max-w-3xl mx-auto">
              {{ __("Rejoignez-nous et améliorer l'efficacité de votre restaurant.")}}</h1>
            <div class="flex justify-center"><a
                class="w-full sm:w-auto text-center py-5 px-8 rounded-full h-16 inline-flex items-center justify-center bg-tresto-500 border border-tresto-600 shadow font-bold font-heading text-white hover:bg-tresto-600 focus:ring focus:ring-tresto-200 transition duration-200"
                href="#">{{ __("Crée un compte gratuitement !") }}</a></div>
          </div>
        </div>
      </div>
    </section>

    <x-front.footer />
  </div>
</x-layouts.front>
