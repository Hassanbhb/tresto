@section('title', __('Fonctionnalités de Tresto - Optimisez la Gestion de Votre Restaurant'))
@section('description', __("Explorez les fonctionnalités puissantes de Tresto : création de menus en ligne, génération de QR codes, gestion des commandes, et plus encore pour améliorer l'efficacité de votre restaurant."))

<x-layouts.front>
  {{-- <x-slot:title>
    Tresto - Plateforme pour Gestion de Menus en Ligne
  </x-slot> --}}

  <div class="">
    <x-front.nav />
              
    <section class="py-24">
      <div class="container mx-auto px-4">
        <p class="uppercase text-tresto-500 text-center text-sm font-bold font-heading mb-4">{{ __('FEATURES') }}</p>
        <h1 class="text-center text-4xl lg:text-5xl font-bold font-heading mb-24">{{ __("Fonctionnalités Spéciales de Tresto") }}</h1>
        <div class="flex flex-wrap -mx-4">
          <div  data-aos="fade-up"
          data-aos-offset="200"
          data-aos-delay="50"
          data-aos-duration="1000"
          data-aos-easing="ease-in-out" class="w-full lg:w-1/2 px-4">
            <div class="flex flex-col h-full">
              <div class="pb-4 ltr:border-l rtl:border-r border-dashed border-gray-100">
                <div class="rounded-2xl w-14 h-14 flex items-center justify-center bg-tresto-500 ltr:ml-4 rtl:mr-4">
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="white" d="M4 9h4v11H4zm12 4h4v7h-4zm-6-9h4v16h-4z"/></svg>
                </div>
              </div>
              <div class="relative ltr:pl-4 rtl:pr-4 pb-12 ltr:border-l rtl:border-r border-dashed border-gray-100 flex-1">
                <div class="absolute top-0 -left-px rtl:right-0 bg-tresto-500 w-0.5 h-6"></div>
                <h2 class="text-2xl font-bold font-heading mb-4">{{ __("Réception des Commandes via WhatsApp et Website") }}</h2>
                <p class="text-gray-600">{{ __("Permettez à vos clients de passer des commandes directement via WhatsApp pour une expérience de commande encore plus conviviale.") }}</p>
              </div>
            </div>
          </div>
          <div  data-aos="fade-up"
          data-aos-offset="100"
          data-aos-delay="100"
          data-aos-duration="1000"
          data-aos-easing="ease-in-out" class="w-full lg:w-1/2 px-4">
            <div class="flex flex-col h-full">
              <div class="pb-4 border-l border-dashed border-gray-100 lg:border-transparent">
                <div class="rounded-2xl w-14 h-14 flex items-center justify-center bg-tresto-500 ltr:ml-4 rtl:mr-4">
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="white" d="m20 7l.94-2.06L23 4l-2.06-.94L20 1l-.94 2.06L17 4l2.06.94zM8.5 7l.94-2.06L11.5 4l-2.06-.94L8.5 1l-.94 2.06L5.5 4l2.06.94zM20 12.5l-.94 2.06l-2.06.94l2.06.94l.94 2.06l.94-2.06L23 15.5l-2.06-.94zm-2.29-3.38l-2.83-2.83c-.2-.19-.45-.29-.71-.29s-.51.1-.71.29L2.29 17.46a.996.996 0 0 0 0 1.41l2.83 2.83c.2.2.45.3.71.3s.51-.1.71-.29l11.17-11.17c.39-.39.39-1.03 0-1.42m-3.54-.7l1.41 1.41L14.41 11L13 9.59zM5.83 19.59l-1.41-1.41L11.59 11L13 12.41z"/></svg>
                </div>
              </div>
              <div class="relative ltr:pl-4 rtl:pr-4 pb-12 ltr:border-l rtl:border-r border-dashed border-gray-100 flex-1">
                <div class="absolute top-0 -left-px rtl:right-0 bg-tresto-500 w-0.5 h-6"></div>
                <h2 class="text-2xl font-bold font-heading mb-4">{{ __("Gestion Simplifiée des Commandes") }}</h2>
                <p class="text-gray-600">{{ __("Gérez toutes vos commandes, qu'elles soient sur place, à emporter ou en livraison, depuis un seul tableau de bord intuitif.") }}</p>
              </div>
            </div>
          </div>
          <div  data-aos="fade-up"
          data-aos-offset="100"
          data-aos-delay="200"
          data-aos-duration="1000"
          data-aos-easing="ease-in-out" class="w-full lg:w-1/2 px-4">
            <div class="flex flex-col h-full">
              <div class="pb-4 border-l border-dashed border-gray-100">
                <div class="rounded-2xl w-14 h-14 flex items-center justify-center bg-tresto-500 ltr:ml-4 rtl:mr-4">
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="white" d="m8.1 13.34l2.83-2.83L3.91 3.5a4.01 4.01 0 0 0 0 5.66zm6.78-1.81c1.53.71 3.68.21 5.27-1.38c1.91-1.91 2.28-4.65.81-6.12c-1.46-1.46-4.2-1.1-6.12.81c-1.59 1.59-2.09 3.74-1.38 5.27L3.7 19.87l1.41 1.41L12 14.41l6.88 6.88l1.41-1.41L13.41 13z"/></svg>
                </div>
              </div>
              <div class="relative ltr:pl-4 rtl:pr-4 pb-12 ltr:border-l rtl:border-r border-dashed border-gray-100 flex-1">
                <div class="absolute top-0 -left-px rtl:right-0 bg-tresto-500 w-0.5 h-6"></div>
                <h2 class="text-2xl font-bold font-heading mb-4">{{ __("Interface adaptée aux mobiles")}} </h2>
                <p class="text-gray-600">{{ __("Veillez à ce que votre menu soit agréable à regarder sur n'importe quel appareil. Le design responsive de Tresto garantit une expérience de navigation transparente pour les clients sur smartphones, tablettes ou ordinateurs de bureau.") }}</p>
              </div>
            </div>
          </div>
          <div data-aos="fade-up"
          data-aos-offset="100"
          data-aos-delay="300"
          data-aos-duration="1000"
          data-aos-easing="ease-in-out" class="w-full lg:w-1/2 px-4">
            <div class="flex flex-col h-full">
              <div class="pb-4 ltr:border-l rtl:border-r border-dashed border-gray-100">
                <div class="rounded-2xl w-14 h-14 flex items-center justify-center bg-tresto-500 ltr:ml-4 rtl:mr-4">
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="white" d="M19.05 4.91A9.82 9.82 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01m-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.26 8.26 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.18 8.18 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23m4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07s.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28"/></svg>
                    <path d="M29.3332 29.3333H2.6665C2.11984 29.3333 1.6665 28.88 1.6665 28.3333C1.6665 27.7866 2.11984 27.3333 2.6665 27.3333H29.3332C29.8798 27.3333 30.3332 27.7866 30.3332 28.3333C30.3332 28.88 29.8798 29.3333 29.3332 29.3333Z" fill="white"></path>
                    <path d="M18.5 28.8334H13.5V5.33335C13.5 4.6557 13.6406 4.1167 13.92 3.75652C14.1817 3.4193 14.6213 3.16669 15.4 3.16669H16.6C17.3787 3.16669 17.8183 3.4193 18.08 3.75652C18.3594 4.1167 18.5 4.6557 18.5 5.33335V28.8334Z" fill="white" stroke="white"></path>
                    <path d="M4 13.3334V29.3334H9.33333V13.3334C9.33333 11.8667 8.8 10.6667 7.2 10.6667H6.13333C4.53333 10.6667 4 11.8667 4 13.3334Z" fill="white"></path>
                    <path d="M22.6665 20V29.3333H27.9998V20C27.9998 18.5333 27.4665 17.3333 25.8665 17.3333H24.7998C23.1998 17.3333 22.6665 18.5333 22.6665 20Z" fill="white"></path>
                  </svg>
                </div>
              </div>
              <div class="relative ltr:pl-4 rtl:pr-4 pb-12 ltr:border-l rtl:border-r border-dashed border-gray-100 flex-1">
                <div class="absolute top-0 -left-px rtl:right-0 bg-tresto-500 w-0.5 h-6"></div>
                <h2 class="text-2xl font-bold font-heading mb-4">{{ __("Gestion des Zones de Livraison et des Frais") }}</h2>
                <p class="text-gray-600">{{ __("Définissez facilement les zones de livraison et ajustez les frais en fonction de chaque secteur pour une gestion optimale des livraisons.") }}</p>
              </div>
            </div>
          </div>
          <div  data-aos="fade-up"
          data-aos-offset="100"
          data-aos-delay="400"
          data-aos-duration="1000"
          data-aos-easing="ease-in-out" class="w-full lg:w-1/2 px-4">
            <div class="flex flex-col h-full">
              <div class="pb-4 ltr:border-l rtl:border-r border-dashed border-gray-100">
                <div class="rounded-2xl w-14 h-14 flex items-center justify-center bg-tresto-500 ltr:ml-4 rtl:mr-4">
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="white" d="M9.5 6.5v3h-3v-3zM11 5H5v6h6zm-1.5 9.5v3h-3v-3zM11 13H5v6h6zm6.5-6.5v3h-3v-3zM19 5h-6v6h6zm-6 8h1.5v1.5H13zm1.5 1.5H16V16h-1.5zM16 13h1.5v1.5H16zm-3 3h1.5v1.5H13zm1.5 1.5H16V19h-1.5zM16 16h1.5v1.5H16zm1.5-1.5H19V16h-1.5zm0 3H19V19h-1.5zM22 7h-2V4h-3V2h5zm0 15v-5h-2v3h-3v2zM2 22h5v-2H4v-3H2zM2 2v5h2V4h3V2z"/></svg>
                </div>
              </div>
              <div class="relative ltr:pl-4 rtl:pr-4 pb-12 ltr:border-l rtl:border-r border-dashed border-gray-100 flex-1">
                <div class="absolute top-0 -left-px rtl:right-0  bg-tresto-500 w-0.5 h-6"></div>
                <h2 class="text-2xl font-bold font-heading mb-4">{{ __("Rapports Détaillés sur les Visiteurs et les Ventes") }}</h2>
                <p class="text-gray-600">{{ __("Obtenez des analyses approfondies sur les visiteurs de votre menu en ligne et suivez vos ventes en temps réel pour optimiser vos opérations.") }}</p>
              </div>
            </div>
          </div>
          <div  data-aos="fade-up"
          data-aos-offset="100"
          data-aos-delay="500"
          data-aos-duration="1000"
          data-aos-easing="ease-in-out" class="w-full lg:w-1/2 px-4">
            <div class="flex flex-col h-full">
              <div class="pb-4 ltr:border-l rtl:border-r border-dashed border-gray-100">
                <div class="rounded-2xl w-14 h-14 flex items-center justify-center bg-tresto-500 ltr:ml-4 rtl:mr-4">
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="white" d="M3 11h8V3H3zm2-6h4v4H5zm8-2v8h8V3zm6 6h-4V5h4zM3 21h8v-8H3zm2-6h4v4H5zm13-2h-2v3h-3v2h3v3h2v-3h3v-2h-3z"/></svg>
                    <path d="M29.3332 29.3333H2.6665C2.11984 29.3333 1.6665 28.88 1.6665 28.3333C1.6665 27.7866 2.11984 27.3333 2.6665 27.3333H29.3332C29.8798 27.3333 30.3332 27.7866 30.3332 28.3333C30.3332 28.88 29.8798 29.3333 29.3332 29.3333Z" fill="white"></path>
                    <path d="M18.5 28.8334H13.5V5.33335C13.5 4.6557 13.6406 4.1167 13.92 3.75652C14.1817 3.4193 14.6213 3.16669 15.4 3.16669H16.6C17.3787 3.16669 17.8183 3.4193 18.08 3.75652C18.3594 4.1167 18.5 4.6557 18.5 5.33335V28.8334Z" fill="white" stroke="white"></path>
                    <path d="M4 13.3334V29.3334H9.33333V13.3334C9.33333 11.8667 8.8 10.6667 7.2 10.6667H6.13333C4.53333 10.6667 4 11.8667 4 13.3334Z" fill="white"></path>
                    <path d="M22.6665 20V29.3333H27.9998V20C27.9998 18.5333 27.4665 17.3333 25.8665 17.3333H24.7998C23.1998 17.3333 22.6665 18.5333 22.6665 20Z" fill="white"></path>
                  </svg>
                </div>
              </div>
              <div class="relative ltr:pl-4 rtl:pr-4 pb-12 ltr:border-l rtl:border-r border-dashed border-gray-100 flex-1">
                <div class="absolute top-0 -left-px rtl:right-0  bg-tresto-500 w-0.5 h-6"></div>
                <h2 class="text-2xl font-bold font-heading mb-4">{{ __("Ajout et Modification des Articles et Prix du Menu") }}</h2>
                <p class="text-gray-600">{{ __("Mettez à jour vos menus en quelques clics. Ajoutez de nouveaux plats ou modifiez les prix à tout moment, sans aucune difficulté.") }}</p>
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
              
    <section class="py-12">
      <div class="container mx-auto px-4">
        <div class="py-28 relative">
          <div class="hidden sm:block absolute top-6 left-0 bg-tresto-100 rounded-xl px-6 pt-4">
            <img class="h-16 sm:h-20 md:h-auto" src="solstice-assets/images/cta/men-picture1.png" alt="">
          </div>
          <div class="absolute top-0 right-0 bg-purple-900 rounded-xl px-6 pt-4">
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
              <svg xmlns="http://www.w3.org/2000/svg" width="68" height="34" viewbox="0 0 68 34" fill="none">
                <path d="M2 34C1.99977 29.7976 2.8273 25.6364 4.43533 21.7539C6.04336 17.8713 8.40039 14.3436 11.3718 11.3721C14.3433 8.40056 17.8709 6.04346 21.7533 4.43539C25.6358 2.82732 29.7969 1.99977 33.9991 2C51.6726 2 66 16.3261 66 34" stroke="#530031" stroke-width="4" stroke-miterlimit="10"></path>
                <path d="M9.22571 34C9.22571 27.4084 11.8358 21.0868 16.4819 16.4258C21.128 11.7649 27.4294 9.14639 33.9999 9.14639C40.5704 9.14639 46.8718 11.7649 51.5179 16.4258C56.164 21.0868 58.7741 27.4084 58.7741 34" stroke="#FF7100" stroke-width="4" stroke-miterlimit="10"></path>
                <path d="M16.1339 34C16.1339 29.2617 18.0162 24.7174 21.3667 21.3669C24.7173 18.0163 29.2616 16.134 33.9999 16.134C38.7383 16.134 43.2826 18.0163 46.6331 21.3669C49.9836 24.7174 51.8659 29.2617 51.8659 34" stroke="#FFC96D" stroke-width="4" stroke-miterlimit="10"></path>
              </svg>
            </div> --}}
            <h1 class="text-4xl lg:text-5xl mb-10 font-bold font-heading text-center max-w-lg lg:max-w-3xl mx-auto">{{ __("Explorez Nos Outils Puissants et Simplifiez Votre Gestion – Commencez Maintenant !") }}</h1>
            <div class="flex justify-center"><a class="w-full sm:w-auto text-center py-5 px-8 rounded-full h-16 inline-flex items-center justify-center bg-tresto-500 border border-tresto-600 shadow font-bold font-heading text-white hover:bg-tresto-600 focus:ring focus:ring-tresto-200 transition duration-200" href="#">{{ __("Crée un compte gratuitement") }} </a></div>
          </div>
        </div>
      </div>
    </section>
              
    <x-front.footer />
  </div>
</x-layouts.front>