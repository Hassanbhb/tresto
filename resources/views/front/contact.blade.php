@section('title', __('Contactez Tresto - Assistance et Support pour Gestion de Menus en Ligne'))
@section('description', __("Contactez Tresto pour toute assistance ou question concernant la gestion de vos menus en ligne et commandes avec notre plateforme."))

<x-layouts.front>
  <div class="">

  <x-front.nav />

  <section class="overflow-hidden">
    <div class="container px-4 mx-auto pt-16 pb-20">
      <div class="flex flex-wrap -mx-4">
        <div class="w-full lg:w-1/2 p-4">
          <div class="max-w-xl mx-auto">
            <h1 class="text-3xl lg:text-5xl font-bold font-heading mb-4">{{ __("Contactez nous") }}</h1>
            <p class="text-gray-600 mb-10">{{ __("Soumettez vos informations et nous vous contacterons dès que possible.") }}</p>
            <div class="mb-10 flex items-center gap-1">
              <div class="bg-tresto-200 rounded-3xl h-px w-3"></div>
              <svg xmlns="http://www.w3.org/2000/svg" width="3" height="3" viewbox="0 0 3 3"
                fill="none">
                <circle cx="1.5" cy="1.5" r="1.5" fill="#FFA632"></circle>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="3" height="3" viewbox="0 0 3 3"
                fill="none">
                <circle cx="1.5" cy="1.5" r="1.5" fill="#FFA632"></circle>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="3" height="3" viewbox="0 0 3 3"
                fill="none">
                <circle cx="1.5" cy="1.5" r="1.5" fill="#FFA632"></circle>
              </svg>
              <div class="bg-tresto-200 rounded-3xl h-px w-3"></div>
            </div>
            <div class="flex items-center flex-wrap gap-3 mb-4">
              <div class="bg-tresto-500 rounded-xl p-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 20 20"
                  fill="none">
                  <path
                    d="M18.3333 17.7083H1.66666C1.32499 17.7083 1.04166 17.9916 1.04166 18.3333C1.04166 18.675 1.32499 18.9583 1.66666 18.9583H18.3333C18.675 18.9583 18.9583 18.675 18.9583 18.3333C18.9583 17.9916 18.675 17.7083 18.3333 17.7083Z"
                    fill="white"></path>
                  <path
                    d="M14.1667 1.66669H5.83333C3.33333 1.66669 2.5 3.15835 2.5 5.00002V18.3334H17.5V5.00002C17.5 3.15835 16.6667 1.66669 14.1667 1.66669ZM8.33333 14.375H5.83333C5.49167 14.375 5.20833 14.0917 5.20833 13.75C5.20833 13.4084 5.49167 13.125 5.83333 13.125H8.33333C8.675 13.125 8.95833 13.4084 8.95833 13.75C8.95833 14.0917 8.675 14.375 8.33333 14.375ZM8.33333 10.625H5.83333C5.49167 10.625 5.20833 10.3417 5.20833 10C5.20833 9.65835 5.49167 9.37502 5.83333 9.37502H8.33333C8.675 9.37502 8.95833 9.65835 8.95833 10C8.95833 10.3417 8.675 10.625 8.33333 10.625ZM8.33333 6.87502H5.83333C5.49167 6.87502 5.20833 6.59169 5.20833 6.25002C5.20833 5.90835 5.49167 5.62502 5.83333 5.62502H8.33333C8.675 5.62502 8.95833 5.90835 8.95833 6.25002C8.95833 6.59169 8.675 6.87502 8.33333 6.87502ZM14.1667 14.375H11.6667C11.325 14.375 11.0417 14.0917 11.0417 13.75C11.0417 13.4084 11.325 13.125 11.6667 13.125H14.1667C14.5083 13.125 14.7917 13.4084 14.7917 13.75C14.7917 14.0917 14.5083 14.375 14.1667 14.375ZM14.1667 10.625H11.6667C11.325 10.625 11.0417 10.3417 11.0417 10C11.0417 9.65835 11.325 9.37502 11.6667 9.37502H14.1667C14.5083 9.37502 14.7917 9.65835 14.7917 10C14.7917 10.3417 14.5083 10.625 14.1667 10.625ZM14.1667 6.87502H11.6667C11.325 6.87502 11.0417 6.59169 11.0417 6.25002C11.0417 5.90835 11.325 5.62502 11.6667 5.62502H14.1667C14.5083 5.62502 14.7917 5.90835 14.7917 6.25002C14.7917 6.59169 14.5083 6.87502 14.1667 6.87502Z"
                    fill="white"></path>
                </svg>
              </div>
              <h2 class="text-xl font-bold font-heading">Technopek</h2>
            </div>
            <p class="text-gray-600 mb-10">Appt3, 1ère étage Imm109 Abdellah Genoun, Hay Essalam, Agadir 80000, Maroc</p>
            <div class="rounded-3xl border border-gray-100 shadow-sm py-8">
              <div class="relative">
                <div class="absolute top-0 left-0 bg-tresto-500 w-1 h-8"></div>
                <div class="px-8">
                  <h2 class="text-xl font-bold font-heading mb-6">{{ __("Notre équipe est disponible par téléphon & WhatsApp")}}</h2>
                  <a class="w-full sm:w-auto h-12 py-3 px-5 rounded-full bg-tresto-600 border border-tresto-700 hover:bg-tresto-800 focus:ring focus:ring-tresto-800 transition duration-200 inline-flex items-center justify-center gap-2"
                    href="tel:+212664645348">
                    <span class="text-white text-sm font-semibold">+212 6 64 64 53 48</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 20 20"
                      fill="none">
                      <path d="M5 10H15.4167M15.4167 10L10.4167 5M15.4167 10L10.4167 15" stroke="white"
                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full lg:w-1/2 p-4">
          <form action="">
            <div class="border border-gray-100 rounded-3xl p-6 max-w-xl mx-auto">
              <h2 class="text-3xl text-center font-bold font-heading mb-4">{{ __("Prendre contact") }}</h2>
              <p class="text-center text-gray-600 mb-16">{{ __('Fill out the form to connect with a member of our team.') }}</p>
              <div class="flex flex-wrap -mx-4">
                <div class="w-full lg:w-1/2 p-4">
                  <label class="text-sm font-medium mb-2 block" for="textInput1">{{ __("Prénom")}}</label>
                  <input
                    class="w-full rounded-full p-4 outline-none border border-gray-100 shadow placeholder-gray-500 focus:ring focus:ring-tresto-200 transition duration-200"
                    id="textInput1" type="text" placeholder="{{ __("Prénom") }}">
                </div>
                <div class="w-full lg:w-1/2 p-4">
                  <label class="text-sm font-medium mb-2 block" for="textInput2">{{ __("Nom") }}</label>
                  <input
                    class="w-full rounded-full p-4 outline-none border border-gray-100 shadow placeholder-gray-500 focus:ring focus:ring-tresto-200 transition duration-200"
                    id="textInput2" type="text" placeholder="{{ __("Nom")}}">
                </div>
              </div>
              <label class="text-sm font-medium mb-2 block" for="textInput3">{{ __("Email") }}</label>
              <input
                class="w-full mb-4 rounded-full p-4 outline-none border border-gray-100 shadow placeholder-gray-500 focus:ring focus:ring-tresto-200 transition duration-200"
                id="textInput3" type="text" placeholder="john@email.com">
              <label class="text-sm font-medium mb-2 block" for="textInput4">{{ __("Message") }}</label>
              <textarea
                class="resize-none w-full rounded-3xl p-4 mb-8 outline-none border border-gray-100 placeholder-gray-500 focus:ring focus:ring-tresto-200 transition duration-200"
                id="textInput4" rows="5" placeholder="{{ __("Enter your message")}}"></textarea>
              <button
                class="py-4 px-6 rounded-full w-full h-14 inline-flex items-center justify-center text-center mb-8 bg-tresto-500 border border-tresto-600 font-bold font-heading text-white hover:bg-tresto-600 focus:ring focus:ring-tresto-200 transition duration-200"
                type="submit">{{ __("Submit") }}</button>
              <p class="text-gray-500 text-sm">
                <span>{{("Nous traitons vos informations conformément à notre")}}</span>
                <span></span>
                <span class="text-sm font-semibold">{{ __("politique de confidentialité")}}</span>
              </p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <section class="py-24 bg-tresto-100">
    <div class="container mx-auto px-4">
      <div class="flex flex-wrap -mx-4">
        <div class="w-full lg:w-1/3 p-4">
          <h1 class="text-4xl lg:text-5xl font-bold font-heading mb-6">{{ __("FAQ")}}</h1>
          <p class="text-xl font-bold font-heading max-w-xs">
            <span>{{ __("Vous avez encore des questions ?") }}</span>
            {{-- <span></span>
            <a class="text-tresto-500 hover:underline" href="#">{{ __("help center") }}</a>
            <span></span>
            <span>{{ __("to get in touch.") }}</span> --}}
          </p>
        </div>
        <div class="w-full lg:w-2/3 p-4">
          <div class="space-y-4">
            <details class="group [&_summary::-webkit-details-marker]:hidden bg-white rounded-3xl">
              <summary
                class="flex cursor-pointer items-center justify-between gap-1.5 rounded-3xl bg-white text-black p-6"
              >
                <h2 class="text-lg font-bold font-heading">{{ __("Est-ce que je peux personnaliser l'apparence de mon menu en ligne ?") }} </h2>
          
                <svg
                  class="size-5 shrink-0 transition duration-300 group-open:-rotate-180"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
              </summary>
          
              <p class="p-6 leading-relaxed text-gray-700">
                {{ __("Tout à fait. Vous avez la possibilité de choisir parmi plus de 6 designs de menus et de personnaliser les couleurs, les polices et la mise en page pour refléter l'identité de votre restaurant.") }}
              </p>
            </details>
          
            <details class="group [&_summary::-webkit-details-marker]:hidden bg-white rounded-3xl">
              <summary
                class="flex cursor-pointer items-center justify-between gap-1.5 rounded-3xl bg-white text-black p-6"
              >
                <h2 class="text-lg font-bold font-heading">{{ __(" Combien de temps faut-il pour configurer mon menu en ligne ?") }} </h2>
          
                <svg
                  class="size-5 shrink-0 transition duration-300 group-open:-rotate-180"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
              </summary>
          
              <p class="p-6 leading-relaxed text-gray-700">
                {{ __("La configuration de votre menu en ligne est rapide et simple. En quelques clics, vous pouvez ajouter des articles, télécharger des images, et ajuster les prix. La plupart des utilisateurs peuvent configurer leur menu en moins de 30 minutes.") }}
              </p>
            </details>

            <details class="group [&_summary::-webkit-details-marker]:hidden bg-white rounded-3xl">
              <summary
                class="flex cursor-pointer items-center justify-between gap-1.5 rounded-3xl bg-white text-black p-6"
              >
                <h2 class="text-lg font-bold font-heading">{{ __("Comment la plateforme facilite-t-elle la gestion des commandes ?") }} </h2>
          
                <svg
                  class="size-5 shrink-0 transition duration-300 group-open:-rotate-180"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
              </summary>
          
              <p class="p-6 leading-relaxed text-gray-700">
                {{ __("Notre tableau de bord centralisé regroupe toutes les commandes en un seul endroit, ce qui simplifie leur suivi et leur gestion. Vous pouvez visualiser les commandes en cours, traiter les paiements, et gérer les livraisons sans effort.") }}
              </p>
            </details>

            <details class="group [&_summary::-webkit-details-marker]:hidden bg-white rounded-3xl">
              <summary
                class="flex cursor-pointer items-center justify-between gap-1.5 rounded-3xl bg-white text-black p-6"
              >
                <h2 class="text-lg font-bold font-heading">{{ __("Puis-je accéder à la plateforme depuis n'importe quel appareil ?") }} </h2>
          
                <svg
                  class="size-5 shrink-0 transition duration-300 group-open:-rotate-180"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
              </summary>
          
              <p class="p-6 leading-relaxed text-gray-700">
                {{ __("Oui, Tresto est accessible depuis n'importe quel appareil avec une connexion internet, que ce soit un ordinateur, une tablette ou un smartphone. Vous pouvez gérer votre restaurant en toute simplicité, où que vous soyez.") }}
              </p>
            </details>

            
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
        <div class="absolute top-0 right-0 bg-tresto-600 rounded-xl px-6 pt-4">
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
          <h1 class="text-4xl lg:text-5xl mb-10 font-bold font-heading text-center max-w-lg lg:max-w-3xl mx-auto">{{ __("Rejoignez-nous et améliorer l'efficacité de votre restaurant.") }}</h1>
          <div class="flex justify-center"><a
              class="w-full sm:w-auto text-center py-5 px-8 rounded-full h-16 inline-flex items-center justify-center bg-tresto-500 border border-tresto-600 shadow font-bold font-heading text-white hover:bg-tresto-600 focus:ring focus:ring-tresto-200 transition duration-200"
              href="#">{{ __(" Crée un compte gratuitement !") }}</a></div>
        </div>
      </div>
    </div>
  </section>

  <x-front.footer />
  </div>
</x-layouts.front>
