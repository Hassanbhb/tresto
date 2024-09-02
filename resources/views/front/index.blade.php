<x-layouts.front>
  <div class="">
    <section class="overflow-hidden bg-tresto-600 pb-24">
      <div class="border-b border-tresto-500">
        <div class="container px-4 mx-auto">
          <div class="flex items-center justify-between py-6">
            <a href="#">
              <img src="images/logo-04.png" alt="" class="h-8">
            </a>
            <ul class="hidden lg:flex items-center gap-8">
              <li>
                <a class="flex items-center flex-wrap gap-2 group" href="#">
                  <span
                    class="text-white group-hover:text-opacity-70 transition duration-200">{{ __('Home') }}</span>
                  {{-- <div class="text-white group-hover:text-opacity-70 transition duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16"
                      fill="none">
                      <path d="M13 5.5L8 10.5L3 5.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                    </svg>
                  </div> --}}
                </a>
              </li>
              <li class="text-white hover:text-opacity-70 transition duration-200"><a
                  href="#">{{ __('Features') }}</a></li>
              <li class="text-white hover:text-opacity-70 transition duration-200"><a
                  href="#">{{ __('Pricing') }}</a></li>
              <li>
                <a class="flex items-center flex-wrap gap-2 group" href="#">
                  <span
                    class="text-white group-hover:text-opacity-70 transition duration-200">{{ __('Contact') }}</span>
                  {{-- <div class="text-white group-hover:text-opacity-70 transition duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16"
                      fill="none">
                      <path d="M13 5.5L8 10.5L3 5.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                    </svg>
                  </div> --}}
                </a>
              </li>
              <li class="text-white hover:text-opacity-70 transition duration-200"><a
                  href="#">{{ __('Blog') }}</a></li>
            </ul>
            <div class="flex gap-3 items-center">
              <div x-data="{ open: false }" class="relative inline-block text-left">
                <div>
                  <button @click="open = !open" type="button"
                    class="inline-flex justify-center w-full px-4 py-2 bg-tresto-600 text-sm font-medium text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-tresto-200"
                    id="options-menu" aria-haspopup="true" aria-expanded="true">
                    <span>{{ session()->get('locale') }}</span>
                    <svg class="mr-2 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                      fill="currentColor">
                      <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                    </svg>
                  </button>
                </div>
                <div x-cloak x-show="open" x-transition:enter="transition ease-out duration-100"
                  x-transition:enter-start="transform opacity-0 scale-95"
                  x-transition:enter-end="transform opacity-100 scale-100"
                  x-transition:leave="transition ease-in duration-75"
                  x-transition:leave-start="transform opacity-100 scale-100"
                  x-transition:leave-end="transform opacity-0 scale-95"
                  class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                  role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                  <div class="py-1" role="none">
                    <a href="{{ route('change.language', 'ar') }}"
                      class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                      role="menuitem">{{ __('Arabic') }}</a>
                    {{-- <a href="{{ route('change.language', 'en') }}"
                      class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                      role="menuitem">{{ __('English') }}</a> --}}
                    <a href="{{ route('change.language', 'fr') }}"
                      class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                      role="menuitem">{{ __('French') }}</a>
                  </div>
                </div>
              </div>
              <a class="hidden lg:block py-3 px-5 rounded-full bg-tresto-900 border border-tresto-700 shadow text-sm font-semibold text-white hover:bg-tresto-800 focus:ring focus:ring-tresto-800 transition duration-200"
                href="/register">{{ __('Get Started') }}</a>
            </div>
            <div class="lg:hidden">
              <a href="#">
                <svg class="navbar-burger text-tresto-500" width="51" height="51" viewbox="0 0 56 56"
                  fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect width="56" height="56" rx="28" fill="currentColor"></rect>
                  <path d="M37 32H19M37 24H19" stroke="white" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round"></path>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>

      {{-- mobile --}}
      <div class="hidden navbar-menu fixed top-0 left-0 bottom-0 w-4/6 sm:max-w-xs z-50">
        <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-80"></div>
        <nav class="relative z-10 px-9 py-8 h-full overflow-y-auto bg-white flex flex-col justify-between">
          <div class="flex items-center justify-between">
            <a href="#">
              <img class="w-4/5" src="images/logo-01.png" alt="">
            </a>
            <a class="navbar-burger" href="#">
              <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6 18L18 6M6 6L18 18" stroke="#111827" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round"></path>
              </svg>
            </a>
          </div>
          <ul class="flex flex-col gap-12 py-12">
            <li>
              <a class="flex items-center flex-wrap gap-2 group" href="#">
                <span class="group-hover:text-opacity-70 transition duration-200">{{ __('Home') }}</span>
                {{-- <div class="group-hover:text-opacity-70 transition duration-200">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16"
                    fill="none">
                    <path d="M13 5.5L8 10.5L3 5.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                      stroke-linejoin="round"></path>
                  </svg>
                </div> --}}
              </a>
            </li>
            <li class="hover:text-opacity-70 transition duration-200"><a href="#">{{ __('Features') }}</a></li>
            <li class="hover:text-opacity-70 transition duration-200"><a href="#">{{ __('Pricing') }}</a></li>
            <li>
              <a class="flex items-center flex-wrap gap-2 group" href="#">
                <span class="group-hover:text-opacity-70 transition duration-200">{{ __('Contact') }}</span>
                {{-- <div class="group-hover:text-opacity-70 transition duration-200">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16"
                  fill="none">
                  <path d="M13 5.5L8 10.5L3 5.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                  stroke-linejoin="round"></path>
                </svg>
              </div> --}}
              </a>
            </li>
            <li class="hover:text-opacity-70 transition duration-200"><a href="#">{{ __('Blog') }}</a></li>

          </ul>
          <div>

            <a class="block text-center py-3 px-5 rounded-full bg-white border border-gray-200 shadow text-sm font-semibold hover:bg-gray-50 focus:ring focus:ring-tresto-200 transition duration-200"
              href="/register">{{ __('Get Started') }}</a>
          </div>
        </nav>
      </div>

      <div class="container px-4 mx-auto relative">
        <div class="relative z-20">
          <h1 class="text-center text-white text-5xl lg:text-7xl font-bold font-heading mb-6 mt-14 max-w-4xl mx-auto">
            <span>{{ __('Créez votre menu en quelques clics avec') }} <span class="text-secondary">Tresto</span>
              {{ __('Today!') }}</span>
            {{-- <span></span> --}}
          </h1>
          <p class="text-center text-white text-lg mb-10 max-w-lg mx-auto">
            {{ __('Créez facilement votre menu en ligne, générez des QR codes, et recevez des commandes directement via votre site web ou WhatsApp.') }}
          </p>
          <div class="flex justify-center lg:pb-56"><a
              class="w-full sm:w-auto text-center h-16 inline-flex items-center justify-center py-4 px-6 rounded-full bg-secondary border border-tresto-600 hover:border-secondary shadow font-bold font-heading text-black hover:text-white hover:bg-tresto-600 focus:ring focus:ring-tresto-200 transition duration-200"
              href="/register">{{ __('Get Started For FREE Now!') }}</a></div>
          <div class="hidden lg:block absolute bottom-9 left-0 z-10">
            <div class="bg-tresto-50 rounded-3xl pt-6 px-12 relative">
              <img src="solstice-assets/images/hero/woman-picture.png" alt="">
              <div class="absolute left-4 bottom-4">
                <div class="bg-white p-2 rounded-md text-sm font-semibold">Sophie</div>
              </div>
            </div>
          </div>
        </div>
        {{-- <div class="hidden xl:block absolute bottom-0 left-0">
          <svg xmlns="http://www.w3.org/2000/svg" width="608" height="240" viewbox="0 0 608 240"
            fill="none">
            <path
              d="M607 0.999973L607 85.222L580.193 85.222C537.767 85.2199 496.449 100.198 462.201 127.976C428.139 155.602 402.822 194.465 389.84 239L1 239L0.99999 1L607 0.999973Z"
              fill="#530031" stroke="url(#paint0_linear_203_8871)" stroke-width="2"></path>
            <defs>
              <lineargradient id="paint0_linear_203_8871" x1="356" y1="120" x2="438.019"
                y2="272.086" gradientunits="userSpaceOnUse">
                <stop stop-color="#FF7100" stop-opacity="0">
                  <stop offset="1" stop-color="#FF7100"></stop>
                </stop>
              </lineargradient>
            </defs>
          </svg>
        </div> --}}
        {{-- <div class="hidden xl:block absolute bottom-0 right-0">
          <svg xmlns="http://www.w3.org/2000/svg" width="608" height="240" viewbox="0 0 608 240"
            fill="none">
            <path
              d="M1 239L0.999996 154.777L27.8065 154.777C70.233 154.779 111.551 139.802 145.799 112.024C179.861 84.3981 205.177 45.5346 218.16 0.99999L607 0.999973L607 239L1 239Z"
              fill="#530031" stroke="url(#paint0_linear_203_8872)" stroke-width="2"></path>
            <defs>
              <lineargradient id="paint0_linear_203_8872" x1="139.5" y1="50.4" x2="185.195"
                y2="150.429" gradientunits="userSpaceOnUse">
                <stop stop-color="#FF7100">
                  <stop offset="1" stop-color="#FF7100" stop-opacity="0"></stop>
                </stop>
              </lineargradient>
            </defs>
          </svg>
        </div> --}}
        <div class="hidden lg:block absolute bottom-48 right-0">
          <div class="bg-tresto-500 rounded-xl pt-4 px-6 relative">
            <div class="absolute bottom-2 left-2">
              <div class="bg-white p-1 rounded-md flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16"
                  fill="none">
                  <mask id="path-1-inside-1_587_1759" fill="white">
                    <path
                      d="M11.9999 11.1666C11.8933 11.1666 11.7933 11.1333 11.6999 11.0666C11.4799 10.9 11.4333 10.5866 11.5999 10.3666C12.6466 8.97331 12.6466 7.02665 11.5999 5.63331C11.4333 5.41331 11.4799 5.09998 11.6999 4.93331C11.9199 4.76665 12.2333 4.81331 12.3999 5.03331C13.7066 6.77998 13.7066 9.21998 12.3999 10.9666C12.2999 11.1 12.1533 11.1666 11.9999 11.1666Z">
                    </path>
                  </mask>
                  <path
                    d="M11.9999 11.1666C11.8933 11.1666 11.7933 11.1333 11.6999 11.0666C11.4799 10.9 11.4333 10.5866 11.5999 10.3666C12.6466 8.97331 12.6466 7.02665 11.5999 5.63331C11.4333 5.41331 11.4799 5.09998 11.6999 4.93331C11.9199 4.76665 12.2333 4.81331 12.3999 5.03331C13.7066 6.77998 13.7066 9.21998 12.3999 10.9666C12.2999 11.1 12.1533 11.1666 11.9999 11.1666Z"
                    fill="#FF7100"></path>
                  <path
                    d="M11.6999 11.0666L11.0961 11.8637L11.1073 11.8722L11.1187 11.8804L11.6999 11.0666ZM11.5999 10.3666L12.397 10.9705L12.3995 10.9673L11.5999 10.3666ZM11.5999 5.63331L12.3995 5.03269L12.397 5.02945L11.5999 5.63331ZM12.3999 5.03331L13.2007 4.43428L13.197 4.42945L12.3999 5.03331ZM12.3999 10.9666L13.1999 11.5666L13.2007 11.5657L12.3999 10.9666ZM11.9999 10.1666C12.0528 10.1666 12.108 10.1752 12.1612 10.193C12.2137 10.2105 12.2538 10.2334 12.2812 10.2529L11.1187 11.8804C11.3682 12.0586 11.6689 12.1666 11.9999 12.1666V10.1666ZM12.3038 10.2696C12.514 10.4288 12.5714 10.7403 12.397 10.9705L10.8028 9.76279C10.2951 10.433 10.4459 11.3712 11.0961 11.8637L12.3038 10.2696ZM12.3995 10.9673C13.7134 9.21812 13.7134 6.78184 12.3995 5.0327L10.8004 6.23392C11.5798 7.27145 11.5798 8.72851 10.8004 9.76603L12.3995 10.9673ZM12.397 5.02945C12.5714 5.25967 12.514 5.57119 12.3038 5.7304L11.0961 4.13622C10.4459 4.62877 10.2951 5.56695 10.8028 6.23717L12.397 5.02945ZM12.3038 5.7304C12.0736 5.90481 11.7621 5.84733 11.6028 5.63717L13.197 4.42945C12.7045 3.77929 11.7663 3.62848 11.0961 4.13622L12.3038 5.7304ZM11.5992 5.63233C12.6402 7.02384 12.6402 8.97611 11.5992 10.3676L13.2007 11.5657C14.773 9.46384 14.773 6.53611 13.2007 4.43429L11.5992 5.63233ZM11.5999 10.3666C11.6975 10.2366 11.8533 10.1666 11.9999 10.1666V12.1666C12.4533 12.1666 12.9024 11.9634 13.1999 11.5666L11.5999 10.3666Z"
                    fill="#FF7100" mask="url(#path-1-inside-1_587_1759)"></path>
                  <path
                    d="M13.2199 12.8334C13.1132 12.8334 13.0132 12.8 12.9199 12.7334C12.6999 12.5667 12.6532 12.2534 12.8199 12.0334C14.5999 9.66002 14.5999 6.34002 12.8199 3.96669C12.6532 3.74669 12.6999 3.43335 12.9199 3.26669C13.1399 3.10002 13.4532 3.14669 13.6199 3.36669C15.6666 6.09335 15.6666 9.90669 13.6199 12.6334C13.5266 12.7667 13.3732 12.8334 13.2199 12.8334Z"
                    fill="#FF7100"></path>
                  <path
                    d="M9.34659 2.52002C8.59992 2.10669 7.64659 2.21335 6.67325 2.82002L4.72659 4.04002C4.59325 4.12002 4.43992 4.16669 4.28659 4.16669H3.66659H3.33325C1.71992 4.16669 0.833252 5.05335 0.833252 6.66669V9.33335C0.833252 10.9467 1.71992 11.8334 3.33325 11.8334H3.66659H4.28659C4.43992 11.8334 4.59325 11.88 4.72659 11.96L6.67325 13.18C7.25992 13.5467 7.83325 13.7267 8.36659 13.7267C8.71325 13.7267 9.04659 13.6467 9.34659 13.48C10.0866 13.0667 10.4999 12.2067 10.4999 11.06V4.94002C10.4999 3.79335 10.0866 2.93335 9.34659 2.52002Z"
                    fill="#FF7100"></path>
                </svg>
                <span class="text-sm font-semibold">Armand</span>
              </div>
            </div>
            <img src="solstice-assets/images/hero/man-picture.png" alt="">
          </div>
        </div>
      </div>
    </section>

    <section class="py-24">
      <div class="container mx-auto px-4">
        <p class="text-center text-tresto-500 text-sm font-bold font-heading mb-6">{{ __('HOW IT WORKS') }}</p>
        <h1 class="text-center text-3xl lg:text-5xl font-bold font-heading mb-24 max-w-sm lg:max-w-xl mx-auto">
          {{ __('What steps do I need to take to start?') }}</h1>
        <div class="flex flex-wrap items-center -mx-4">
          <div class="w-full lg:w-2/3 p-4">
            <img class="w-full" src="solstice-assets/images/how-it-works/picture-full-primary.png" alt="">
          </div>
          <div class="w-full lg:w-1/3 p-4">
            <a href="#">
              <div class="py-6 pr-10 mb-3 group hover:bg-tresto-50 rounded-2xl transition duration-200">
                <div class="border-l-4 border-transparent group-hover:border-tresto-500 pl-10 transition duration-200">
                  <h2 class="text-lg font-bold font-heading mb-2">{{ __('Step 1') }}</h2>
                  <p class="text-gray-600">
                    {{ __('Create an account, enter your name, email, a secure password, and hit Create Account.') }}
                  </p>
                </div>
              </div>
            </a>
            <a href="#">
              <div class="bg-tresto-50 rounded-2xl py-6 pr-10 mb-3">
                <div class="border-l-4 border-tresto-500 pl-10">
                  <h2 class="text-lg font-bold font-heading mb-2">{{ __('Step 2') }}</h2>
                  <p class="text-gray-600">{{ __('choose a plan that fits your needs') }}</p>
                </div>
              </div>
            </a>
            <a href="#">
              <div class="py-6 pr-10 group hover:bg-tresto-50 rounded-2xl transition duration-200">
                <div class="border-l-4 border-transparent group-hover:border-tresto-500 pl-10 transition duration-200">
                  <h2 class="text-lg font-bold font-heading mb-2">{{ __('Step 3') }}</h2>
                  <p class="text-gray-600">{{ __('start creating your online menu.') }}</p>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="py-24 bg-tresto-50">
      <div class="container mx-auto px-4">
        <h1 class="text-center text-5xl lg:text-6xl font-bold font-heading mb-6">{{ __('Pricing') }}</h1>
        <p class="text-gray-600 text-lg text-center mb-24 max-w-lg mx-auto">
          {{ __('Simple pricing that fits Restaurants of all sizes') }}</p>
        <div class="overflow-x-auto mb-24">
          <div class="flex min-w-max">
            <div class="w-96 lg:w-1/3 p-4">
              {{-- <div class="pb-10 border-b border-gray-200">
                <div class="flex flex-wrap items-center gap-4 mb-4">
                  <p class="text-lg font-bold font-heading">Monthly</p>
                  <div class="p-1 w-14 h-8 bg-tresto-500 rounded-full">
                    <div class="relative">
                      <input class="custom-switch-1 opacity-0 absolute z-10 h-8 w-14 top-0 left-0" type="checkbox">
                      <div class="absolute left-0 transform w-6 h-6 bg-white rounded-full"></div>
                    </div>
                  </div>
                  <p class="text-lg font-bold font-heading">Annually</p>
                </div>
                <div class="inline-block px-4 py-2 rounded-full bg-tresto-100 text-tresto-700">SAVE 15% with annual
                  billing</div>
              </div> --}}
              <h2 class="mt-10 mb-24 text-lg font-bold font-heading">{{ __('What you’ll get') }}</h2>
              <ul class="flex flex-col gap-9">
                <li class="text-lg font-medium">{{ __('Showcase your dishes') }}</li>
                <li class="text-lg font-medium">{{ __('Mises à jour en temps réel') }}</li>
                <li class="text-lg font-medium">{{ __('Génération de QR Codes') }}</li>
                <li class="text-lg font-medium">{{ __('Gestion des commandes simplifiée') }}</li>
                <li class="text-lg font-medium">{{ __('Customers can start placing orders immediately') }}</li>
                <li class="text-lg font-medium">{{ __('Grow your business with minimal effort') }}</li>
                {{-- <li class="text-lg font-medium">Invite up to 100 people to learn together</li> --}}
              </ul>
            </div>
            <div class="w-96 lg:w-1/3 p-4">
              <div class="border border-gray-200 bg-white rounded-3xl px-8 pb-8 pt-10 h-full">
                <h2 class="text-center text-xl font-bold font-heading mb-4">Starter</h2>
                <div class="flex items-end justify-center gap-3 mb-8">
                  <h2 class="text-5xl font-bold font-heading">799 {{ __('Dhs') }}</h2>
                  <p class="text-gray-400 text-lg font-medium pb-2">/ 12 {{ __('months')}}</p>
                </div>
                <a class="h-14 inline-flex items-center justify-center w-full text-center py-4 px-6 rounded-full border border-gray-200 shadow text-sm font-semibold hover:bg-gray-50 focus:ring focus:ring-tresto-200 transition duration-200 mb-8"
                  href="#">{{ __('Create a FREE Account') }}</a>
                <div class="bg-tresto-50 rounded-3xl p-6 flex flex-col items-center gap-8">
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewbox="0 0 32 32"
                    fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M2.66666 16C2.66666 8.63592 8.63589 2.66669 16 2.66669C23.3641 2.66669 29.3333 8.63592 29.3333 16C29.3333 23.3641 23.3641 29.3334 16 29.3334C8.63589 29.3334 2.66666 23.3641 2.66666 16ZM20.9368 13.5193C21.0188 13.41 21.0782 13.2854 21.1114 13.1528C21.1446 13.0202 21.1509 12.8823 21.1301 12.7472C21.1092 12.6121 21.0615 12.4825 20.9899 12.3661C20.9182 12.2497 20.824 12.1488 20.7128 12.0693C20.6016 11.9898 20.4756 11.9333 20.3423 11.9032C20.209 11.8731 20.0709 11.87 19.9364 11.894C19.8018 11.918 19.6734 11.9686 19.5587 12.043C19.444 12.1173 19.3453 12.2138 19.2684 12.3269L14.8431 18.5217L12.6222 16.3009C12.4278 16.1197 12.1706 16.0211 11.9049 16.0258C11.6392 16.0305 11.3857 16.1381 11.1978 16.326C11.0099 16.5139 10.9022 16.7674 10.8975 17.0332C10.8928 17.2989 10.9915 17.556 11.1726 17.7504L14.2496 20.8274C14.3549 20.9326 14.4818 21.0136 14.6215 21.0648C14.7613 21.1161 14.9105 21.1363 15.0588 21.124C15.2072 21.1118 15.351 21.0674 15.4805 20.994C15.61 20.9206 15.7219 20.8199 15.8085 20.6988L20.9368 13.5193Z"
                      fill="#FF7100"></path>
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewbox="0 0 32 32"
                    fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M2.66666 16C2.66666 8.63592 8.63589 2.66669 16 2.66669C23.3641 2.66669 29.3333 8.63592 29.3333 16C29.3333 23.3641 23.3641 29.3334 16 29.3334C8.63589 29.3334 2.66666 23.3641 2.66666 16ZM20.9368 13.5193C21.0188 13.41 21.0782 13.2854 21.1114 13.1528C21.1446 13.0202 21.1509 12.8823 21.1301 12.7472C21.1092 12.6121 21.0615 12.4825 20.9899 12.3661C20.9182 12.2497 20.824 12.1488 20.7128 12.0693C20.6016 11.9898 20.4756 11.9333 20.3423 11.9032C20.209 11.8731 20.0709 11.87 19.9364 11.894C19.8018 11.918 19.6734 11.9686 19.5587 12.043C19.444 12.1173 19.3453 12.2138 19.2684 12.3269L14.8431 18.5217L12.6222 16.3009C12.4278 16.1197 12.1706 16.0211 11.9049 16.0258C11.6392 16.0305 11.3857 16.1381 11.1978 16.326C11.0099 16.5139 10.9022 16.7674 10.8975 17.0332C10.8928 17.2989 10.9915 17.556 11.1726 17.7504L14.2496 20.8274C14.3549 20.9326 14.4818 21.0136 14.6215 21.0648C14.7613 21.1161 14.9105 21.1363 15.0588 21.124C15.2072 21.1118 15.351 21.0674 15.4805 20.994C15.61 20.9206 15.7219 20.8199 15.8085 20.6988L20.9368 13.5193Z"
                      fill="#FF7100"></path>
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewbox="0 0 32 32"
                    fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M2.66666 16C2.66666 8.63589 8.63589 2.66666 16 2.66666C23.3641 2.66666 29.3333 8.63589 29.3333 16C29.3333 23.3641 23.3641 29.3333 16 29.3333C8.63589 29.3333 2.66666 23.3641 2.66666 16ZM20.9368 13.5193C21.0188 13.41 21.0782 13.2853 21.1114 13.1527C21.1446 13.0201 21.1509 12.8822 21.1301 12.7471C21.1092 12.612 21.0615 12.4825 20.9899 12.3661C20.9182 12.2497 20.824 12.1487 20.7128 12.0693C20.6016 11.9898 20.4756 11.9333 20.3423 11.9032C20.209 11.8731 20.0709 11.87 19.9364 11.894C19.8018 11.918 19.6734 11.9686 19.5587 12.0429C19.444 12.1173 19.3453 12.2138 19.2684 12.3268L14.8431 18.5217L12.6222 16.3008C12.4278 16.1197 12.1706 16.021 11.9049 16.0257C11.6392 16.0304 11.3857 16.1381 11.1978 16.326C11.0099 16.5139 10.9022 16.7674 10.8975 17.0331C10.8928 17.2988 10.9915 17.556 11.1726 17.7504L14.2496 20.8273C14.3549 20.9325 14.4818 21.0136 14.6215 21.0648C14.7613 21.116 14.9105 21.1362 15.0588 21.124C15.2072 21.1118 15.351 21.0674 15.4805 20.994C15.61 20.9205 15.7219 20.8198 15.8085 20.6988L20.9368 13.5193Z"
                      fill="#FFE0A5"></path>
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewbox="0 0 32 32"
                    fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M2.66666 16C2.66666 8.63589 8.63589 2.66666 16 2.66666C23.3641 2.66666 29.3333 8.63589 29.3333 16C29.3333 23.3641 23.3641 29.3333 16 29.3333C8.63589 29.3333 2.66666 23.3641 2.66666 16ZM20.9368 13.5193C21.0188 13.41 21.0782 13.2853 21.1114 13.1527C21.1446 13.0201 21.1509 12.8822 21.1301 12.7471C21.1092 12.612 21.0615 12.4825 20.9899 12.3661C20.9182 12.2497 20.824 12.1487 20.7128 12.0693C20.6016 11.9898 20.4756 11.9333 20.3423 11.9032C20.209 11.8731 20.0709 11.87 19.9364 11.894C19.8018 11.918 19.6734 11.9686 19.5587 12.0429C19.444 12.1173 19.3453 12.2138 19.2684 12.3268L14.8431 18.5217L12.6222 16.3008C12.4278 16.1197 12.1706 16.021 11.9049 16.0257C11.6392 16.0304 11.3857 16.1381 11.1978 16.326C11.0099 16.5139 10.9022 16.7674 10.8975 17.0331C10.8928 17.2988 10.9915 17.556 11.1726 17.7504L14.2496 20.8273C14.3549 20.9325 14.4818 21.0136 14.6215 21.0648C14.7613 21.116 14.9105 21.1362 15.0588 21.124C15.2072 21.1118 15.351 21.0674 15.4805 20.994C15.61 20.9205 15.7219 20.8198 15.8085 20.6988L20.9368 13.5193Z"
                      fill="#FFE0A5"></path>
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewbox="0 0 32 32"
                    fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M2.66666 16C2.66666 8.63589 8.63589 2.66666 16 2.66666C23.3641 2.66666 29.3333 8.63589 29.3333 16C29.3333 23.3641 23.3641 29.3333 16 29.3333C8.63589 29.3333 2.66666 23.3641 2.66666 16ZM20.9368 13.5193C21.0188 13.41 21.0782 13.2853 21.1114 13.1527C21.1446 13.0201 21.1509 12.8822 21.1301 12.7471C21.1092 12.612 21.0615 12.4825 20.9899 12.3661C20.9182 12.2497 20.824 12.1487 20.7128 12.0693C20.6016 11.9898 20.4756 11.9333 20.3423 11.9032C20.209 11.8731 20.0709 11.87 19.9364 11.894C19.8018 11.918 19.6734 11.9686 19.5587 12.0429C19.444 12.1173 19.3453 12.2138 19.2684 12.3268L14.8431 18.5217L12.6222 16.3008C12.4278 16.1197 12.1706 16.021 11.9049 16.0257C11.6392 16.0304 11.3857 16.1381 11.1978 16.326C11.0099 16.5139 10.9022 16.7674 10.8975 17.0331C10.8928 17.2988 10.9915 17.556 11.1726 17.7504L14.2496 20.8273C14.3549 20.9325 14.4818 21.0136 14.6215 21.0648C14.7613 21.116 14.9105 21.1362 15.0588 21.124C15.2072 21.1118 15.351 21.0674 15.4805 20.994C15.61 20.9205 15.7219 20.8198 15.8085 20.6988L20.9368 13.5193Z"
                      fill="#FFE0A5"></path>
                  </svg>
                </div>
              </div>
            </div>
            <div class="w-96 lg:w-1/3 p-4">
              <div class="bg-tresto-500 rounded-3xl px-8 pb-8 pt-10 h-full">
                <h2 class="text-center text-white text-xl font-bold font-heading mb-4">Infinity</h2>
                <div class="flex items-end justify-center gap-3 mb-8">
                  <h2 class="text-white text-5xl font-bold font-heading">1900 {{ __('Dhs') }}</h2>
                  <p class="text-tresto-200 text-lg font-medium pb-2">/ 12 {{ __('months') }}</p>
                </div>
                <a class="w-full text-center h-14 py-4 px-6 rounded-full bg-white border border-gray-200 shadow hover:bg-gray-50 focus:ring focus:ring-tresto-200 transition duration-200 mb-8 flex rtl:flex-row-reverse items-center justify-center gap-2"
                  href="#">
                  <span class="text-sm font-semibold ">{{ __('Start Today!') }}</span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewbox="0 0 21 20"
                    fill="none">
                    <path d="M5.50002 10H15.9167M15.9167 10L10.9167 5M15.9167 10L10.9167 15" stroke="#282828"
                      stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                </a>
                <div class="bg-tresto-900 rounded-3xl p-6 flex flex-col items-center gap-8">
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewbox="0 0 32 32"
                    fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M2.66666 16C2.66666 8.63592 8.63589 2.66669 16 2.66669C23.3641 2.66669 29.3333 8.63592 29.3333 16C29.3333 23.3641 23.3641 29.3334 16 29.3334C8.63589 29.3334 2.66666 23.3641 2.66666 16ZM20.9367 13.5193C21.0188 13.41 21.0782 13.2854 21.1114 13.1528C21.1446 13.0202 21.1509 12.8823 21.13 12.7472C21.1092 12.6121 21.0615 12.4825 20.9899 12.3661C20.9182 12.2497 20.824 12.1488 20.7128 12.0693C20.6016 11.9898 20.4756 11.9333 20.3423 11.9032C20.209 11.8731 20.0709 11.87 19.9364 11.894C19.8018 11.918 19.6734 11.9686 19.5587 12.043C19.4439 12.1173 19.3452 12.2138 19.2684 12.3269L14.8431 18.5217L12.6222 16.3009C12.4278 16.1197 12.1706 16.0211 11.9049 16.0258C11.6392 16.0305 11.3857 16.1381 11.1978 16.326C11.0099 16.5139 10.9022 16.7674 10.8975 17.0332C10.8928 17.2989 10.9915 17.556 11.1726 17.7504L14.2496 20.8274C14.3548 20.9326 14.4818 21.0136 14.6215 21.0648C14.7613 21.1161 14.9105 21.1363 15.0588 21.124C15.2071 21.1118 15.351 21.0674 15.4805 20.994C15.61 20.9206 15.7219 20.8199 15.8085 20.6988L20.9367 13.5193Z"
                      fill="white"></path>
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewbox="0 0 32 32"
                    fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M2.66666 16C2.66666 8.63592 8.63589 2.66669 16 2.66669C23.3641 2.66669 29.3333 8.63592 29.3333 16C29.3333 23.3641 23.3641 29.3334 16 29.3334C8.63589 29.3334 2.66666 23.3641 2.66666 16ZM20.9367 13.5193C21.0188 13.41 21.0782 13.2854 21.1114 13.1528C21.1446 13.0202 21.1509 12.8823 21.13 12.7472C21.1092 12.6121 21.0615 12.4825 20.9899 12.3661C20.9182 12.2497 20.824 12.1488 20.7128 12.0693C20.6016 11.9898 20.4756 11.9333 20.3423 11.9032C20.209 11.8731 20.0709 11.87 19.9364 11.894C19.8018 11.918 19.6734 11.9686 19.5587 12.043C19.4439 12.1173 19.3452 12.2138 19.2684 12.3269L14.8431 18.5217L12.6222 16.3009C12.4278 16.1197 12.1706 16.0211 11.9049 16.0258C11.6392 16.0305 11.3857 16.1381 11.1978 16.326C11.0099 16.5139 10.9022 16.7674 10.8975 17.0332C10.8928 17.2989 10.9915 17.556 11.1726 17.7504L14.2496 20.8274C14.3548 20.9326 14.4818 21.0136 14.6215 21.0648C14.7613 21.1161 14.9105 21.1363 15.0588 21.124C15.2071 21.1118 15.351 21.0674 15.4805 20.994C15.61 20.9206 15.7219 20.8199 15.8085 20.6988L20.9367 13.5193Z"
                      fill="white"></path>
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewbox="0 0 32 32"
                    fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M2.66666 16C2.66666 8.63592 8.63589 2.66669 16 2.66669C23.3641 2.66669 29.3333 8.63592 29.3333 16C29.3333 23.3641 23.3641 29.3334 16 29.3334C8.63589 29.3334 2.66666 23.3641 2.66666 16ZM20.9367 13.5193C21.0188 13.41 21.0782 13.2854 21.1114 13.1528C21.1446 13.0202 21.1509 12.8823 21.13 12.7472C21.1092 12.6121 21.0615 12.4825 20.9899 12.3661C20.9182 12.2497 20.824 12.1488 20.7128 12.0693C20.6016 11.9898 20.4756 11.9333 20.3423 11.9032C20.209 11.8731 20.0709 11.87 19.9364 11.894C19.8018 11.918 19.6734 11.9686 19.5587 12.043C19.4439 12.1173 19.3452 12.2138 19.2684 12.3269L14.8431 18.5217L12.6222 16.3009C12.4278 16.1197 12.1706 16.0211 11.9049 16.0258C11.6392 16.0305 11.3857 16.1381 11.1978 16.326C11.0099 16.5139 10.9022 16.7674 10.8975 17.0332C10.8928 17.2989 10.9915 17.556 11.1726 17.7504L14.2496 20.8274C14.3548 20.9326 14.4818 21.0136 14.6215 21.0648C14.7613 21.1161 14.9105 21.1363 15.0588 21.124C15.2071 21.1118 15.351 21.0674 15.4805 20.994C15.61 20.9206 15.7219 20.8199 15.8085 20.6988L20.9367 13.5193Z"
                      fill="white"></path>
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewbox="0 0 32 32"
                    fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M2.66666 16C2.66666 8.63592 8.63589 2.66669 16 2.66669C23.3641 2.66669 29.3333 8.63592 29.3333 16C29.3333 23.3641 23.3641 29.3334 16 29.3334C8.63589 29.3334 2.66666 23.3641 2.66666 16ZM20.9367 13.5193C21.0188 13.41 21.0782 13.2854 21.1114 13.1528C21.1446 13.0202 21.1509 12.8823 21.13 12.7472C21.1092 12.6121 21.0615 12.4825 20.9899 12.3661C20.9182 12.2497 20.824 12.1488 20.7128 12.0693C20.6016 11.9898 20.4756 11.9333 20.3423 11.9032C20.209 11.8731 20.0709 11.87 19.9364 11.894C19.8018 11.918 19.6734 11.9686 19.5587 12.043C19.4439 12.1173 19.3452 12.2138 19.2684 12.3269L14.8431 18.5217L12.6222 16.3009C12.4278 16.1197 12.1706 16.0211 11.9049 16.0258C11.6392 16.0305 11.3857 16.1381 11.1978 16.326C11.0099 16.5139 10.9022 16.7674 10.8975 17.0332C10.8928 17.2989 10.9915 17.556 11.1726 17.7504L14.2496 20.8274C14.3548 20.9326 14.4818 21.0136 14.6215 21.0648C14.7613 21.1161 14.9105 21.1363 15.0588 21.124C15.2071 21.1118 15.351 21.0674 15.4805 20.994C15.61 20.9206 15.7219 20.8199 15.8085 20.6988L20.9367 13.5193Z"
                      fill="white"></path>
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewbox="0 0 32 32"
                    fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M2.66666 16C2.66666 8.63592 8.63589 2.66669 16 2.66669C23.3641 2.66669 29.3333 8.63592 29.3333 16C29.3333 23.3641 23.3641 29.3334 16 29.3334C8.63589 29.3334 2.66666 23.3641 2.66666 16ZM20.9367 13.5193C21.0188 13.41 21.0782 13.2854 21.1114 13.1528C21.1446 13.0202 21.1509 12.8823 21.13 12.7472C21.1092 12.6121 21.0615 12.4825 20.9899 12.3661C20.9182 12.2497 20.824 12.1488 20.7128 12.0693C20.6016 11.9898 20.4756 11.9333 20.3423 11.9032C20.209 11.8731 20.0709 11.87 19.9364 11.894C19.8018 11.918 19.6734 11.9686 19.5587 12.043C19.4439 12.1173 19.3452 12.2138 19.2684 12.3269L14.8431 18.5217L12.6222 16.3009C12.4278 16.1197 12.1706 16.0211 11.9049 16.0258C11.6392 16.0305 11.3857 16.1381 11.1978 16.326C11.0099 16.5139 10.9022 16.7674 10.8975 17.0332C10.8928 17.2989 10.9915 17.556 11.1726 17.7504L14.2496 20.8274C14.3548 20.9326 14.4818 21.0136 14.6215 21.0648C14.7613 21.1161 14.9105 21.1363 15.0588 21.124C15.2071 21.1118 15.351 21.0674 15.4805 20.994C15.61 20.9206 15.7219 20.8199 15.8085 20.6988L20.9367 13.5193Z"
                      fill="white"></path>
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
        {{-- <h2 class="text-4xl font-bold font-heading mb-14">Pricing FAQs</h2>
        <div class="flex flex-wrap -mx-4">
          <div class="w-full lg:w-1/2 px-4">
            <div class="py-12 border-b border-tresto-200 h-full">
              <h2 class="text-xl font-bold font-heading mb-2">What payment options are there?</h2>
              <p class="text-gray-600">You can pay by credit card, PayPal, or Stripe.</p>
            </div>
          </div>
          <div class="w-full lg:w-1/2 px-4">
            <div class="py-12 border-b border-tresto-200 h-full">
              <h2 class="text-xl font-bold font-heading mb-2">Are there a free trial?</h2>
              <p class="text-gray-600">Yes! We offer 14-days of trial. Free and no credit card required.</p>
            </div>
          </div>
        </div>
        <div class="flex flex-wrap -mx-4">
          <div class="w-full lg:w-1/2 px-4">
            <div class="py-12 border-b border-tresto-200 h-full">
              <h2 class="text-xl font-bold font-heading mb-2">What type of pricing plans does Solstice offer?</h2>
              <p class="text-gray-600">We only have one monthly subscription plan, costs no more than the price of a
                cup of coffee</p>
            </div>
          </div>
          <div class="w-full lg:w-1/2 px-4">
            <div class="py-12 border-b border-tresto-200 h-full">
              <h2 class="text-xl font-bold font-heading mb-2">Why am I paying a monthly basis over a one-time payment?
              </h2>
              <p class="text-gray-600">This is our way of keeping your costs low while giving you access to our
                platform level quality and peace of mind.</p>
            </div>
          </div>
        </div> --}}
      </div>
    </section>

    <section class="py-24 xl:py-36 overflow-hidden">
      <div class="container mx-auto px-4">
        <div class="border border-tresto-100 rounded-3xl p-8 lg:p-16 relative">
          <div class="lg:max-w-md xl:max-w-2xl">
            <h1 class="text-3xl lg:text-4xl font-semibold mb-16 max-w-lg">“I just wanted to say that Solstice alone is
              a real lifesaver, but the platform is really next level!”</h1>
            <div class="flex items-center justify-between flex-wrap gap-4">
              <div>
                <h2 class="text-lg font-semibold mb-1">Hanna Stanton</h2>
                <p class="text-gray-500">Student</p>
              </div>
              <div class="flex items-center gap-3">
                <a class="text-gray-100 hover:text-tresto-500 transition duration-200" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewbox="0 0 10 10"
                    fill="none">
                    <circle cx="5" cy="5" r="5" fill="currentColor"></circle>
                  </svg>
                </a>
                <a class="text-tresto-500" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16"
                    fill="none">
                    <circle cx="8" cy="8" r="7.5" fill="white" stroke="currentColor"></circle>
                    <circle cx="8" cy="8" r="5" fill="currentColor"></circle>
                  </svg>
                </a>
                <a class="text-gray-100 hover:text-tresto-500 transition duration-200" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewbox="0 0 10 10"
                    fill="none">
                    <circle cx="5" cy="5" r="5" fill="currentColor"></circle>
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <div class="hidden lg:block absolute right-0 rtl:right-auto rtl:left-0 top-1/2 transform -translate-y-1/2 h-128 w-96">
            <div class="relative h-full">
              <img class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-20"
                src="solstice-assets/images/testimonials/woman-picture.png" alt="">
              <div
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-10 w-full bg-tresto-200 rounded-4xl transform rotate-6 h-full">
              </div>
              <div
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full bg-tresto-50 rounded-4xl transform rotate-12 h-full">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-tresto-50 pt-24">
      <div class="container mx-auto px-4">
        <h1 class="text-center text-4xl lg:text-5xl font-bold font-heading mb-4">{{ __('Découvrez les fonctionnalités') }}</h1>
        <p class="text-center text-gray-600 mb-28">{{ __('Des fonctionnalités innovantes conçues pour améliorer l\'experience de vos clients') }}
        </p>
        <div class="flex flex-wrap -mx-4">
          <div class="w-full md:w-1/2 lg:w-1/4 p-4">
            <div class="rounded-full w-12 h-12 flex items-center justify-center bg-tresto-500 mb-4 ml-4">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24"
                fill="none">
                <path d="M8.25 2V22H7.81C4.17 22 2 19.83 2 16.19V7.81C2 4.17 4.17 2 7.81 2H8.25Z" fill="white">
                </path>
                <path
                  d="M21.5 7.81V10.75H10.25V2.5H16.19C17.9106 2.5 19.2238 3.01093 20.1064 3.89355C20.9891 4.77618 21.5 6.08944 21.5 7.81Z"
                  fill="white" stroke="white"></path>
                <path d="M22 12.75V16.19C22 19.83 19.83 22 16.19 22H9.75V12.75H22Z" fill="white"></path>
              </svg>
            </div>
            <div class="relative pl-4 rtl:pr-4">
              <div class="absolute top-0 left-0 rtl:right-0 bg-tresto-500 w-0.5 h-6"></div>
              <h2 class="text-lg font-bold font-heading mb-4">{{ __('Conception de menu personnalisable')}}</h2>
              <p class="text-gray-600">{{ __("Adaptez votre menu en ligne à l'image de votre restaurant. Choisissez parmi une variété de modèles, de couleurs et de polices pour créer un menu qui reflète votre style unique.")}}</p>
            </div>
          </div>
          <div class="w-full md:w-1/2 lg:w-1/4 p-4">
            <div class="rounded-full w-12 h-12 flex items-center justify-center bg-tresto-500 mb-4 ml-4">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24"
                fill="none">
                <path
                  d="M12.6778 19.957C12.9525 20.0209 12.9777 20.3808 12.7101 20.47L11.1301 20.99C7.1601 22.27 5.0701 21.2 3.7801 17.23L2.5001 13.28C1.2201 9.30998 2.2801 7.20998 6.2501 5.92998L6.77409 5.75645C7.17696 5.62304 7.56902 6.0271 7.45463 6.43577C7.39793 6.63834 7.34338 6.84975 7.2901 7.06998L6.3101 11.26C5.2101 15.97 6.8201 18.57 11.5301 19.69L12.6778 19.957Z"
                  fill="white"></path>
                <path
                  d="M15.3848 3.30658L15.3862 3.30691L17.0561 3.69687C17.0561 3.69688 17.0562 3.69689 17.0562 3.69691C19.103 4.17564 20.3117 4.89396 20.9288 5.88861C21.5459 6.88329 21.6519 8.28397 21.1731 10.3259L20.1931 14.5059L20.1929 14.5067C19.7831 16.2682 19.1919 17.4136 18.3998 18.0914C17.6247 18.7547 16.5808 19.0339 15.1078 18.8923L15.1078 18.8922L15.0998 18.8916C14.6302 18.854 14.1164 18.7689 13.5573 18.634L13.5557 18.6336L11.8757 18.2336L11.8754 18.2335C9.83814 17.7499 8.63095 17.0317 8.01343 16.0375C7.39626 15.0438 7.28815 13.6454 7.76674 11.6041L7.7668 11.6039L8.74664 7.41453C8.74667 7.4144 8.7467 7.41427 8.74673 7.41415C8.94185 6.585 9.17125 5.88463 9.44861 5.32067L9.44862 5.32067L9.45009 5.31764C9.99063 4.1996 10.6904 3.54259 11.5993 3.2289C12.5315 2.90719 13.7555 2.92119 15.3848 3.30658ZM15.7733 13.458L15.7733 13.458L15.775 13.4513C15.9411 12.7868 15.5425 12.1026 14.8611 11.9349L11.9532 11.1954L11.9512 11.1949C11.2895 11.0295 10.6034 11.4247 10.4349 12.0987C10.2695 12.7602 10.6643 13.4459 11.3377 13.6148C11.338 13.6149 11.3383 13.615 11.3387 13.6151L14.2467 14.3546L14.2727 14.3612L14.2992 14.365C14.3053 14.3659 14.3123 14.3669 14.3199 14.368C14.3752 14.3762 14.4677 14.39 14.5599 14.39C15.1202 14.39 15.6235 14.0236 15.7733 13.458ZM18.7033 10.078L18.7034 10.078L18.7057 10.0685C18.8673 9.40584 18.4816 8.71142 17.786 8.55361L12.9428 7.32535L12.9412 7.32494C12.2795 7.1595 11.5934 7.55473 11.4249 8.22874C11.2595 8.89019 11.6543 9.57598 12.3278 9.74486C12.3281 9.74493 12.3284 9.74501 12.3287 9.74508L17.177 10.9747L17.2028 10.9812L17.2292 10.985C17.2353 10.9859 17.2423 10.9869 17.2499 10.988C17.3052 10.9963 17.3977 11.01 17.4899 11.01C18.0501 11.01 18.5535 10.6436 18.7033 10.078Z"
                  fill="white" stroke="white"></path>
              </svg>
            </div>
            <div class="relative pl-4 rtl:pr-4">
              <div class="absolute top-0 left-0 rtl:right-0 bg-tresto-500 w-0.5 h-6"></div>
              <h2 class="text-lg font-bold font-heading mb-4">{{ __('Mises à jour du menu en temps réel')}}</h2>
              <p class="text-gray-600">{{ __("Mettez votre menu à jour instantanément depuis n'importe quel appareil. Ajoutez de nouveaux plats, modifiez les prix ou mettez en avant les plats du jour en quelques clics.")}}</p>
            </div>
          </div>
          <div class="w-full md:w-1/2 lg:w-1/4 p-4">
            <div class="rounded-full w-12 h-12 flex items-center justify-center bg-tresto-500 mb-4 ml-4">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24"
                fill="none">
                <path
                  d="M16.25 3.56V4.01584L16.7039 4.05787C17.9607 4.17424 18.8396 4.60009 19.4285 5.22534C20.0186 5.8518 20.3659 6.72969 20.4607 7.83991C20.4603 7.84 20.4601 7.84 20.46 7.84H20.46H3.54161C3.54098 7.83968 3.54018 7.83919 3.53936 7.83853C3.63436 6.72896 3.98156 5.85155 4.57144 5.22534C5.16041 4.60009 6.0393 4.17424 7.29608 4.05787L7.74999 4.01584V3.56V2C7.74999 1.86614 7.86613 1.75 7.99999 1.75C8.13384 1.75 8.24999 1.86614 8.24999 2V3.5V4H8.74999H15.25H15.75V3.5V2C15.75 1.86614 15.8661 1.75 16 1.75C16.1338 1.75 16.25 1.86614 16.25 2V3.56Z"
                  fill="white" stroke="white"></path>
                <path
                  d="M20 9.84003H4C3.45 9.84003 3 10.29 3 10.84V17C3 20 4.5 22 8 22H16C19.5 22 21 20 21 17V10.84C21 10.29 20.55 9.84003 20 9.84003ZM9.21 18.21C9.11 18.3 9 18.37 8.88 18.42C8.76 18.47 8.63 18.5 8.5 18.5C8.37 18.5 8.24 18.47 8.12 18.42C8 18.37 7.89 18.3 7.79 18.21C7.61 18.02 7.5 17.76 7.5 17.5C7.5 17.24 7.61 16.98 7.79 16.79C7.89 16.7 8 16.63 8.12 16.58C8.36 16.48 8.64 16.48 8.88 16.58C9 16.63 9.11 16.7 9.21 16.79C9.39 16.98 9.5 17.24 9.5 17.5C9.5 17.76 9.39 18.02 9.21 18.21ZM9.42 14.38C9.37 14.5 9.3 14.61 9.21 14.71C9.11 14.8 9 14.87 8.88 14.92C8.76 14.97 8.63 15 8.5 15C8.37 15 8.24 14.97 8.12 14.92C8 14.87 7.89 14.8 7.79 14.71C7.7 14.61 7.63 14.5 7.58 14.38C7.53 14.26 7.5 14.13 7.5 14C7.5 13.87 7.53 13.74 7.58 13.62C7.63 13.5 7.7 13.39 7.79 13.29C7.89 13.2 8 13.13 8.12 13.08C8.36 12.98 8.64 12.98 8.88 13.08C9 13.13 9.11 13.2 9.21 13.29C9.3 13.39 9.37 13.5 9.42 13.62C9.47 13.74 9.5 13.87 9.5 14C9.5 14.13 9.47 14.26 9.42 14.38ZM12.71 14.71C12.61 14.8 12.5 14.87 12.38 14.92C12.26 14.97 12.13 15 12 15C11.87 15 11.74 14.97 11.62 14.92C11.5 14.87 11.39 14.8 11.29 14.71C11.11 14.52 11 14.26 11 14C11 13.74 11.11 13.48 11.29 13.29C11.39 13.2 11.5 13.13 11.62 13.08C11.86 12.97 12.14 12.97 12.38 13.08C12.5 13.13 12.61 13.2 12.71 13.29C12.89 13.48 13 13.74 13 14C13 14.26 12.89 14.52 12.71 14.71Z"
                  fill="white"></path>
              </svg>
            </div>
            <div class="relative pl-4 rtl:pr-4">
              <div class="absolute top-0 left-0 rtl:right-0 bg-tresto-500 w-0.5 h-6"></div>
              <h2 class="text-lg font-bold font-heading mb-4">{{ __("Interface adaptée aux mobiles")}}</h2>
              <p class="text-gray-600">{{ __("Veillez à ce que votre menu soit agréable à regarder sur n'importe quel appareil. Le design responsive de Tresto garantit une expérience de navigation transparente pour les clients sur smartphones, tablettes ou ordinateurs de bureau.")}} </p>
            </div>
          </div>
          <div class="w-full md:w-1/2 lg:w-1/4 p-4">
            <div class="rounded-full w-12 h-12 flex items-center justify-center bg-tresto-500 mb-4 ml-4">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24"
                fill="none">
                <path
                  d="M22 22H2C1.59 22 1.25 21.66 1.25 21.25C1.25 20.84 1.59 20.5 2 20.5H22C22.41 20.5 22.75 20.84 22.75 21.25C22.75 21.66 22.41 22 22 22Z"
                  fill="white"></path>
                <path
                  d="M13.75 21.5H10.25V4C10.25 3.50568 10.3531 3.13335 10.5388 2.894C10.7067 2.67762 10.9963 2.5 11.55 2.5H12.45C13.0037 2.5 13.2933 2.67762 13.4612 2.894C13.6469 3.13335 13.75 3.50568 13.75 4V21.5Z"
                  fill="white" stroke="white"></path>
                <path d="M3 10V22H7V10C7 8.9 6.6 8 5.4 8H4.6C3.4 8 3 8.9 3 10Z" fill="white"></path>
                <path d="M17 15V22H21V15C21 13.9 20.6 13 19.4 13H18.6C17.4 13 17 13.9 17 15Z" fill="white"></path>
              </svg>
            </div>
            <div class="relative pl-4 rtl:pr-4">
              <div class="absolute top-0 left-0 rtl:right-0 bg-tresto-500 w-0.5 h-6"></div>
              <h2 class="text-lg font-bold font-heading mb-4">{{ __("Commande en ligne intégrée")}} </h2>
              <p class="text-gray-600">{{ ('Allow customers to place orders directly from your menu. Increase sales by offering takeout, delivery, or pre-order options, all integrated within the platform.')}} </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-tresto-50 pb-24">
      <div class="container mx-auto px-4">

        <div class="flex flex-wrap -mx-4">
          <div class="w-full md:w-1/2 lg:w-1/4 p-4">
            <div class="rounded-full w-12 h-12 flex items-center justify-center bg-tresto-500 mb-4 ml-4">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24"
                fill="none">
                <path d="M8.25 2V22H7.81C4.17 22 2 19.83 2 16.19V7.81C2 4.17 4.17 2 7.81 2H8.25Z" fill="white">
                </path>
                <path
                  d="M21.5 7.81V10.75H10.25V2.5H16.19C17.9106 2.5 19.2238 3.01093 20.1064 3.89355C20.9891 4.77618 21.5 6.08944 21.5 7.81Z"
                  fill="white" stroke="white"></path>
                <path d="M22 12.75V16.19C22 19.83 19.83 22 16.19 22H9.75V12.75H22Z" fill="white"></path>
              </svg>
            </div>
             <div class="relative pl-4 rtl:pr-4">
              <div class="absolute top-0 left-0 rtl:right-0 bg-tresto-500 w-0.5 h-6"></div>
              <h2 class="text-lg font-bold font-heading mb-4">{{ __("Analytics") }}</h2>
              <p class="text-gray-600">{{ __("Suivez les préférences des clients, les plats populaires et les tendances des ventes grâce aux analyses intégrées de Tresto. Utilisez ces informations pour optimiser votre menu et prendre des décisions basées sur des données.")}} </p>
            </div>
          </div>
          <div class="w-full md:w-1/2 lg:w-1/4 p-4">
            <div class="rounded-full w-12 h-12 flex items-center justify-center bg-tresto-500 mb-4 ml-4">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24"
                fill="none">
                <path
                  d="M12.6778 19.957C12.9525 20.0209 12.9777 20.3808 12.7101 20.47L11.1301 20.99C7.1601 22.27 5.0701 21.2 3.7801 17.23L2.5001 13.28C1.2201 9.30998 2.2801 7.20998 6.2501 5.92998L6.77409 5.75645C7.17696 5.62304 7.56902 6.0271 7.45463 6.43577C7.39793 6.63834 7.34338 6.84975 7.2901 7.06998L6.3101 11.26C5.2101 15.97 6.8201 18.57 11.5301 19.69L12.6778 19.957Z"
                  fill="white"></path>
                <path
                  d="M15.3848 3.30658L15.3862 3.30691L17.0561 3.69687C17.0561 3.69688 17.0562 3.69689 17.0562 3.69691C19.103 4.17564 20.3117 4.89396 20.9288 5.88861C21.5459 6.88329 21.6519 8.28397 21.1731 10.3259L20.1931 14.5059L20.1929 14.5067C19.7831 16.2682 19.1919 17.4136 18.3998 18.0914C17.6247 18.7547 16.5808 19.0339 15.1078 18.8923L15.1078 18.8922L15.0998 18.8916C14.6302 18.854 14.1164 18.7689 13.5573 18.634L13.5557 18.6336L11.8757 18.2336L11.8754 18.2335C9.83814 17.7499 8.63095 17.0317 8.01343 16.0375C7.39626 15.0438 7.28815 13.6454 7.76674 11.6041L7.7668 11.6039L8.74664 7.41453C8.74667 7.4144 8.7467 7.41427 8.74673 7.41415C8.94185 6.585 9.17125 5.88463 9.44861 5.32067L9.44862 5.32067L9.45009 5.31764C9.99063 4.1996 10.6904 3.54259 11.5993 3.2289C12.5315 2.90719 13.7555 2.92119 15.3848 3.30658ZM15.7733 13.458L15.7733 13.458L15.775 13.4513C15.9411 12.7868 15.5425 12.1026 14.8611 11.9349L11.9532 11.1954L11.9512 11.1949C11.2895 11.0295 10.6034 11.4247 10.4349 12.0987C10.2695 12.7602 10.6643 13.4459 11.3377 13.6148C11.338 13.6149 11.3383 13.615 11.3387 13.6151L14.2467 14.3546L14.2727 14.3612L14.2992 14.365C14.3053 14.3659 14.3123 14.3669 14.3199 14.368C14.3752 14.3762 14.4677 14.39 14.5599 14.39C15.1202 14.39 15.6235 14.0236 15.7733 13.458ZM18.7033 10.078L18.7034 10.078L18.7057 10.0685C18.8673 9.40584 18.4816 8.71142 17.786 8.55361L12.9428 7.32535L12.9412 7.32494C12.2795 7.1595 11.5934 7.55473 11.4249 8.22874C11.2595 8.89019 11.6543 9.57598 12.3278 9.74486C12.3281 9.74493 12.3284 9.74501 12.3287 9.74508L17.177 10.9747L17.2028 10.9812L17.2292 10.985C17.2353 10.9859 17.2423 10.9869 17.2499 10.988C17.3052 10.9963 17.3977 11.01 17.4899 11.01C18.0501 11.01 18.5535 10.6436 18.7033 10.078Z"
                  fill="white" stroke="white"></path>
              </svg>
            </div>
            <div class="relative pl-4 rtl:pr-4">
              <div class="absolute top-0 left-0 rtl:right-0 bg-tresto-500 w-0.5 h-6"></div>
              <h2 class="text-lg font-bold font-heading mb-4">{{ __('Multi-Language Support') }}</h2>
              <p class="text-gray-600">Cater to a diverse customer base by offering your menu in multiple languages.
                Tresto makes it easy to translate and display your menu in the languages your customers speak.</p>
            </div>
          </div>
          <div class="w-full md:w-1/2 lg:w-1/4 p-4">
            <div class="rounded-full w-12 h-12 flex items-center justify-center bg-tresto-500 mb-4 ml-4">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24"
                fill="none">
                <path
                  d="M16.25 3.56V4.01584L16.7039 4.05787C17.9607 4.17424 18.8396 4.60009 19.4285 5.22534C20.0186 5.8518 20.3659 6.72969 20.4607 7.83991C20.4603 7.84 20.4601 7.84 20.46 7.84H20.46H3.54161C3.54098 7.83968 3.54018 7.83919 3.53936 7.83853C3.63436 6.72896 3.98156 5.85155 4.57144 5.22534C5.16041 4.60009 6.0393 4.17424 7.29608 4.05787L7.74999 4.01584V3.56V2C7.74999 1.86614 7.86613 1.75 7.99999 1.75C8.13384 1.75 8.24999 1.86614 8.24999 2V3.5V4H8.74999H15.25H15.75V3.5V2C15.75 1.86614 15.8661 1.75 16 1.75C16.1338 1.75 16.25 1.86614 16.25 2V3.56Z"
                  fill="white" stroke="white"></path>
                <path
                  d="M20 9.84003H4C3.45 9.84003 3 10.29 3 10.84V17C3 20 4.5 22 8 22H16C19.5 22 21 20 21 17V10.84C21 10.29 20.55 9.84003 20 9.84003ZM9.21 18.21C9.11 18.3 9 18.37 8.88 18.42C8.76 18.47 8.63 18.5 8.5 18.5C8.37 18.5 8.24 18.47 8.12 18.42C8 18.37 7.89 18.3 7.79 18.21C7.61 18.02 7.5 17.76 7.5 17.5C7.5 17.24 7.61 16.98 7.79 16.79C7.89 16.7 8 16.63 8.12 16.58C8.36 16.48 8.64 16.48 8.88 16.58C9 16.63 9.11 16.7 9.21 16.79C9.39 16.98 9.5 17.24 9.5 17.5C9.5 17.76 9.39 18.02 9.21 18.21ZM9.42 14.38C9.37 14.5 9.3 14.61 9.21 14.71C9.11 14.8 9 14.87 8.88 14.92C8.76 14.97 8.63 15 8.5 15C8.37 15 8.24 14.97 8.12 14.92C8 14.87 7.89 14.8 7.79 14.71C7.7 14.61 7.63 14.5 7.58 14.38C7.53 14.26 7.5 14.13 7.5 14C7.5 13.87 7.53 13.74 7.58 13.62C7.63 13.5 7.7 13.39 7.79 13.29C7.89 13.2 8 13.13 8.12 13.08C8.36 12.98 8.64 12.98 8.88 13.08C9 13.13 9.11 13.2 9.21 13.29C9.3 13.39 9.37 13.5 9.42 13.62C9.47 13.74 9.5 13.87 9.5 14C9.5 14.13 9.47 14.26 9.42 14.38ZM12.71 14.71C12.61 14.8 12.5 14.87 12.38 14.92C12.26 14.97 12.13 15 12 15C11.87 15 11.74 14.97 11.62 14.92C11.5 14.87 11.39 14.8 11.29 14.71C11.11 14.52 11 14.26 11 14C11 13.74 11.11 13.48 11.29 13.29C11.39 13.2 11.5 13.13 11.62 13.08C11.86 12.97 12.14 12.97 12.38 13.08C12.5 13.13 12.61 13.2 12.71 13.29C12.89 13.48 13 13.74 13 14C13 14.26 12.89 14.52 12.71 14.71Z"
                  fill="white"></path>
              </svg>
            </div>
            <div class="relative pl-4 rtl:pr-4">
              <div class="absolute top-0 left-0 rtl:right-0 bg-tresto-500 w-0.5 h-6"></div>
              <h2 class="text-lg font-bold font-heading mb-4">Loyalty Program Integration:</h2>
              <p class="text-gray-600">Reward your customers and encourage repeat business by integrating loyalty
                programs directly with your menu. Offer discounts, points, or special deals to keep them coming back.
              </p>
            </div>
          </div>
          <div class="w-full md:w-1/2 lg:w-1/4 p-4">
            <div class="rounded-full w-12 h-12 flex items-center justify-center bg-tresto-500 mb-4 ml-4">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24"
                fill="none">
                <path
                  d="M22 22H2C1.59 22 1.25 21.66 1.25 21.25C1.25 20.84 1.59 20.5 2 20.5H22C22.41 20.5 22.75 20.84 22.75 21.25C22.75 21.66 22.41 22 22 22Z"
                  fill="white"></path>
                <path
                  d="M13.75 21.5H10.25V4C10.25 3.50568 10.3531 3.13335 10.5388 2.894C10.7067 2.67762 10.9963 2.5 11.55 2.5H12.45C13.0037 2.5 13.2933 2.67762 13.4612 2.894C13.6469 3.13335 13.75 3.50568 13.75 4V21.5Z"
                  fill="white" stroke="white"></path>
                <path d="M3 10V22H7V10C7 8.9 6.6 8 5.4 8H4.6C3.4 8 3 8.9 3 10Z" fill="white"></path>
                <path d="M17 15V22H21V15C21 13.9 20.6 13 19.4 13H18.6C17.4 13 17 13.9 17 15Z" fill="white"></path>
              </svg>
            </div>
            <div class="relative pl-4 rtl:pr-4">
              <div class="absolute top-0 left-0 rtl:right-0 bg-tresto-500 w-0.5 h-6"></div>
              <h2 class="text-lg font-bold font-heading mb-4">See progress. Achieve more.</h2>
              <p class="text-gray-600">Track your daily progress through Stats and the Dashboard. Get Insights, and
                stay motivated as your business grows.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-12">
      <div class="container mx-auto px-4">
        <div class="py-28 relative">
          <div class="hidden sm:block absolute top-6 left-0 bg-tresto-100 rounded-xl px-6 pt-4">
            <img class="h-16 sm:h-20 md:h-auto" src="solstice-assets/images/cta/men-picture1.png" alt="">
          </div>
          <div class="absolute top-0 right-0 bg-tresto-900 rounded-xl px-6 pt-4">
            <img class="h-16 sm:h-24 md:h-auto" src="solstice-assets/images/cta/woman-picture1.png" alt="">
          </div>
          <div class="absolute bottom-0 left-0 sm:left-24 bg-tresto-300 rounded-xl px-6 pt-4">
            <img class="h-16 sm:h-24 md:h-auto" src="solstice-assets/images/cta/woman-picture2.png" alt="">
          </div>
          <div class="hidden sm:block absolute bottom-0 right-0 sm:right-24 bg-tresto-50 rounded-xl px-6 pt-4">
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
                  d="M9.22571 34C9.22571 27.4084 11.8358 21.0868 16.4819 16.4258C21.128 11.7649 27.4294 9.14639 33.9999 9.14639C40.5704 9.14639 46.8718 11.7649 51.5179 16.4258C56.164 21.0868 58.7741 27.4084 58.7741 34"
                  stroke="#FF7100" stroke-width="4" stroke-miterlimit="10"></path>
                <path
                  d="M16.1339 34C16.1339 29.2617 18.0162 24.7174 21.3667 21.3669C24.7173 18.0163 29.2616 16.134 33.9999 16.134C38.7383 16.134 43.2826 18.0163 46.6331 21.3669C49.9836 24.7174 51.8659 29.2617 51.8659 34"
                  stroke="#FFC96D" stroke-width="4" stroke-miterlimit="10"></path>
              </svg>
            </div> --}}
            <h1 class="text-4xl lg:text-5xl mb-10 font-bold font-heading text-center max-w-lg lg:max-w-3xl mx-auto">
              What are you waiting for? Join now and Grow Your Bursiness!</h1>
            <div class="flex justify-center"><a
                class="w-full sm:w-auto text-center py-5 px-8 rounded-full h-16 inline-flex items-center justify-center bg-tresto-500 border border-tresto-600 shadow font-bold font-heading text-white hover:bg-tresto-600 focus:ring focus:ring-tresto-200 transition duration-200"
                href="/register">Create an account for FREE now!</a></div>
          </div>
        </div>
      </div>
    </section>

    <section class="pt-24 bg-tresto-900">
      <div class="container mx-auto px-4">
        <div class="bg-tresto-800 rounded-t-3xl pt-10 pb-36 px-10">
          <div class="flex justify-between flex-wrap gap-8">
            <div>
              <a href="#">
                <img class="mb-6 h-12" src="images/logo-04.png" alt="">
              </a>
              <p class="text-tresto-200 text-sm">© 2023 Solstice. All rights reserved.</p>
            </div>
            <div class="flex flex-wrap gap-8 -mx-4">
              <ul class="flex flex-col gap-6 p-4">
                <li class="text-white font-medium">Platform</li>
                <li><a class="text-tresto-200 hover:text-white transition duration-200" href="#">Features</a>
                </li>
                <li><a class="text-tresto-200 hover:text-white transition duration-200" href="#">How it
                    works</a></li>
                <li><a class="text-tresto-200 hover:text-white transition duration-200" href="#">Pricing</a>
                </li>
                <li><a class="text-tresto-200 hover:text-white transition duration-200" href="#">Events</a></li>
              </ul>
              <ul class="flex flex-col gap-6 p-4">
                <li class="text-white font-medium">Company</li>
                <li><a class="text-tresto-200 hover:text-white transition duration-200" href="#">About</a></li>
                <li><a class="text-tresto-200 hover:text-white transition duration-200" href="#">Our Mission</a>
                </li>
                <li class="flex items-center flex-wrap gap-2">
                  <a class="text-tresto-200 hover:text-white transition duration-200" href="#">Careers</a>
                  <div class="bg-tresto-500 py-1 px-2 rounded-md text-white text-xs font-bold font-heading uppercase">
                    HIRING</div>
                </li>
                <li><a class="text-tresto-200 hover:text-white transition duration-200" href="#">Contact</a>
                </li>
              </ul>
              <ul class="flex flex-col gap-6 p-4">
                <li class="text-white font-medium">Resources</li>
                <li><a class="text-tresto-200 hover:text-white transition duration-200" href="#">Tutorials</a>
                </li>
                <li><a class="text-tresto-200 hover:text-white transition duration-200" href="#">Blog</a></li>
                <li><a class="text-tresto-200 hover:text-white transition duration-200" href="#">Help Center</a>
                </li>
                <li><a class="text-tresto-200 hover:text-white transition duration-200" href="#">Support</a>
                </li>
              </ul>
              <ul class="flex flex-col gap-6 p-4">
                <li class="text-white font-medium">Community</li>
                <li><a class="text-tresto-200 hover:text-white transition duration-200" href="#">Discord
                    Server</a></li>
                <li><a class="text-tresto-200 hover:text-white transition duration-200" href="#">Slack Group</a>
                </li>
                <li><a class="text-tresto-200 hover:text-white transition duration-200" href="#">Zoom Room</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</x-layouts.front>
