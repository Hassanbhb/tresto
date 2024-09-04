<section class="bg-tresto-600">
  <div class="border-b border-tresto-500">
    <div class="container px-4 mx-auto">
      <div class="flex items-center justify-between py-6">
        <a href="{{ route('home') }}">
          <img src="images/logo-04.png" alt="" class="h-8">
        </a>
        <ul class="hidden lg:flex items-center gap-8">
          <li>
            <a class="flex items-center flex-wrap gap-2 group" href="{{ route('home') }}">
              <span class="text-white group-hover:text-opacity-70 transition duration-200">{{ __('Accueil') }}</span>
            </a>
          </li>
          <li class="text-white hover:text-opacity-70 transition duration-200"><a
              href="{{ route('features') }}">{{ __('Features') }}</a></li>
          <li class="text-white hover:text-opacity-70 transition duration-200"><a
              href="{{ route('home') }}#pricing">{{ __('Tarifs') }}</a></li>
          <li>
            <a class="flex items-center flex-wrap gap-2 group" href="{{ route('contact') }}">
              <span class="text-white group-hover:text-opacity-70 transition duration-200">{{ __('Contact') }}</span>

            </a>
          </li>
          <li class="text-white hover:text-opacity-70 transition duration-200"><a href="{{ route('blog') }}">{{ __('Blog') }}</a>
          </li>
        </ul>
        <div class="flex gap-3 items-center">
          <div x-data="{ open: false }" class="relative inline-block text-left">
            <div>
              <button @click="open = !open" type="button"
                class="inline-flex justify-center w-full px-4 py-2 bg-tresto-600 text-sm font-medium text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-tresto-200"
                id="options-menu" aria-haspopup="true" aria-expanded="true">
                <span>{{ App::getLocale() }}</span>
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
              class="origin-top-right absolute right-0 mt-2 w-24 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none z-50"
              role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
              <div class="py-1" role="none">
                <a href="{{ route('change.language', 'ar') }}"
                  class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                  role="menuitem">{{ __('Arabic') }}</a>
                <a href="{{ route('change.language', 'fr') }}"
                  class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                  role="menuitem">{{ __('French') }}</a>
                <a href="{{ route('change.language', 'en') }}"
                  class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                  role="menuitem">{{ __('English') }}</a>
              </div>
            </div>
          </div>
          <a class="hidden lg:block py-3 px-5 rounded-full bg-tresto-900 border border-tresto-700 shadow text-sm font-semibold text-white hover:bg-tresto-800 focus:ring focus:ring-tresto-800 transition duration-200"
            href="/register">{{ __('Get Started') }}</a>
        </div>
        <div class="lg:hidden">
          <a href="#">
            <svg class="navbar-burger text-tresto-500" width="51" height="51" viewbox="0 0 56 56" fill="none"
              xmlns="http://www.w3.org/2000/svg">
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
          <a class="flex items-center flex-wrap gap-2 group" href="/">
            <span class="group-hover:text-opacity-70 transition duration-200">{{ __('Accueil') }}</span>
          </a>
        </li>
        <li class="hover:text-opacity-70 transition duration-200"><a href="{{ route('features') }}">{{ __('Features') }}</a></li>
        <li class="hover:text-opacity-70 transition duration-200"><a href="{{route('home')}}#pricing">{{ __('Tarifs') }}</a></li>
        <li>
          <a class="flex items-center flex-wrap gap-2 group" href="{{ route('contact') }}">
            <span class="group-hover:text-opacity-70 transition duration-200">{{ __('Contact') }}</span>
          </a>
        </li>
        <li class="hover:text-opacity-70 transition duration-200"><a href="{{ route('blog') }}">{{ __('Blog') }}</a></li>

      </ul>
      <div>

        <a class="block text-center py-3 px-5 rounded-full bg-white border border-gray-200 shadow text-sm font-semibold hover:bg-gray-50 focus:ring focus:ring-tresto-200 transition duration-200"
          href="/register">{{ __('Get Started') }}</a>
      </div>
    </nav>
  </div>
</section>
