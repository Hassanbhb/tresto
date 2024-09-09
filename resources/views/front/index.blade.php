@section('title', __('TResto - Plateforme pour Gestion de Menus en Ligne'))
@section('description',
  __('Créez des menus en ligne, gérez vos commandes et générez des QR codes pour simplifier la
  gestion de votre restaurant.'))

  <x-layouts.front>
    <div>
      <section class="overflow-hidden bg-tresto-600">
        <x-front.nav />

        <div class="container px-4 mx-auto relative">
          <div class="relative z-20">
            <h1
              class="text-center text-white text-5xl lg:text-7xl font-bold ltr:font-mono rtl:font-body rtl:leading-relaxed mb-6 mt-14 max-w-4xl mx-auto">
              <span>{{ __('Créez votre menu en quelques clics avec') }} <span class="text-secondary">TResto</span>
                {{-- <span></span> --}}
                {{-- {{ __('Today!') }}</span> --}}
            </h1>
            <p class="text-center text-white text-lg mb-10 max-w-lg mx-auto">
              {{ __('Des commandes en ligne aux repas sur place, simplifiez vos opérations et améliorez la satisfaction de vos clients grâce à notre plateforme intuitive.') }}
            </p>
            <div class="flex justify-center "><a
                class="w-full sm:w-auto text-center h-16 inline-flex items-center justify-center py-4 px-6 rounded-full bg-secondary border border-tresto-600 hover:border-secondary shadow font-bold ltr:font-mono rtl:font-body text-black hover:text-white hover:bg-tresto-600 focus:ring focus:ring-tresto-200 transition duration-200"
                href="https://tresto.ma/start?step=1">{{ __('Commencez GRATUITEMENT !') }}</a></div>
            {{-- <div class="hidden lg:block absolute bottom-9 left-0 z-10">
              <div class="relative -rotate-[25deg]">
                <img src="images/menu.png" class="-rotate-12 animate-float" alt="restaurant menu">
              </div>
            </div> --}}
          </div>
          {{-- <div class="hidden lg:block absolute bottom-6 right-0">
            <div class="relative rotate-[25deg]">
              <img src="images/burger-rb.png" class="w-128 animate-float" alt="restaurant burger">
            </div>
          </div> --}}

          <div class="py-6 space-y-4">
            <div class="flex gap-2 items-center justify-center">
              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24">
                  <path fill="yellow"
                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.62L12 2L9.19 8.62L2 9.24l5.45 4.73L5.82 21z" />
                </svg>
              </div>
              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24">
                  <path fill="yellow"
                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.62L12 2L9.19 8.62L2 9.24l5.45 4.73L5.82 21z" />
                </svg>
              </div>
              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24">
                  <path fill="yellow"
                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.62L12 2L9.19 8.62L2 9.24l5.45 4.73L5.82 21z" />
                </svg>
              </div>
              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24">
                  <path fill="yellow"
                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.62L12 2L9.19 8.62L2 9.24l5.45 4.73L5.82 21z" />
                </svg>
              </div>
              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24">
                  <path fill="yellow"
                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.62L12 2L9.19 8.62L2 9.24l5.45 4.73L5.82 21z" />
                </svg>
              </div>
            </div>
            <div>
              <p class="text-sm text-center text-white font-medium">
                {{ __(':rate étoiles sur 5 d’après :total avis', ['rate' => '4.8', 'total' => '128']) }}</p>
            </div>
          </div>
        </div>
      </section>

      <div class="relative w-full py-5 overflow-hidden">
        <div x-data="{
            logos: [
                { src: 'images/clients/1.webp', alt: 'Restaurants Ticktok' },
                { src: 'images/clients/2.webp', alt: 'Ghost Food' },
                { src: 'images/clients/3.webp', alt: 'Pasta la Vista' },
                { src: 'images/clients/4.webp', alt: 'Mama Ghadina Baba Achina' },
                { src: 'images/clients/5.webp', alt: 'MFC' },
                { src: 'images/clients/6.webp', alt: 'la' },
                { src: 'images/clients/7.webp', alt: 'Food Factory Crunch' },
                { src: 'images/clients/8.webp', alt: 'Sami Food' },
                { src: 'images/clients/9.webp', alt: 'As you like it' },
                { src: 'images/clients/10.webp', alt: 'King Tacos' },
                { src: 'images/clients/11.webp', alt: 'Souk alhad' },
                { src: 'images/clients/12.webp', alt: 'Akwaba Délice' },
                { src: 'images/clients/13.webp', alt: 'Chicken Home' },
            ]
        }" class="flex overflow-hidden">
            <div class="flex gap-6 py-2 whitespace-nowrap animate-marquee">
                <template x-for="logo in logos" :key="logo.alt">
                    <span class="w-24 lg:w-40">
                        <img :src="logo.src" :alt="logo.alt" class="lg:w-24 h-auto">
                    </span>
                </template>
            </div>
    
            <div class="absolute top-5 flex gap-6 py-2 whitespace-nowrap animate-marquee2">
                <template x-for="logo in logos" :key="logo.alt">
                    <span class="w-24 lg:w-40">
                        <img :src="logo.src" :alt="logo.alt" class="lg:w-24 h-auto">
                    </span>
                </template>
            </div>
        </div>
    </div>

      <section dir="ltr" class="pt-20 pb-24">
        <div class="container mx-auto px-4">
          <div>
            <p class="text-center text-tresto-500 text-sm font-bold ltr:font-mono rtl:font-body mb-6">
              {{ __('COMMENT ÇA MARCHE') }}</p>
            <h1
              class="text-center text-3xl lg:text-5xl font-bold ltr:font-mono rtl:font-body mb-24 max-w-sm lg:max-w-xl mx-auto">
              {{ __('Quelles sont les étapes à suivre ?') }}</h1>
          </div>

          <div x-data="{ activeTab: 1 }" class="flex flex-wrap items-center -mx-4">
            <div class="w-full lg:w-2/3 lg:p-5 bg-tresto-500  rounded-2xl" data-aos="fade-up" data-aos-offset="200"
              data-aos-delay="50" data-aos-once="true" data-aos-duration="1000" data-aos-easing="ease-in-out">
              <img class="w-full" src="images/product/themes.gif" alt="online menu TResto">
            </div>

            <!-- First Section -->
            <div dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}" class="w-full lg:w-1/3 p-4">
              <a href="#" @click.prevent="activeTab = activeTab === 1 ? null : 1" data-aos="fade-up"
                data-aos-once="true" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000"
                data-aos-easing="ease-in-out">
                <div :class="{ 'bg-tresto-50': activeTab === 1, 'py-6 pr-10 mb-3': true }"
                  class="rounded-2xl transition duration-200">
                  <div :class="{ 'border-tresto-500': activeTab === 1, 'border-transparent': activeTab !== 1 }"
                    class="border-l-4 pl-10 transition duration-200">
                    <h2 class="text-lg font-bold ltr:font-mono rtl:font-body mb-2">
                      {{ __('Inscrivez-vous et personnalisez') }}</h2>
                    <p class="text-gray-600">
                      {{ __('Créez votre compte et concevez un menu qui reflète l’image de votre restaurant.') }}
                    </p>
                  </div>
                </div>
              </a>

              <!-- Second Section -->
              <a href="#" @click.prevent="activeTab = activeTab === 2 ? null : 2" data-aos="fade-up"
                data-aos-once="true" data-aos-offset="200" data-aos-delay="100" data-aos-duration="1000"
                data-aos-easing="ease-in-out">
                <div :class="{ 'bg-tresto-50': activeTab === 2, 'py-6 pr-10 mb-3': true }"
                  class="rounded-2xl transition duration-200">
                  <div :class="{ 'border-tresto-500': activeTab === 2, 'border-transparent': activeTab !== 2 }"
                    class="border-l-4 pl-10">
                    <h2 class="text-lg font-bold ltr:font-mono rtl:font-body mb-2">{{ __('Publiez et partagez') }}</h2>
                    <p class="text-gray-600">
                      {{ __('Mettez votre menu en ligne et partagez le lien sur votre site web et vos réseaux sociaux.') }}
                    </p>
                  </div>
                </div>

                <!-- Third Section -->
                <a href="#" @click.prevent="activeTab = activeTab === 3 ? null : 3" data-aos="fade-up"
                  data-aos-once="true" data-aos-offset="200" data-aos-delay="150" data-aos-duration="1000"
                  data-aos-easing="ease-in-out">
                  <div :class="{ 'bg-tresto-50': activeTab === 3, 'py-6 pr-10 mb-3': true }"
                    class="rounded-2xl transition duration-200">
                    <div :class="{ 'border-tresto-500': activeTab === 3, 'border-transparent': activeTab !== 3 }"
                      class="border-l-4 pl-10">
                      <h2 class="text-lg font-bold ltr:font-mono rtl:font-body mb-2">{{ __('Recevez des commandes') }}
                      </h2>
                      <p class="text-gray-600">
                        {{ __('Vos clients passant commande via votre site web ou Whatsapp pour une gestion simplifiée.') }}
                      </p>
                    </div>
                  </div>
                </a>
            </div>
          </div>
        </div>
      </section>

      <section id="pricing" class="py-24 bg-tresto-50">
        <div class="container mx-auto px-4">
          <div data-aos="fade-up" data-aos-offset="100" data-aos-delay="50" data-aos-duration="1000"
            data-aos-once="true" data-aos-easing="ease-in-out">
            <h1 class="text-center text-5xl lg:text-6xl font-bold ltr:font-mono rtl:font-body mb-6">{{ __('Tarifs') }}
            </h1>
            <p class="text-gray-600 text-lg text-center mb-24 max-w-xl mx-auto">
              {{ __("Une tarification simple qui s'adapte aux restaurants de toutes tailles") }}</p>
          </div>
          <div class="mb-24">
            <div class="flex flex-col md:flex-row max-w-full">
              <div class="lg:w-1/3 p-4 lg:mt-56">
                <h2 data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000"
                  data-aos-once="true" data-aos-easing="ease-in-out"
                  class="mt-10 mb-12 text-3xl font-bold ltr:font-mono rtl:font-body">
                  {{ __('Ce que vous obtiendrez') }}
                </h2>
                <ul class="flex flex-col gap-5">
                  <li data-aos="fade-up" data-aos-offset="200" data-aos-delay="100" data-aos-duration="1000"
                    data-aos-once="true" data-aos-easing="ease-in-out" class="text-lg font-medium">
                    {{ __('Simplifiez les Commandes via le Site Web ou WhatsApp') }}</li>
                  <li data-aos="fade-up" data-aos-offset="200" data-aos-delay="200" data-aos-duration="1000"
                    data-aos-once="true" data-aos-easing="ease-in-out" class="text-lg font-medium">
                    {{ __('Mises à jour en temps réel') }}
                  </li>
                  <li data-aos="fade-up" data-aos-offset="200" data-aos-delay="200" data-aos-duration="1000"
                    data-aos-once="true" data-aos-easing="ease-in-out" class="text-lg font-medium">
                    {{ __('Des rapports détaillés sur les visites et les ventes') }}</li>
                  <li data-aos="fade-up" data-aos-offset="200" data-aos-delay="200" data-aos-duration="1000"
                    data-aos-once="true" data-aos-easing="ease-in-out" class="text-lg font-medium">
                    {{ __('Génération de QR Codes') }}</li>
                  <li data-aos="fade-up" data-aos-offset="200" data-aos-delay="200" data-aos-duration="1000"
                    data-aos-once="true" data-aos-easing="ease-in-out" class="text-lg font-medium">
                    {{ __('Gestion des commandes simplifiée') }}</li>
                  <li data-aos="fade-up" data-aos-offset="200" data-aos-delay="200" data-aos-duration="1000"
                    data-aos-once="true" data-aos-easing="ease-in-out" class="text-lg font-medium">
                    {{ __('Gestion des Zones de Livraison et des Frais') }}</li>
                  <li data-aos="fade-up" data-aos-offset="200" data-aos-delay="200" data-aos-duration="1000"
                    data-aos-once="true" data-aos-easing="ease-in-out" class="text-lg font-medium">
                    {{ __('Les clients peuvent commencer à passer commande immédiatement') }}</li>
                  <li data-aos="fade-up" data-aos-offset="200" data-aos-delay="200" data-aos-duration="1000"
                    data-aos-once="true" data-aos-easing="ease-in-out" class="text-lg font-medium">
                    {{ __('Augmentez la Satisfaction des Clients') }}</li>
                </ul>
              </div>
              <div data-aos="fade-up" data-aos-offset="200" data-aos-delay="100" data-aos-duration="1000"
                data-aos-once="true" data-aos-easing="ease-in-out" class="lg:w-1/3 p-4">
                <div class="border border-gray-200 bg-white rounded-3xl px-8 pb-8 pt-10 h-full">
                  <h2 class="text-center text-xl font-bold ltr:font-mono rtl:font-body mb-4">Standard</h2>
                  <div class="flex flex-col md:flex-row items-center md:items-end justify-center gap-3 mb-8">
                    <h2 class="text-5xl font-bold ltr:font-mono rtl:font-body">799 {{ __('Dhs') }}</h2>
                    <p class="text-gray-400 text-lg font-medium pb-2"><span class="text-sm">HT</span> / 12
                      {{ __('months') }}</p>
                  </div>
                  <a class="h-14 inline-flex items-center justify-center w-full text-center py-4 px-6 rounded-full border border-gray-200 shadow text-sm font-semibold hover:bg-gray-50 focus:ring focus:ring-tresto-200 transition duration-200 mb-8"
                    href="#">{{ __('Commencez avec le forfait basique') }}</a>
                  <div class="bg-tresto-50 rounded-3xl p-6 flex flex-col items-left gap-8 mx-auto">
                    <div class="flex flex-col gap-6 lg:w-72 mx-auto">
                      <div class="flex flex-col gap-1 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewbox="0 0 32 32"
                          fill="none">
                          <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M2.66666 16C2.66666 8.63592 8.63589 2.66669 16 2.66669C23.3641 2.66669 29.3333 8.63592 29.3333 16C29.3333 23.3641 23.3641 29.3334 16 29.3334C8.63589 29.3334 2.66666 23.3641 2.66666 16ZM20.9368 13.5193C21.0188 13.41 21.0782 13.2854 21.1114 13.1528C21.1446 13.0202 21.1509 12.8823 21.1301 12.7472C21.1092 12.6121 21.0615 12.4825 20.9899 12.3661C20.9182 12.2497 20.824 12.1488 20.7128 12.0693C20.6016 11.9898 20.4756 11.9333 20.3423 11.9032C20.209 11.8731 20.0709 11.87 19.9364 11.894C19.8018 11.918 19.6734 11.9686 19.5587 12.043C19.444 12.1173 19.3453 12.2138 19.2684 12.3269L14.8431 18.5217L12.6222 16.3009C12.4278 16.1197 12.1706 16.0211 11.9049 16.0258C11.6392 16.0305 11.3857 16.1381 11.1978 16.326C11.0099 16.5139 10.9022 16.7674 10.8975 17.0332C10.8928 17.2989 10.9915 17.556 11.1726 17.7504L14.2496 20.8274C14.3549 20.9326 14.4818 21.0136 14.6215 21.0648C14.7613 21.1161 14.9105 21.1363 15.0588 21.124C15.2072 21.1118 15.351 21.0674 15.4805 20.994C15.61 20.9206 15.7219 20.8199 15.8085 20.6988L20.9368 13.5193Z"
                            fill="#FF7100"></path>
                        </svg>
                        <p class="text-center">{{ __('Produits illimités') }} </p>
                      </div>
                      <div class="flex flex-col gap-1 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewbox="0 0 32 32"
                          fill="none">
                          <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M2.66666 16C2.66666 8.63592 8.63589 2.66669 16 2.66669C23.3641 2.66669 29.3333 8.63592 29.3333 16C29.3333 23.3641 23.3641 29.3334 16 29.3334C8.63589 29.3334 2.66666 23.3641 2.66666 16ZM20.9368 13.5193C21.0188 13.41 21.0782 13.2854 21.1114 13.1528C21.1446 13.0202 21.1509 12.8823 21.1301 12.7472C21.1092 12.6121 21.0615 12.4825 20.9899 12.3661C20.9182 12.2497 20.824 12.1488 20.7128 12.0693C20.6016 11.9898 20.4756 11.9333 20.3423 11.9032C20.209 11.8731 20.0709 11.87 19.9364 11.894C19.8018 11.918 19.6734 11.9686 19.5587 12.043C19.444 12.1173 19.3453 12.2138 19.2684 12.3269L14.8431 18.5217L12.6222 16.3009C12.4278 16.1197 12.1706 16.0211 11.9049 16.0258C11.6392 16.0305 11.3857 16.1381 11.1978 16.326C11.0099 16.5139 10.9022 16.7674 10.8975 17.0332C10.8928 17.2989 10.9915 17.556 11.1726 17.7504L14.2496 20.8274C14.3549 20.9326 14.4818 21.0136 14.6215 21.0648C14.7613 21.1161 14.9105 21.1363 15.0588 21.124C15.2072 21.1118 15.351 21.0674 15.4805 20.994C15.61 20.9206 15.7219 20.8199 15.8085 20.6988L20.9368 13.5193Z"
                            fill="#FF7100"></path>
                        </svg>
                        <p class="text-center">{{ __('Commandes illimitées') }} </p>
                      </div>
                      <div class="flex flex-col gap-1 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewbox="0 0 32 32"
                          fill="none">
                          <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M2.66666 16C2.66666 8.63589 8.63589 2.66666 16 2.66666C23.3641 2.66666 29.3333 8.63589 29.3333 16C29.3333 23.3641 23.3641 29.3333 16 29.3333C8.63589 29.3333 2.66666 23.3641 2.66666 16ZM20.9368 13.5193C21.0188 13.41 21.0782 13.2853 21.1114 13.1527C21.1446 13.0201 21.1509 12.8822 21.1301 12.7471C21.1092 12.612 21.0615 12.4825 20.9899 12.3661C20.9182 12.2497 20.824 12.1487 20.7128 12.0693C20.6016 11.9898 20.4756 11.9333 20.3423 11.9032C20.209 11.8731 20.0709 11.87 19.9364 11.894C19.8018 11.918 19.6734 11.9686 19.5587 12.0429C19.444 12.1173 19.3453 12.2138 19.2684 12.3268L14.8431 18.5217L12.6222 16.3008C12.4278 16.1197 12.1706 16.021 11.9049 16.0257C11.6392 16.0304 11.3857 16.1381 11.1978 16.326C11.0099 16.5139 10.9022 16.7674 10.8975 17.0331C10.8928 17.2988 10.9915 17.556 11.1726 17.7504L14.2496 20.8273C14.3549 20.9325 14.4818 21.0136 14.6215 21.0648C14.7613 21.116 14.9105 21.1362 15.0588 21.124C15.2072 21.1118 15.351 21.0674 15.4805 20.994C15.61 20.9205 15.7219 20.8198 15.8085 20.6988L20.9368 13.5193Z"
                            fill="#FFE0A5"></path>
                        </svg>
                        <p class="text-center">{{ __('Tables Illimitées') }} </p>
                      </div>
                      <div class="flex flex-col gap-1 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewbox="0 0 32 32"
                          fill="none">
                          <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M2.66666 16C2.66666 8.63589 8.63589 2.66666 16 2.66666C23.3641 2.66666 29.3333 8.63589 29.3333 16C29.3333 23.3641 23.3641 29.3333 16 29.3333C8.63589 29.3333 2.66666 23.3641 2.66666 16ZM20.9368 13.5193C21.0188 13.41 21.0782 13.2853 21.1114 13.1527C21.1446 13.0201 21.1509 12.8822 21.1301 12.7471C21.1092 12.612 21.0615 12.4825 20.9899 12.3661C20.9182 12.2497 20.824 12.1487 20.7128 12.0693C20.6016 11.9898 20.4756 11.9333 20.3423 11.9032C20.209 11.8731 20.0709 11.87 19.9364 11.894C19.8018 11.918 19.6734 11.9686 19.5587 12.0429C19.444 12.1173 19.3453 12.2138 19.2684 12.3268L14.8431 18.5217L12.6222 16.3008C12.4278 16.1197 12.1706 16.021 11.9049 16.0257C11.6392 16.0304 11.3857 16.1381 11.1978 16.326C11.0099 16.5139 10.9022 16.7674 10.8975 17.0331C10.8928 17.2988 10.9915 17.556 11.1726 17.7504L14.2496 20.8273C14.3549 20.9325 14.4818 21.0136 14.6215 21.0648C14.7613 21.116 14.9105 21.1362 15.0588 21.124C15.2072 21.1118 15.351 21.0674 15.4805 20.994C15.61 20.9205 15.7219 20.8198 15.8085 20.6988L20.9368 13.5193Z"
                            fill="#FFE0A5"></path>
                        </svg>
                        <p class="text-center">{{ __('Rapport de base et statistiques') }}</p>
                      </div>
                      <div class="flex flex-col gap-1 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewbox="0 0 32 32"
                          fill="none">
                          <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M2.66666 16C2.66666 8.63589 8.63589 2.66666 16 2.66666C23.3641 2.66666 29.3333 8.63589 29.3333 16C29.3333 23.3641 23.3641 29.3333 16 29.3333C8.63589 29.3333 2.66666 23.3641 2.66666 16ZM20.9368 13.5193C21.0188 13.41 21.0782 13.2853 21.1114 13.1527C21.1446 13.0201 21.1509 12.8822 21.1301 12.7471C21.1092 12.612 21.0615 12.4825 20.9899 12.3661C20.9182 12.2497 20.824 12.1487 20.7128 12.0693C20.6016 11.9898 20.4756 11.9333 20.3423 11.9032C20.209 11.8731 20.0709 11.87 19.9364 11.894C19.8018 11.918 19.6734 11.9686 19.5587 12.0429C19.444 12.1173 19.3453 12.2138 19.2684 12.3268L14.8431 18.5217L12.6222 16.3008C12.4278 16.1197 12.1706 16.021 11.9049 16.0257C11.6392 16.0304 11.3857 16.1381 11.1978 16.326C11.0099 16.5139 10.9022 16.7674 10.8975 17.0331C10.8928 17.2988 10.9915 17.556 11.1726 17.7504L14.2496 20.8273C14.3549 20.9325 14.4818 21.0136 14.6215 21.0648C14.7613 21.116 14.9105 21.1362 15.0588 21.124C15.2072 21.1118 15.351 21.0674 15.4805 20.994C15.61 20.9205 15.7219 20.8198 15.8085 20.6988L20.9368 13.5193Z"
                            fill="#FFE0A5"></path>
                        </svg>
                        <p class="text-center">{{ __('Support Technique') }}</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div data-aos="fade-up" data-aos-offset="200" data-aos-delay="400" data-aos-duration="1000"
                data-aos-once="true" data-aos-easing="ease-in-out" class="lg:w-1/3 p-4">
                <div class="relative bg-tresto-500 rounded-3xl px-8 pb-8 pt-10 h-full">
                  <div class="absolute -top-3 left-0 flex justify-center w-full">
                    <p class="py-1 px-2 bg-secondary rounded-full w-fit text-xs text-black font-medium">
                      {{ __('Recommandé') }}</p>
                  </div>
                  <h2 class="text-center text-white text-xl font-bold ltr:font-mono rtl:font-body mb-4">Premium</h2>
                  <div class="flex flex-col md:flex-row items-center md:items-end justify-center gap-3 mb-8">
                    <h2 class="text-white text-5xl font-bold ltr:font-mono rtl:font-body">1900 {{ __('Dhs') }}</h2>
                    <p class="text-tresto-200 text-lg font-medium pb-2"><span class="text-sm">HT</span> / 12
                      {{ __('months') }}</p>
                  </div>
                  <a class="w-full text-center h-14 py-4 px-6 rounded-full bg-white border border-gray-200 shadow hover:bg-gray-50 focus:ring focus:ring-tresto-200 transition duration-200 mb-8 flex rtl:flex-row-reverse items-center justify-center gap-2"
                    href="#">
                    <span class="text-sm font-semibold ">{{ __('Commencez avec le forfait premium') }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewbox="0 0 21 20"
                      fill="none">
                      <path d="M5.50002 10H15.9167M15.9167 10L10.9167 5M15.9167 10L10.9167 15" stroke="#282828"
                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                  </a>
                  <div class="bg-tresto-900 rounded-3xl p-6  text-white">
                    <div class="flex flex-col gap-6 lg:w-72 mx-auto">
                      <div class="flex flex-col gap-1 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewbox="0 0 32 32"
                          fill="none">
                          <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M2.66666 16C2.66666 8.63592 8.63589 2.66669 16 2.66669C23.3641 2.66669 29.3333 8.63592 29.3333 16C29.3333 23.3641 23.3641 29.3334 16 29.3334C8.63589 29.3334 2.66666 23.3641 2.66666 16ZM20.9367 13.5193C21.0188 13.41 21.0782 13.2854 21.1114 13.1528C21.1446 13.0202 21.1509 12.8823 21.13 12.7472C21.1092 12.6121 21.0615 12.4825 20.9899 12.3661C20.9182 12.2497 20.824 12.1488 20.7128 12.0693C20.6016 11.9898 20.4756 11.9333 20.3423 11.9032C20.209 11.8731 20.0709 11.87 19.9364 11.894C19.8018 11.918 19.6734 11.9686 19.5587 12.043C19.4439 12.1173 19.3452 12.2138 19.2684 12.3269L14.8431 18.5217L12.6222 16.3009C12.4278 16.1197 12.1706 16.0211 11.9049 16.0258C11.6392 16.0305 11.3857 16.1381 11.1978 16.326C11.0099 16.5139 10.9022 16.7674 10.8975 17.0332C10.8928 17.2989 10.9915 17.556 11.1726 17.7504L14.2496 20.8274C14.3548 20.9326 14.4818 21.0136 14.6215 21.0648C14.7613 21.1161 14.9105 21.1363 15.0588 21.124C15.2071 21.1118 15.351 21.0674 15.4805 20.994C15.61 20.9206 15.7219 20.8199 15.8085 20.6988L20.9367 13.5193Z"
                            fill="white"></path>
                        </svg>
                        <p class="text-center">{{ __('Tous les avantages du plan standard') }}</p>
                      </div>
                      <div class="flex flex-col gap-1 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewbox="0 0 32 32"
                          fill="none">
                          <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M2.66666 16C2.66666 8.63592 8.63589 2.66669 16 2.66669C23.3641 2.66669 29.3333 8.63592 29.3333 16C29.3333 23.3641 23.3641 29.3334 16 29.3334C8.63589 29.3334 2.66666 23.3641 2.66666 16ZM20.9367 13.5193C21.0188 13.41 21.0782 13.2854 21.1114 13.1528C21.1446 13.0202 21.1509 12.8823 21.13 12.7472C21.1092 12.6121 21.0615 12.4825 20.9899 12.3661C20.9182 12.2497 20.824 12.1488 20.7128 12.0693C20.6016 11.9898 20.4756 11.9333 20.3423 11.9032C20.209 11.8731 20.0709 11.87 19.9364 11.894C19.8018 11.918 19.6734 11.9686 19.5587 12.043C19.4439 12.1173 19.3452 12.2138 19.2684 12.3269L14.8431 18.5217L12.6222 16.3009C12.4278 16.1197 12.1706 16.0211 11.9049 16.0258C11.6392 16.0305 11.3857 16.1381 11.1978 16.326C11.0099 16.5139 10.9022 16.7674 10.8975 17.0332C10.8928 17.2989 10.9915 17.556 11.1726 17.7504L14.2496 20.8274C14.3548 20.9326 14.4818 21.0136 14.6215 21.0648C14.7613 21.1161 14.9105 21.1363 15.0588 21.124C15.2071 21.1118 15.351 21.0674 15.4805 20.994C15.61 20.9206 15.7219 20.8199 15.8085 20.6988L20.9367 13.5193Z"
                            fill="white"></path>
                        </svg>
                        <p class="text-center">{{ __('Fidélité des clients') }}</p>
                      </div>
                      <div class="flex flex-col gap-1 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewbox="0 0 32 32"
                          fill="none">
                          <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M2.66666 16C2.66666 8.63592 8.63589 2.66669 16 2.66669C23.3641 2.66669 29.3333 8.63592 29.3333 16C29.3333 23.3641 23.3641 29.3334 16 29.3334C8.63589 29.3334 2.66666 23.3641 2.66666 16ZM20.9367 13.5193C21.0188 13.41 21.0782 13.2854 21.1114 13.1528C21.1446 13.0202 21.1509 12.8823 21.13 12.7472C21.1092 12.6121 21.0615 12.4825 20.9899 12.3661C20.9182 12.2497 20.824 12.1488 20.7128 12.0693C20.6016 11.9898 20.4756 11.9333 20.3423 11.9032C20.209 11.8731 20.0709 11.87 19.9364 11.894C19.8018 11.918 19.6734 11.9686 19.5587 12.043C19.4439 12.1173 19.3452 12.2138 19.2684 12.3269L14.8431 18.5217L12.6222 16.3009C12.4278 16.1197 12.1706 16.0211 11.9049 16.0258C11.6392 16.0305 11.3857 16.1381 11.1978 16.326C11.0099 16.5139 10.9022 16.7674 10.8975 17.0332C10.8928 17.2989 10.9915 17.556 11.1726 17.7504L14.2496 20.8274C14.3548 20.9326 14.4818 21.0136 14.6215 21.0648C14.7613 21.1161 14.9105 21.1363 15.0588 21.124C15.2071 21.1118 15.351 21.0674 15.4805 20.994C15.61 20.9206 15.7219 20.8199 15.8085 20.6988L20.9367 13.5193Z"
                            fill="white"></path>
                        </svg>
                        <p class="text-center">{{ __('Bons de réduction') }}</p>
                      </div>
                      <div class="flex flex-col gap-1 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewbox="0 0 32 32"
                          fill="none">
                          <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M2.66666 16C2.66666 8.63592 8.63589 2.66669 16 2.66669C23.3641 2.66669 29.3333 8.63592 29.3333 16C29.3333 23.3641 23.3641 29.3334 16 29.3334C8.63589 29.3334 2.66666 23.3641 2.66666 16ZM20.9367 13.5193C21.0188 13.41 21.0782 13.2854 21.1114 13.1528C21.1446 13.0202 21.1509 12.8823 21.13 12.7472C21.1092 12.6121 21.0615 12.4825 20.9899 12.3661C20.9182 12.2497 20.824 12.1488 20.7128 12.0693C20.6016 11.9898 20.4756 11.9333 20.3423 11.9032C20.209 11.8731 20.0709 11.87 19.9364 11.894C19.8018 11.918 19.6734 11.9686 19.5587 12.043C19.4439 12.1173 19.3452 12.2138 19.2684 12.3269L14.8431 18.5217L12.6222 16.3009C12.4278 16.1197 12.1706 16.0211 11.9049 16.0258C11.6392 16.0305 11.3857 16.1381 11.1978 16.326C11.0099 16.5139 10.9022 16.7674 10.8975 17.0332C10.8928 17.2989 10.9915 17.556 11.1726 17.7504L14.2496 20.8274C14.3548 20.9326 14.4818 21.0136 14.6215 21.0648C14.7613 21.1161 14.9105 21.1363 15.0588 21.124C15.2071 21.1118 15.351 21.0674 15.4805 20.994C15.61 20.9206 15.7219 20.8199 15.8085 20.6988L20.9367 13.5193Z"
                            fill="white"></path>
                        </svg>
                        <p class="text-center">{{ __("Barre d'annonce et popup promotionnel") }}</p>
                      </div>
                      <div class="flex flex-col gap-1 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewbox="0 0 32 32"
                          fill="none">
                          <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M2.66666 16C2.66666 8.63592 8.63589 2.66669 16 2.66669C23.3641 2.66669 29.3333 8.63592 29.3333 16C29.3333 23.3641 23.3641 29.3334 16 29.3334C8.63589 29.3334 2.66666 23.3641 2.66666 16ZM20.9367 13.5193C21.0188 13.41 21.0782 13.2854 21.1114 13.1528C21.1446 13.0202 21.1509 12.8823 21.13 12.7472C21.1092 12.6121 21.0615 12.4825 20.9899 12.3661C20.9182 12.2497 20.824 12.1488 20.7128 12.0693C20.6016 11.9898 20.4756 11.9333 20.3423 11.9032C20.209 11.8731 20.0709 11.87 19.9364 11.894C19.8018 11.918 19.6734 11.9686 19.5587 12.043C19.4439 12.1173 19.3452 12.2138 19.2684 12.3269L14.8431 18.5217L12.6222 16.3009C12.4278 16.1197 12.1706 16.0211 11.9049 16.0258C11.6392 16.0305 11.3857 16.1381 11.1978 16.326C11.0099 16.5139 10.9022 16.7674 10.8975 17.0332C10.8928 17.2989 10.9915 17.556 11.1726 17.7504L14.2496 20.8274C14.3548 20.9326 14.4818 21.0136 14.6215 21.0648C14.7613 21.1161 14.9105 21.1363 15.0588 21.124C15.2071 21.1118 15.351 21.0674 15.4805 20.994C15.61 20.9206 15.7219 20.8199 15.8085 20.6988L20.9367 13.5193Z"
                            fill="white"></path>
                        </svg>
                        <p class="text-center">{{ __('Commentaires des clients') }}</p>
                      </div>
                      <div class="flex flex-col gap-1 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewbox="0 0 32 32"
                          fill="none">
                          <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M2.66666 16C2.66666 8.63592 8.63589 2.66669 16 2.66669C23.3641 2.66669 29.3333 8.63592 29.3333 16C29.3333 23.3641 23.3641 29.3334 16 29.3334C8.63589 29.3334 2.66666 23.3641 2.66666 16ZM20.9367 13.5193C21.0188 13.41 21.0782 13.2854 21.1114 13.1528C21.1446 13.0202 21.1509 12.8823 21.13 12.7472C21.1092 12.6121 21.0615 12.4825 20.9899 12.3661C20.9182 12.2497 20.824 12.1488 20.7128 12.0693C20.6016 11.9898 20.4756 11.9333 20.3423 11.9032C20.209 11.8731 20.0709 11.87 19.9364 11.894C19.8018 11.918 19.6734 11.9686 19.5587 12.043C19.4439 12.1173 19.3452 12.2138 19.2684 12.3269L14.8431 18.5217L12.6222 16.3009C12.4278 16.1197 12.1706 16.0211 11.9049 16.0258C11.6392 16.0305 11.3857 16.1381 11.1978 16.326C11.0099 16.5139 10.9022 16.7674 10.8975 17.0332C10.8928 17.2989 10.9915 17.556 11.1726 17.7504L14.2496 20.8274C14.3548 20.9326 14.4818 21.0136 14.6215 21.0648C14.7613 21.1161 14.9105 21.1363 15.0588 21.124C15.2071 21.1118 15.351 21.0674 15.4805 20.994C15.61 20.9206 15.7219 20.8199 15.8085 20.6988L20.9367 13.5193Z"
                            fill="white"></path>
                        </svg>
                        <p class="text-center">{{ __('Et Plus') }}</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section dir="ltr" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000"
        data-aos-once="true" data-aos-easing="ease-in-out" 
        x-data="{
            activeTestimonial: 0,
            testimonials: [
                { quote: 'TResto a simplifié la gestion de nos commandes avec ses menus en ligne et QR codes. Les rapports détaillés nous ont aidés à optimiser notre offre et à augmenter nos ventes.', author: 'Youseff', role: 'King Tacos Chef', image: 'images/clients/shops/kingtacos.jpg' },
                { quote: 'Grâce à TResto, la gestion des commandes et des zones de livraison est devenue un jeu d\'enfant. Les outils intuitifs nous ont permis de mieux servir nos clients et de gagner du temps.', author: 'Latif', role: 'Owner', image: 'images/clients/shops/latuniseri2.jpg' },
                { quote: 'TResto a transformé notre menu en ligne et les commandes via WhatsApp. Simple et efficace pour une gestion fluide !', author: 'Charlie', role: 'Owner', image: 'images/clients/shops/charliefood.jpg' }
            ],
            init() {
                // Start auto-switching testimonials
                this.startAutoSwitch();
            },
            fadeOut() {
                const content = document.querySelector('.testimonial-content');
                const image = document.querySelector('.testimonial-image');
                content.classList.add('opacity-0');
                image.classList.add('opacity-0');
                return new Promise(resolve => setTimeout(resolve, 500)); // Duration of transition
            },
            fadeIn() {
                const content = document.querySelector('.testimonial-content');
                const image = document.querySelector('.testimonial-image');
                content.classList.remove('opacity-0');
                image.classList.remove('opacity-0');
            },
            nextTestimonial() {
                this.fadeOut().then(() => {
                    this.activeTestimonial = (this.activeTestimonial + 1) % this.testimonials.length;
                    this.fadeIn();
                });
            },
            prevTestimonial() {
                this.fadeOut().then(() => {
                    this.activeTestimonial = (this.activeTestimonial - 1 + this.testimonials.length) % this.testimonials.length;
                    this.fadeIn();
                });
            },
            startAutoSwitch() {
                setInterval(() => {
                    this.nextTestimonial();
                }, 9000);
            }
        }" x-init="init()" class="flex items-center h-full lg:h-2/3 overflow-hidden">
        <div class="container mx-auto px-4">
          <div class="border border-tresto-100 rounded-3xl p-8 lg:p-16 relative">
            <div class="lg:max-w-4xl testimonial-content transition-opacity duration-500 ease-out">
              <h1 class="text-3xl lg:text-4xl font-semibold mb-16 max-w-4xl"
                x-text="testimonials[activeTestimonial].quote"></h1>
              <div class="flex items-center justify-center lg:justify-between flex-wrap gap-4">
                <div>
                  <h2 class="text-lg font-semibold mb-1" x-text="testimonials[activeTestimonial].author"></h2>
                  <p class="text-gray-500" x-text="testimonials[activeTestimonial].role"></p>
                </div>
              </div>
            </div>

            <!-- Next and Previous Buttons -->
            <div
              class="absolute bottom-12 px-2 lg:px-0 lg:bottom-1/2 left-0 lg:-left-[21px] w-full lg:w-[103%] transform translate-y-1/2 flex justify-between z-40">
              <button @click="prevTestimonial" class="p-4 bg-tresto-100 rounded-full hover:bg-tresto-200">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                  <path fill="currentColor" d="M15.41 16.58L10.83 12l4.58-4.59L14 6l-6 6l6 6z" />
                </svg>
              </button>
              <button @click="nextTestimonial" class="p-4 bg-tresto-100 rounded-full hover:bg-tresto-200">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                  <path fill="currentColor" d="M8.59 16.58L13.17 12L8.59 7.41L10 6l6 6l-6 6z" />
                </svg>
              </button>
            </div>

            <div
              class="hidden lg:block absolute right-0 top-1/2 transform -translate-y-1/2 h-128 w-[35rem]">
              <div class="relative h-full">
                <img
                  class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-20 w-full rounded-xl testimonial-image transition-opacity duration-500 ease-out"
                  :src="testimonials[activeTestimonial].image" alt="restaurants logos">
              </div>
            </div>
          </div>
        </div>
      </section>



      {{-- <div class="absolute top-1/2 -left-[21px] w-[103%] transform -translate-y-1/2 flex justify-between z-40">
              <button @click="prevTestimonial" class="p-4 bg-tresto-100 rounded-full hover:bg-tresto-200">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M15.41 16.58L10.83 12l4.58-4.59L14 6l-6 6l6 6z"/></svg>
              </button>
              <button @click="nextTestimonial" class="p-4 bg-tresto-100 rounded-full hover:bg-tresto-200">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M8.59 16.58L13.17 12L8.59 7.41L10 6l6 6l-6 6z"/></svg>
              </button>
            </div> --}}

      {{-- <section class="py-24 xl:py-36 overflow-hidden">
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
          <div
            class="hidden lg:block absolute right-0 rtl:right-auto rtl:left-0 top-1/2 transform -translate-y-1/2 h-128 w-96">
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
    </section> --}}

      <section id="features" class="bg-tresto-50 pt-24">
        <div class="container mx-auto px-4">
          <div data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000"
            data-aos-once="true" data-aos-easing="ease-in-out">
            <h1 class="text-center text-4xl lg:text-5xl font-bold ltr:font-mono rtl:font-body mb-4">
              {{ __('Découvrez les fonctionnalités') }}</h1>
            <p class="text-center text-gray-600 mb-28">
              {{ __('Des fonctionnalités innovantes conçues pour améliorer l\'experience de vos clients') }}
            </p>
          </div>
          <div class="flex flex-wrap -mx-4">
            <div data-aos="fade-up" data-aos-offset="200" data-aos-delay="100" data-aos-duration="1000"
              data-aos-once="true" data-aos-easing="ease-in-out" class="w-full md:w-1/2 lg:w-1/4 p-4">
              <div class="rounded-full w-12 h-12 flex items-center justify-center bg-tresto-500 mb-4 ml-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <path fill="white"
                    d="m8.1 13.34l2.83-2.83L3.91 3.5a4.01 4.01 0 0 0 0 5.66zm6.78-1.81c1.53.71 3.68.21 5.27-1.38c1.91-1.91 2.28-4.65.81-6.12c-1.46-1.46-4.2-1.1-6.12.81c-1.59 1.59-2.09 3.74-1.38 5.27L3.7 19.87l1.41 1.41L12 14.41l6.88 6.88l1.41-1.41L13.41 13z" />
                </svg>
              </div>
              <div class="relative pl-4 rtl:pr-4">
                <div class="absolute top-0 left-0 rtl:right-0 bg-tresto-500 w-0.5 h-6"></div>
                <h2 class="text-lg font-bold ltr:font-mono rtl:font-body mb-4">
                  {{ __('Plus de 6 Designs de Menus') }}</h2>
                <p class="text-gray-600">
                  {{ __("Choisissez parmi plus de 6 modèles de menus élégants et professionnels, adaptés à votre style et à l'image de votre restaurant.") }}
                </p>
              </div>
            </div>
            <div data-aos="fade-up" data-aos-offset="200" data-aos-delay="200" data-aos-duration="1000"
              data-aos-once="true" data-aos-easing="ease-in-out" class="w-full md:w-1/2 lg:w-1/4 p-4">
              <div class="rounded-full w-12 h-12 flex items-center justify-center bg-tresto-500 mb-4 ml-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <path fill="white"
                    d="M19.05 4.91A9.82 9.82 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01m-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.26 8.26 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.18 8.18 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23m4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07s.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28" />
                </svg>
                <path
                  d="M29.3332 29.3333H2.6665C2.11984 29.3333 1.6665 28.88 1.6665 28.3333C1.6665 27.7866 2.11984 27.3333 2.6665 27.3333H29.3332C29.8798 27.3333 30.3332 27.7866 30.3332 28.3333C30.3332 28.88 29.8798 29.3333 29.3332 29.3333Z"
                  fill="white"></path>
                <path
                  d="M18.5 28.8334H13.5V5.33335C13.5 4.6557 13.6406 4.1167 13.92 3.75652C14.1817 3.4193 14.6213 3.16669 15.4 3.16669H16.6C17.3787 3.16669 17.8183 3.4193 18.08 3.75652C18.3594 4.1167 18.5 4.6557 18.5 5.33335V28.8334Z"
                  fill="white" stroke="white"></path>
                <path
                  d="M4 13.3334V29.3334H9.33333V13.3334C9.33333 11.8667 8.8 10.6667 7.2 10.6667H6.13333C4.53333 10.6667 4 11.8667 4 13.3334Z"
                  fill="white"></path>
                <path
                  d="M22.6665 20V29.3333H27.9998V20C27.9998 18.5333 27.4665 17.3333 25.8665 17.3333H24.7998C23.1998 17.3333 22.6665 18.5333 22.6665 20Z"
                  fill="white"></path>
                </svg>
              </div>
              <div class="relative pl-4 rtl:pr-4">
                <div class="absolute top-0 left-0 rtl:right-0 bg-tresto-500 w-0.5 h-6"></div>
                <h2 class="text-lg font-bold ltr:font-mono rtl:font-body mb-4">
                  {{ __('Réception des Commandes via WhatsApp et Website') }}</h2>
                <p class="text-gray-600">
                  {{ __('Permettez à vos clients de passer des commandes directement via WhatsApp pour une expérience de commande encore plus conviviale.') }}
                </p>
              </div>
            </div>
            <div data-aos="fade-up" data-aos-offset="200" data-aos-delay="300" data-aos-duration="1000"
              data-aos-once="true" data-aos-easing="ease-in-out" class="w-full md:w-1/2 lg:w-1/4 p-4">
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
                <h2 class="text-lg font-bold ltr:font-mono rtl:font-body mb-4">{{ __('Interface adaptée aux mobiles') }}
                </h2>
                <p class="text-gray-600">
                  {{ __("Veillez à ce que votre menu soit agréable à regarder sur n'importe quel appareil. Le design responsive de TResto garantit une expérience de navigation transparente pour les clients sur smartphones, tablettes ou ordinateurs de bureau.") }}
                </p>
              </div>
            </div>
            <div data-aos="fade-up" data-aos-offset="200" data-aos-delay="400" data-aos-duration="1000"
              data-aos-once="true" data-aos-easing="ease-in-out" class="w-full md:w-1/2 lg:w-1/4 p-4">
              <div class="rounded-full w-12 h-12 flex items-center justify-center bg-tresto-500 mb-4 ml-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <path fill="white"
                    d="M19 7c0-1.1-.9-2-2-2h-3v2h3v2.65L13.52 14H10V9H6c-2.21 0-4 1.79-4 4v3h2c0 1.66 1.34 3 3 3s3-1.34 3-3h4.48L19 10.35zM4 14v-1c0-1.1.9-2 2-2h2v3zm3 3c-.55 0-1-.45-1-1h2c0 .55-.45 1-1 1" />
                  <path fill="white"
                    d="M5 6h5v2H5zm14 7c-1.66 0-3 1.34-3 3s1.34 3 3 3s3-1.34 3-3s-1.34-3-3-3m0 4c-.55 0-1-.45-1-1s.45-1 1-1s1 .45 1 1s-.45 1-1 1" />
                </svg>
              </div>
              <div class="relative pl-4 rtl:pr-4">
                <div class="absolute top-0 left-0 rtl:right-0 bg-tresto-500 w-0.5 h-6"></div>
                <h2 class="text-lg font-bold ltr:font-mono rtl:font-body mb-4">
                  {{ __('Gestion des Zones de Livraison et des Frais') }}
                </h2>
                <p class="text-gray-600">
                  {{ __('Définissez facilement les zones de livraison et ajustez les frais en fonction de chaque secteur pour une gestion optimale des livraisons.') }}
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="bg-tresto-50">
        <div class="container mx-auto px-4">

          <div class="flex flex-wrap -mx-4">
            <div data-aos="fade-up" data-aos-offset="200" data-aos-delay="100" data-aos-duration="1000"
              data-aos-once="true" data-aos-easing="ease-in-out" class="w-full md:w-1/2 lg:w-1/4 p-4">
              <div class="rounded-full w-12 h-12 flex items-center justify-center bg-tresto-500 mb-4 ml-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <path fill="white" d="M4 9h4v11H4zm12 4h4v7h-4zm-6-9h4v16h-4z" />
                </svg>
                </svg>
              </div>
              <div class="relative pl-4 rtl:pr-4">
                <div class="absolute top-0 left-0 rtl:right-0 bg-tresto-500 w-0.5 h-6"></div>
                <h2 class="text-lg font-bold ltr:font-mono rtl:font-body mb-4">
                  {{ __('Rapports Détaillés sur les Visiteurs et les Ventes') }}</h2>
                <p class="text-gray-600">
                  {{ __('Obtenez des analyses approfondies sur les visiteurs de votre menu en ligne et suivez vos ventes en temps réel pour optimiser vos opérations.') }}
                </p>
              </div>
            </div>
            <div data-aos="fade-up" data-aos-offset="200" data-aos-delay="200" data-aos-duration="1000"
              data-aos-once="true" data-aos-easing="ease-in-out" class="w-full md:w-1/2 lg:w-1/4 p-4">
              <div class="rounded-full w-12 h-12 flex items-center justify-center bg-tresto-500 mb-4 ml-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <path fill="white"
                    d="m20 7l.94-2.06L23 4l-2.06-.94L20 1l-.94 2.06L17 4l2.06.94zM8.5 7l.94-2.06L11.5 4l-2.06-.94L8.5 1l-.94 2.06L5.5 4l2.06.94zM20 12.5l-.94 2.06l-2.06.94l2.06.94l.94 2.06l.94-2.06L23 15.5l-2.06-.94zm-2.29-3.38l-2.83-2.83c-.2-.19-.45-.29-.71-.29s-.51.1-.71.29L2.29 17.46a.996.996 0 0 0 0 1.41l2.83 2.83c.2.2.45.3.71.3s.51-.1.71-.29l11.17-11.17c.39-.39.39-1.03 0-1.42m-3.54-.7l1.41 1.41L14.41 11L13 9.59zM5.83 19.59l-1.41-1.41L11.59 11L13 12.41z" />
                </svg>
              </div>
              <div class="relative pl-4 rtl:pr-4">
                <div class="absolute top-0 left-0 rtl:right-0 bg-tresto-500 w-0.5 h-6"></div>
                <h2 class="text-lg font-bold ltr:font-mono rtl:font-body mb-4">
                  {{ __('Gestion Simplifiée des Commandes') }}</h2>
                <p class="text-gray-600">
                  {{ __("Gérez toutes vos commandes, qu'elles soient sur place, à emporter ou en livraison, depuis un seul tableau de bord intuitif.") }}
                </p>
              </div>
            </div>
            <div data-aos="fade-up" data-aos-offset="200" data-aos-delay="300" data-aos-duration="1000"
              data-aos-once="true" data-aos-easing="ease-in-out" class="w-full md:w-1/2 lg:w-1/4 p-4">
              <div class="rounded-full w-12 h-12 flex items-center justify-center bg-tresto-500 mb-4 ml-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <path fill="white"
                    d="M9.5 6.5v3h-3v-3zM11 5H5v6h6zm-1.5 9.5v3h-3v-3zM11 13H5v6h6zm6.5-6.5v3h-3v-3zM19 5h-6v6h6zm-6 8h1.5v1.5H13zm1.5 1.5H16V16h-1.5zM16 13h1.5v1.5H16zm-3 3h1.5v1.5H13zm1.5 1.5H16V19h-1.5zM16 16h1.5v1.5H16zm1.5-1.5H19V16h-1.5zm0 3H19V19h-1.5zM22 7h-2V4h-3V2h5zm0 15v-5h-2v3h-3v2zM2 22h5v-2H4v-3H2zM2 2v5h2V4h3V2z" />
                </svg>
              </div>
              <div class="relative pl-4 rtl:pr-4">
                <div class="absolute top-0 left-0 rtl:right-0 bg-tresto-500 w-0.5 h-6"></div>
                <h2 class="text-lg font-bold ltr:font-mono rtl:font-body mb-4">
                  {{ __('Génération de QR Codes') }}</h2>
                <p class="text-gray-600">
                  {{ __("Créez facilement des QR codes personnalisés pour vos menus, permettant à vos clients d'accéder rapidement à vos plats.") }}
                </p>
              </div>
            </div>
            <div data-aos="fade-up" data-aos-offset="200" data-aos-delay="400" data-aos-duration="1000"
              data-aos-once="true" data-aos-easing="ease-in-out" class="w-full md:w-1/2 lg:w-1/4 p-4">
              <div class="rounded-full w-12 h-12 flex items-center justify-center bg-tresto-500 mb-4 ml-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <path fill="white"
                    d="M7 15h7v2H7zm0-4h10v2H7zm0-4h10v2H7zm12-4h-4.18C14.4 1.84 13.3 1 12 1s-2.4.84-2.82 2H5c-.14 0-.27.01-.4.04a2.01 2.01 0 0 0-1.44 1.19c-.1.23-.16.49-.16.77v14c0 .27.06.54.16.78s.25.45.43.64c.27.27.62.47 1.01.55c.13.02.26.03.4.03h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2m-7-.25c.41 0 .75.34.75.75s-.34.75-.75.75s-.75-.34-.75-.75s.34-.75.75-.75M19 19H5V5h14z" />
                </svg>
              </div>
              <div class="relative pl-4 rtl:pr-4">
                <div class="absolute top-0 left-0 rtl:right-0 bg-tresto-500 w-0.5 h-6"></div>
                <h2 class="text-lg font-bold ltr:font-mono rtl:font-body mb-4">
                  {{ __('Ajout et Modification des Articles et Prix du Menu') }}</h2>
                <p class="text-gray-600">
                  {{ __('Mettez à jour vos menus en quelques clics. Ajoutez de nouveaux plats ou modifiez les prix à tout moment, sans aucune difficulté.') }}
                </p>
              </div>
            </div>
          </div>
        </div>

        <div data-aos="fade-up" data-aos-offset="200" data-aos-delay="400" data-aos-duration="1000"
        data-aos-once="true" data-aos-easing="ease-in-out">
          <div class="flex justify-center py-12 px-4">
            <a
            class="w-full sm:w-auto text-center h-16 inline-flex items-center justify-center py-4 px-6 rounded-full bg-white border border-tresto-500 hover:border-tresto-500 font-bold ltr:font-mono rtl:font-body text-black focus:ring focus:ring-tresto-200 transition duration-200"
            href="{{ route('features', ['locale' => app()->getLocale()]) }}">{{ __('Voir plus de fonctionnalités') }}</a>
            </div>
        </div>
      </section>

      <x-front.cta text="Commencez dès aujourd'hui - Améliorez les opérations de votre restaurant" cta="Créez un compte GRATUIT maintenant !" />

      <x-front.footer />
    </div>
  </x-layouts.front>
