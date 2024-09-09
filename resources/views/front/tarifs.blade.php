@section('title', __('Fonctionnalités de TResto - Optimisez la Gestion de Votre Restaurant'))
@section('description', __("Explorez les fonctionnalités puissantes de TResto : création de menus en ligne, génération de QR codes, gestion des commandes, et plus encore pour améliorer l'efficacité de votre restaurant."))

<x-layouts.front>
  {{-- <x-slot:title>
    Tresto - Plateforme pour Gestion de Menus en Ligne
  </x-slot> --}}

  <div class="">
    <x-front.nav />
              
    <section id="pricing" class="py-24">
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
              
    <section class="py-24 bg-tresto-50">
      <div class="container mx-auto px-4">
        <div  data-aos="fade-up"
        data-aos-offset="200"
        data-aos-delay="50"
        data-aos-duration="1000"
        data-aos-easing="ease-in-out">
          <h1 class="text-center text-3xl lg:text-5xl font-bold font-heading mb-4">{{ __("Comment ça marche?")}}</h1>
          <p class="text-center text-gray-600 mb-20">{{ __("Quelles sont les étapes à suivre pour adhérer ?") }}</p>
        </div>
        <div class="flex flex-wrap -mx-4">
          <div data-aos="fade-up"
          data-aos-offset="150"
          data-aos-delay="50"
          data-aos-duration="1000"
          data-aos-easing="ease-in-out" class="w-full lg:w-1/3 p-4">
            <div class="border border-tresto-500 bg-white rounded-3xl px-4 lg:px-10 py-6 lg:py-12 relative overflow-hidden h-full max-w-md mx-auto">
              <div class="py-1 px-2 rounded-lg bg-tresto-500 inline-flex items-center gap-2 mb-6">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                  <path d="M11.2 1.33331H9.46667C7.33333 1.33331 6 2.66665 6 4.79998V7.49998H8.96L7.58 6.11998C7.48 6.01998 7.43333 5.89331 7.43333 5.76665C7.43333 5.63998 7.48 5.51331 7.58 5.41331C7.77333 5.21998 8.09333 5.21998 8.28667 5.41331L10.52 7.64665C10.7133 7.83998 10.7133 8.15998 10.52 8.35331L8.28667 10.5866C8.09333 10.78 7.77333 10.78 7.58 10.5866C7.38667 10.3933 7.38667 10.0733 7.58 9.87998L8.96 8.49998H6V11.2C6 13.3333 7.33333 14.6666 9.46667 14.6666H11.1933C13.3267 14.6666 14.66 13.3333 14.66 11.2V4.79998C14.6667 2.66665 13.3333 1.33331 11.2 1.33331Z" fill="white"></path>
                  <path d="M1.83337 7.5C1.56004 7.5 1.33337 7.72667 1.33337 8C1.33337 8.27333 1.56004 8.5 1.83337 8.5H6.00004V7.5H1.83337Z" fill="white"></path>
                </svg>
                <span class="text-white text-sm font-medium">{{ __("Etape I") }}</span>
              </div>
              <h2 class="text-3xl font-bold font-heading mb-6">{{ __("Inscription Facile") }}</h2>
              <p class="text-gray-600 pb-40">{{ __("Créez votre compte en un clin d'œil ! Il vous suffit de quelques informations, et vous êtes prêt à partir. Aucun besoin de carte de crédit pour commencer.") }}</p>
              <div class="absolute -bottom-6 right-4">
                <div class="flex justify-end gap-4 mb-4">
                  <div class="w-16 h-16 rounded-xl bg-tresto-50"></div>
                  <div class="w-16 h-16 rounded-xl bg-tresto-50"></div>
                  <div class="w-16 h-16 rounded-xl bg-tresto-50"></div>
                </div>
                <div class="flex gap-4">
                  <div class="w-16 h-16 rounded-xl bg-tresto-50"></div>
                  <div class="w-16 h-16 rounded-xl bg-tresto-50"></div>
                  <div class="w-16 h-16 rounded-xl bg-tresto-50"></div>
                  <div class="w-16 h-16 rounded-xl bg-tresto-50"></div>
                </div>
              </div>
            </div>
          </div>
          <div data-aos="fade-up"
          data-aos-offset="150"
          data-aos-delay="200"
          data-aos-duration="1000"
          data-aos-easing="ease-in-out" class="w-full lg:w-1/3 p-4">
            <div class="border border-tresto-500 bg-white rounded-3xl px-4 lg:px-10 py-6 lg:py-12 relative overflow-hidden h-full max-w-md mx-auto">
              <div class="py-1 px-2 rounded-lg bg-tresto-500 inline-flex items-center gap-2 mb-6">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                  <path d="M8.00004 1.33331C4.32004 1.33331 1.33337 4.31998 1.33337 7.99998C1.33337 11.68 4.32004 14.6666 8.00004 14.6666C11.68 14.6666 14.6667 11.68 14.6667 7.99998C14.6667 4.31998 11.68 1.33331 8.00004 1.33331ZM8.00004 11.3333C6.16004 11.3333 4.66671 9.83998 4.66671 7.99998C4.66671 6.15998 6.16004 4.66665 8.00004 4.66665C9.84004 4.66665 11.3334 6.15998 11.3334 7.99998C11.3334 9.83998 9.84004 11.3333 8.00004 11.3333Z" fill="white"></path>
                  <path d="M7.99996 4.66669V11.3334C6.15996 11.3334 4.66663 9.84002 4.66663 8.00002C4.66663 6.16002 6.15996 4.66669 7.99996 4.66669Z" fill="white"></path>
                </svg>
                <span class="text-white text-sm font-medium">{{ __("Etape II") }}</span>
              </div>
              <h2 class="text-3xl font-bold font-heading mb-6">{{ __("Personnaliser le menu") }}</h2>
              <p class="text-gray-600 pb-40">{{ __("Ajoutez vos plats, ajustez les prix, et choisissez un design qui vous plaît. Notre interface est super intuitive, donc tout est prêt en un rien de temps.") }} </p>
              <div class="absolute -bottom-6 right-4">
                <div class="flex justify-center gap-4 mb-4">
                  <div class="w-16 h-16 rounded-xl bg-tresto-50"></div>
                  <div class="w-16 h-16 rounded-xl bg-tresto-50"></div>
                </div>
                <div class="flex gap-4">
                  <div class="w-16 h-16 rounded-xl bg-tresto-50"></div>
                  <div class="w-16 h-16 rounded-xl bg-tresto-50"></div>
                  <div class="w-16 h-16 rounded-xl bg-tresto-50"></div>
                  <div class="w-16 h-16 rounded-xl bg-tresto-50"></div>
                </div>
              </div>
            </div>
          </div>
          <div data-aos="fade-up"
          data-aos-offset="150"
          data-aos-delay="400"
          data-aos-duration="1000"
          data-aos-easing="ease-in-out" class="w-full lg:w-1/3 p-4">
            <div class="border border-tresto-500 bg-white rounded-3xl px-4 lg:px-10 py-6 lg:py-12 relative overflow-hidden h-full max-w-md mx-auto">
              <div class="py-1 px-2 rounded-lg bg-tresto-500 inline-flex items-center gap-2 mb-6">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                  <path d="M14.6667 3.23335V11.16C14.6667 11.8067 14.14 12.4 13.4933 12.48L13.2867 12.5067C12.1933 12.6533 10.6533 13.1067 9.41333 13.6267C8.98 13.8067 8.5 13.48 8.5 13.0067V3.73335C8.5 3.48668 8.64 3.26002 8.86 3.14002C10.08 2.48002 11.9267 1.89335 13.18 1.78668H13.22C14.02 1.78668 14.6667 2.43335 14.6667 3.23335Z" fill="white"></path>
                  <path d="M7.13999 3.14002C5.91999 2.48002 4.07333 1.89335 2.81999 1.78668H2.77333C1.97333 1.78668 1.32666 2.43335 1.32666 3.23335V11.16C1.32666 11.8067 1.85333 12.4 2.49999 12.48L2.70666 12.5067C3.79999 12.6533 5.33999 13.1067 6.57999 13.6267C7.01333 13.8067 7.49333 13.48 7.49333 13.0067V3.73335C7.49333 3.48002 7.35999 3.26002 7.13999 3.14002ZM3.33333 5.16002H4.83333C5.10666 5.16002 5.33333 5.38668 5.33333 5.66002C5.33333 5.94002 5.10666 6.16002 4.83333 6.16002H3.33333C3.05999 6.16002 2.83333 5.94002 2.83333 5.66002C2.83333 5.38668 3.05999 5.16002 3.33333 5.16002ZM5.33333 8.16002H3.33333C3.05999 8.16002 2.83333 7.94002 2.83333 7.66002C2.83333 7.38668 3.05999 7.16002 3.33333 7.16002H5.33333C5.60666 7.16002 5.83333 7.38668 5.83333 7.66002C5.83333 7.94002 5.60666 8.16002 5.33333 8.16002Z" fill="white"></path>
                </svg>
                <span class="text-white text-sm font-medium">{{ __("Etape III") }}</span>
              </div>
              <h2 class="text-3xl font-bold font-heading mb-6">{{ __("Lancement") }}</h2>
              <p class="text-gray-600 pb-40">{{ __("Mettez votre menu en ligne et commencez à recevoir des commandes tout de suite. Vous gérez tout depuis un tableau de bord clair et accessible depuis n'importe quel appareil.") }}</p>
              <div class="absolute -bottom-6 right-4">
                <div class="flex justify-end gap-4 mb-4">
                  <div class="w-16 h-16 rounded-xl bg-tresto-50"></div>
                  <div class="w-16 h-16 rounded-xl bg-tresto-50"></div>
                  <div class="w-16 h-16 rounded-xl bg-tresto-50"></div>
                </div>
                <div class="flex gap-4">
                  <div class="w-16 h-16 rounded-xl bg-tresto-50"></div>
                  <div class="w-16 h-16 rounded-xl bg-tresto-50"></div>
                  <div class="w-16 h-16 rounded-xl bg-tresto-50"></div>
                  <div class="w-16 h-16 rounded-xl bg-tresto-50"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
              
    <x-front.cta text="Commencez dès aujourd'hui - Améliorez les opérations de votre restaurant" cta="Créez un compte GRATUIT maintenant !" />

    <x-front.footer />
  </div>
</x-layouts.front>