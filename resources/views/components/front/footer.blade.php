<section class="pt-24 bg-tresto-700">
  <div class="container mx-auto px-4">
    <div class="bg-tresto-600 rounded-t-3xl flex flex-col gap-28 pt-10 px-10">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
        <div class="col-span-6">
          <a href="{{route('home', ['locale' => app()->getLocale()])}}">
            <img class="mb-6 h-12" src="{{asset("images/logo-04.png")}}" alt="">
          </a>
          <p class="text-tresto-100 text-sm max-w-96 pb-3">{{__("Créez des menus en ligne, gérez vos commandes et générez des QR codes pour simplifier la gestion de votre restaurant.")}}</p>
          <div class="flex gap-3 mt-5">
            <a target="_blank" href="https://www.instagram.com/tresto.officiel/">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="white" d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4zm9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8A1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5a5 5 0 0 1-5 5a5 5 0 0 1-5-5a5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3"/></svg>
            </a>
            <a target="_blank" href="https://www.facebook.com/tresto.official/">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="white" d="M12 2.04c-5.5 0-10 4.49-10 10.02c0 5 3.66 9.15 8.44 9.9v-7H7.9v-2.9h2.54V9.85c0-2.51 1.49-3.89 3.78-3.89c1.09 0 2.23.19 2.23.19v2.47h-1.26c-1.24 0-1.63.77-1.63 1.56v1.88h2.78l-.45 2.9h-2.33v7a10 10 0 0 0 8.44-9.9c0-5.53-4.5-10.02-10-10.02"/></svg>
            </a>
          </div>
        </div>
        <div class="col-span-6 grid grid-cols-1 lg:grid-cols-6 gap-8 -mx-4">
          <ul class="col-span-3 flex flex-col gap-6 p-4">
            <li class="text-white font-medium">{{ __("Platform")}}</li>
            <li><a class="text-tresto-200 hover:text-white transition duration-200" href="{{route('home', ['locale' => app()->getLocale()])}}">{{ __("Accueil")}}</a>
            </li>
            <li><a class="text-tresto-200 hover:text-white transition duration-200" href="{{route('features', ['locale' => app()->getLocale()])}}">{{ __("Features")}}</a>
            </li>
            <li><a class="text-tresto-200 hover:text-white transition duration-200" href="{{route('tarifs', ['locale' => app()->getLocale()])}}#pricing">{{ __("Tarifs")}}</a>
            </li>
            <li><a class="text-tresto-200 hover:text-white transition duration-200" href="{{route('blog', ['locale' => app()->getLocale()])}}">{{ __("Blog")}}</a>
            </li>
            {{-- <li><a class="text-tresto-200 hover:text-white transition duration-200" href="#">Events</a></li> --}}
          </ul>
          <ul class="col-span-3 flex flex-col gap-6 p-4">
            <li class="text-white font-medium"> {{ __("Contact") }} </li>
            <li class="flex items-center gap-3">
              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="white" d="M12 15c.81 0 1.5-.3 2.11-.89c.59-.61.89-1.3.89-2.11s-.3-1.5-.89-2.11C13.5 9.3 12.81 9 12 9s-1.5.3-2.11.89C9.3 10.5 9 11.19 9 12s.3 1.5.89 2.11c.61.59 1.3.89 2.11.89m0-13c2.75 0 5.1 1 7.05 2.95S22 9.25 22 12v1.45c0 1-.35 1.85-1 2.55c-.7.67-1.5 1-2.5 1c-1.2 0-2.19-.5-2.94-1.5c-1 1-2.18 1.5-3.56 1.5c-1.37 0-2.55-.5-3.54-1.46C7.5 14.55 7 13.38 7 12c0-1.37.5-2.55 1.46-3.54C9.45 7.5 10.63 7 12 7c1.38 0 2.55.5 3.54 1.46C16.5 9.45 17 10.63 17 12v1.45c0 .41.16.77.46 1.08s.65.47 1.04.47c.42 0 .77-.16 1.07-.47s.43-.67.43-1.08V12c0-2.19-.77-4.07-2.35-5.65S14.19 4 12 4s-4.07.77-5.65 2.35S4 9.81 4 12s.77 4.07 2.35 5.65S9.81 20 12 20h5v2h-5c-2.75 0-5.1-1-7.05-2.95S2 14.75 2 12s1-5.1 2.95-7.05S9.25 2 12 2"/></svg>
              </div>
              <a class="text-tresto-200 hover:text-white transition duration-200" href="mailto:contact@tresto.ma">contact@tresto.ma</a>
            </li>
            <li class="flex items-center gap-3">
              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="white" d="M17 19H7V5h10m0-4H7c-1.11 0-2 .89-2 2v18a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2"/></svg>
              </div>
              <a dir="ltr" target="_blank" class="text-tresto-200 hover:text-white transition duration-200" href="https://api.whatsapp.com/send?phone=+212708900709&text=Bonjour">+212 70 89 00 709</a>
            </li>
            <li class="flex items-center gap-3">
              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="white" d="M12 6.5A2.5 2.5 0 0 1 14.5 9a2.5 2.5 0 0 1-2.5 2.5A2.5 2.5 0 0 1 9.5 9A2.5 2.5 0 0 1 12 6.5M12 2a7 7 0 0 1 7 7c0 5.25-7 13-7 13S5 14.25 5 9a7 7 0 0 1 7-7m0 2a5 5 0 0 0-5 5c0 1 0 3 5 9.71C17 12 17 10 17 9a5 5 0 0 0-5-5"/></svg>
              </div>
              <a target="_blank" class="text-tresto-200 hover:text-white transition duration-200" href="https://goo.gl/maps/SBFgmt52ry2dH3im6">Appt3, 1ère étage Imm109 Abdellah Genoun, Hay Essalam, Agadir 80 000, Maroc</a>
            </li>
          </ul>
        </div>
      </div>
      <p class="text-tresto-200 text-sm text-center pb-10"> {{ __("© 2024 Tresto. All rights reserved.")}} </p>
    </div>
  </div>
</section>