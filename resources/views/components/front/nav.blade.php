<section class="bg-tresto-600">
  <div class="border-b border-tresto-500">
    <div class="container px-4 mx-auto">
      <div class="flex items-center justify-between relative py-6">
        <a href="{{ route('home', ['locale' => app()->getLocale()]) }}">
          <img src="{{asset('images/logo-04.png')}}" alt="" class="h-8">
        </a>
        <ul class="hidden absolute lg:flex lg:items-center justify-center w-3/4 left-1/2 transform -translate-x-1/2 gap-8">
          <li>
            <a class="flex items-center flex-wrap gap-2 group"
              href="{{ route('home', ['locale' => app()->getLocale()]) }}">
              <span class="text-white group-hover:text-opacity-70 transition duration-200">{{ __('Accueil') }}</span>
            </a>
          </li>
          <li class="text-white hover:text-opacity-70 transition duration-200"><a
              href="{{ route('features', ['locale' => app()->getLocale()]) }}">{{ __('Features') }}</a></li>
          <li class="text-white hover:text-opacity-70 transition duration-200"><a
              href="{{ route('tarifs', ['locale' => app()->getLocale()]) }}#pricing">{{ __('Tarifs') }}</a></li>
          <li>
            <a class="flex items-center flex-wrap gap-2 group"
              href="{{ route('contact', ['locale' => app()->getLocale()]) }}">
              <span class="text-white group-hover:text-opacity-70 transition duration-200">{{ __('Contact') }}</span>
            </a>
          </li>
          <li class="text-white hover:text-opacity-70 transition duration-200"><a
              href="{{ route('blog', ['locale' => app()->getLocale()]) }}">{{ __('Blog') }}</a>
          </li>
        </ul>
        <div class="lg:col-span-2 flex gap-3 items-center">
          <div x-data="{ open: false }" class="relative inline-block text-left">
            <div>
              <button @click="open = !open" type="button"
                class="inline-flex justify-center items-center w-full px-4 py-2 bg-tresto-600 text-sm font-medium text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-tresto-200"
                id="options-menu" aria-haspopup="true" aria-expanded="true">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12 21q-1.858 0-3.5-.71q-1.642-.711-2.86-1.93T3.71 15.5T3 12q0-1.864.71-3.503q.711-1.64 1.93-2.857T8.5 3.71Q10.142 3 12 3q1.864 0 3.503.71q1.64.711 2.858 1.93t1.929 2.857Q21 10.137 21 12q0 1.858-.71 3.5q-.711 1.642-1.93 2.86t-2.857 1.93T12 21m0-.992q.88-1.131 1.452-2.221q.571-1.09.929-2.44H9.619q.397 1.426.948 2.516q.552 1.09 1.433 2.145m-1.273-.15q-.7-.825-1.278-2.04q-.578-1.214-.86-2.472H4.754q.86 1.865 2.437 3.06q1.578 1.194 3.536 1.452m2.546 0q1.958-.258 3.536-1.452q1.577-1.195 2.437-3.06h-3.834q-.38 1.277-.957 2.491q-.578 1.215-1.182 2.02m-8.927-5.51h4.035q-.114-.616-.16-1.2q-.048-.583-.048-1.147t.047-1.147t.16-1.2H4.347q-.163.52-.255 1.133Q4 11.398 4 12t.091 1.215t.255 1.131m5.035 0h5.238q.114-.615.16-1.18q.048-.564.048-1.166t-.047-1.166t-.16-1.18H9.38q-.113.615-.16 1.18q-.047.564-.047 1.166t.047 1.166t.16 1.18m6.24 0h4.034q.163-.519.255-1.131Q20 12.602 20 12t-.091-1.215t-.255-1.131h-4.035q.114.615.16 1.199q.048.584.048 1.147t-.047 1.147t-.16 1.2m-.208-5.693h3.834q-.879-1.904-2.408-3.06t-3.565-1.471q.7.921 1.259 2.107q.559 1.185.88 2.424m-5.793 0h4.762q-.396-1.408-.977-2.546T12 3.992q-.823.977-1.404 2.116T9.62 8.654m-4.865 0h3.834q.321-1.238.88-2.424t1.259-2.107q-2.054.316-3.574 1.48q-1.52 1.166-2.4 3.05"/></svg> 
                </span>
                <svg class="mr-1 ml-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
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
                <a href="{{ route(Route::currentRouteName(), ['locale' => 'ar'] + request()->route()->parameters()) }}"
                  class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                  role="menuitem">العربية</a>
                <a href="{{ route(Route::currentRouteName(), ['locale' => 'fr'] + request()->route()->parameters()) }}"
                  class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                  role="menuitem">Français</a>
                <a href="{{ route(Route::currentRouteName(), ['locale' => 'en'] + request()->route()->parameters()) }}"
                  class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                  role="menuitem">English</a>
              </div>
            </div>
          </div>
          <div class="flex gap-3 items-center">
            <a class="hidden lg:block py-3 px-5 rounded-full bg-tresto-900 border border-tresto-700 shadow text-sm font-semibold text-white hover:bg-tresto-800 focus:ring focus:ring-tresto-800 transition duration-200"
              href="https://tresto.ma/login">{{ __('Connexion') }}</a>
            <a class="hidden lg:block py-3 px-5 rounded-full bg-secondary border border-secondary shadow text-sm font-semibold text-black hover:bg-secondary focus:ring focus:ring-secondary transition duration-200"
              href="https://tresto.ma/start?step=1">{{ __("S'inscrire") }}</a>
          </div>
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
          <img class="w-4/5" src="{{asset("images/logo-01.png")}}" alt="">
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
          <a class="flex items-center flex-wrap gap-2 group"
            href="{{ route('home', ['locale' => app()->getLocale()]) }}">
            <span class="group-hover:text-opacity-70 transition duration-200">{{ __('Accueil') }}</span>
          </a>
        </li>
        <li class="hover:text-opacity-70 transition duration-200"><a
            href="{{ route('features', ['locale' => app()->getLocale()]) }}">{{ __('Features') }}</a></li>
        <li class="hover:text-opacity-70 transition duration-200"><a
            href="{{ route('tarifs', ['locale' => app()->getLocale()]) }}#pricing"> {{ __('Tarifs') }} </a></li>
        <li>
          <a class="flex items-center flex-wrap gap-2 group"
            href="{{ route('contact', ['locale' => app()->getLocale()]) }}">
            <span class="group-hover:text-opacity-70 transition duration-200">{{ __('Contact') }}</span>
          </a>
        </li>
        <li class="hover:text-opacity-70 transition duration-200"><a
            href="{{ route('blog', ['locale' => app()->getLocale()]) }}">{{ __('Blog') }}</a></li>

      </ul>
      <div class="flex flex-col gap-3">

        <a class="block text-center py-3 px-5 rounded-full bg-white border border-gray-200 shadow text-sm font-semibold hover:bg-gray-50 focus:ring focus:ring-tresto-200 transition duration-200"
          href="https://tresto.ma/login">{{ __("Connexion") }}</a>
        <a class="block text-center py-3 px-5 rounded-full bg-secondary border border-gray-200 shadow text-sm font-semibold hover:bg-gray-50 focus:ring focus:ring-tresto-200 transition duration-200"
          href="https://tresto.ma/start?step=1">{{ __("S'inscrire") }}</a>
      </div>
    </nav>
  </div>
</section>
