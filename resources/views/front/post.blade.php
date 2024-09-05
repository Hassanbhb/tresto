<x-layouts.front>
  <div class="">             
    <x-front.nav />    
    <section class="overflow-hidden py-24 relative">
      <div class="absolute top-0 left-0 w-full bg-tresto-900 pb-40 md:pb-24">
        <div class="flex justify-center gap-6">
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
      </div>
      <div class="relative z-10">
        <div class="container mx-auto px-4">
          <div class="flex justify-center">
            <a class="group mb-12 flex rtl:flex-row-reverse items-center gap-2 flex-wrap" href="{{route('blog', ['locale' => app()->getLocale()])}}">
              <div class="text-white group-hover:text-opacity-80 transition duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 20 20" fill="none">
                  <path d="M15.4167 10H5M5 10L10 5M5 10L10 15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </div>
              <span class="text-white group-hover:text-opacity-80 transition duration-200 font-bold">{{ __("Retour au blog") }}</span>
            </a>
          </div>
          <h1 class="text-center text-white text-3xl lg:text-5xl font-bold mb-12 max-w-xl lg:max-w-3xl mx-auto">The Art and Science of Design Development: Crafting Digital Experiences</h1>
          <img class="w-full rounded-2xl mb-12" src="{{asset('solstice-assets/images/blog/post-picture.png')}}" alt="">
          <div class="px-8 lg:px-24">
            <div class="w-full h-px bg-gray-200"></div>
            <div class="flex items-center justify-between flex-wrap gap-4 py-5">
              <div class="flex items-center gap-4 flex-wrap">
                <img src="{{asset('solstice-assets/images/blog/avatar1.png')}}" alt="">
                <div>
                  <p class="text-lg font-semibold">John Doe</p>
                  <span class="text-gray-500 font-medium">Content Writer, Solstice</span>
                </div>
              </div>
              <div class="flex items-center gap-3 flex-wrap">
                <div class="flex items-center gap-3 flex-wrap">
                  <div class="rounded-md border border-gray-100 py-0.5 px-2">
                    <span class="text-gray-700 text-xs font-medium">Product</span>
                  </div>
                  <div class="rounded-md border border-gray-100 py-0.5 px-2">
                    <span class="text-gray-700 text-xs font-medium">Development</span>
                  </div>
                </div>
                <div class="flex items-center gap-3 flex-wrap">
                  <div class="h-6 w-px bg-gray-200"></div>
                  <span class="text-gray-500">17 Jul 2023</span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="4" height="5" viewbox="0 0 4 5" fill="none"><circle cx="2" cy="2.66669" r="2" fill="#D1D1D1"></circle></svg>
                  <span class="text-gray-500">4 min read</span>
                </div>
              </div>
            </div>
            <div class="w-full h-px bg-gray-200 mb-12"></div>
            <h2 class="text-xl lg:text-4xl font-bold mb-6">The Essence of Design Development</h2>
            <p class="text-gray-700 font-medium text-lg mb-6">
              <span>Design development is the dynamic process that breathes life into creative concepts, transforming them into tangible and functional digital experiences. It's the synergy of artistic vision and technical prowess that defines the essence of this discipline.</span>
              <br>
              <br>
              <span>In the world of design development, aesthetics and functionality dance in harmony. It's not just about creating visually stunning interfaces; it's about crafting user-centric designs that resonate with the intended audience. By blending creativity with technological expertise, design development lays the foundation for digital products that not only captivate but also enrich the user experience.</span>
            </p>
            <ul class="mb-8">
              <li class="text-gray-700 text-lg font-medium">1. Defining the Vision</li>
              <li class="text-gray-700 text-lg font-medium">2. Team Collaboration</li>
              <li class="text-gray-700 text-lg font-medium">3. Data Acquisition and Management</li>
            </ul>
            <h2 class="text-xl lg:text-4xl font-bold mb-6">The Collaborative Symphony</h2>
            <p class="text-gray-700 font-medium text-lg mb-6">The development process was marked by countless hours of research, prototyping, and iteration. We explored various machine learning algorithms and deep neural network architectures to ensure optimal performance and accuracy in content classification. Through rigorous testing and fine-tuning, we trained our AI model to recognize patterns, categorize assets, and recommend relevant collections with impressive precision.</p>
            <p class="text-gray-700 font-medium text-lg mb-6">
              <span>1.</span>
              <span class="text-gray-900 font-bold">Defining the Vision:</span>
              <span>We begin by discussing the initial vision behind AI-Collections and the objectives we aimed to achieve. We highlight the need for a sophisticated content curation system that leverages AI capabilities to enhance user experiences and streamline information discovery.</span>
            </p>
            <p class="text-gray-700 font-medium text-lg mb-6">
              <span>2.</span>
              <span class="text-gray-900 font-bold">Team Collaboration:</span>
              <span>Successful projects require effective teamwork. We emphasize the importance of collaboration and detail how our team of experts, including developers, data scientists, and designers, worked together to bring AI-Collections to life. We share insights on how we fostered a creative and innovative environment throughout the development process.</span>
            </p>
            <p class="text-gray-700 font-medium text-lg mb-8">
              <span>3.</span>
              <span class="text-gray-900 font-bold">Data Acquisition and Management:</span>
              content demands a reliable and extensive dataset. We provide an overview of the strategies we employed to gather and manage the data required for AI-Collections. This includes sourcing relevant content, data cleaning, and ensuring data quality and diversity.
            </p>
            <h2 class="text-xl lg:text-4xl font-bold mb-6">From Pixels to Interactions</h2>
            <p class="text-gray-700 font-medium text-lg mb-8">
              <span>Design played a crucial role in the development of AI-Collections. We wanted to create an intuitive user interface that empowers users to effortlessly manage their digital assets. Our design team conducted extensive user research and feedback sessions to understand the pain points and needs of content creators. The result is a sleek, user-friendly interface that allows for seamless navigation, quick bookmarking, and efficient organization of assets.</span>
              <br>
              <br>
              <span>Throughout the process, we prioritized data privacy and security. We implemented robust encryption protocols and strict access controls to ensure that sensitive user information remains protected at all times. Building trust with our users has been of utmost importance, and we are committed to maintaining a secure environment for their valuable assets.</span>
            </p>
            <h2 class="text-xl lg:text-4xl font-bold mb-6">Conclusion</h2>
            <p class="text-gray-700 font-medium text-lg mb-12">Design development is the alchemical blend of creativity and technology, where pixels transform into interactive experiences. It's a collaborative endeavor, a symphony of design and code, crafting digital landscapes that captivate and engage. From the initial concept to the continuous evolution, design development is the heartbeat of the digital realm, shaping the way we interact with and experience technology.</p>
            {{-- <div class="w-full h-px bg-gray-200 mb-12"></div> --}}
            {{-- <div class="rounded-lg px-6 py-4 flex items-center flex-wrap gap-2 bg-gray-50 border border-gray-200 mb-5">
              <span class="text-gray-700 text-lg">Interested in more tips like this?</span>
              <a class="flex items-center flex-wrap gap-2 text-tresto-500 hover:text-tresto-600 transition duration-200 font-bold" href="#">
                <span>Subscribe to our newsletter</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewbox="0 0 20 21" fill="none">
                  <path d="M4.99984 10.6667H15.4165M15.4165 10.6667L10.4165 5.66675M15.4165 10.6667L10.4165 15.6667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </a>
            </div> --}}
            {{-- <div class="w-full h-px bg-gray-200 mb-12"></div> --}}
            {{-- <div class="flex items-center justify-center flex-wrap gap-12">
              <div class="flex items-center gap-4 flex-wrap">
                <a class="p-5 h-16 w-16 rounded-full flex items-center justify-center border border-gray-200 shadow text-sm font-semibold hover:bg-gray-50 focus:ring focus:ring-tresto-200 transition duration-200" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewbox="0 0 25 24" fill="none">
                    <path d="M12.3751 3.42897L12.3751 3.42898L12.3771 3.42584C12.5221 3.20672 12.8006 2.98925 13.1518 2.86515C13.4985 2.74258 13.8706 2.72708 14.1951 2.84835L14.2028 2.85122L14.2106 2.85383C14.9628 3.10714 15.4551 3.96709 15.3012 4.68521L15.2984 4.69827L15.2963 4.71145L14.7763 7.98145L14.7762 7.98143L14.7745 7.99389C14.7168 8.42683 14.833 8.83524 15.0915 9.15457L15.0993 9.16417L15.1075 9.17337C15.3681 9.46467 15.7517 9.64997 16.1701 9.64997H20.2801C20.9354 9.64997 21.4508 9.91226 21.7423 10.3192C22.0135 10.7056 22.0838 11.231 21.8785 11.8139L21.8784 11.8139L21.8751 11.824L19.4151 19.314L19.4095 19.3312L19.4051 19.3487C19.1547 20.3501 18.0176 21.22 16.8901 21.22H12.9901C12.7058 21.22 12.3515 21.1702 12.0232 21.0721C11.6846 20.971 11.4337 20.8365 11.3037 20.7064L11.2812 20.6839L11.256 20.6645L9.97604 19.6745L9.97606 19.6744L9.97144 19.671C9.60889 19.3972 9.39014 18.9561 9.39014 18.49V8.32998C9.39014 8.03019 9.48007 7.73681 9.64563 7.48812C9.64581 7.48785 9.64598 7.48759 9.64616 7.48733L12.3751 3.42897Z" fill="#B8B8B8" stroke="#B8B8B8"></path>
                    <path d="M5.71 6.37988H4.68C3.13 6.37988 2.5 6.97988 2.5 8.45988V18.5199C2.5 19.9999 3.13 20.5999 4.68 20.5999H5.71C7.26 20.5999 7.89 19.9999 7.89 18.5199V8.45988C7.89 6.97988 7.26 6.37988 5.71 6.37988Z" fill="#B8B8B8"></path>
                  </svg>
                </a>
                <span class="text-black text-sm font-medium">144</span>
              </div>
              <div class="flex items-center gap-4 flex-wrap">
                <a class="p-5 h-16 w-16 rounded-full flex items-center justify-center border border-gray-200 shadow text-sm font-semibold hover:bg-gray-50 focus:ring focus:ring-tresto-200 transition duration-200" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewbox="0 0 25 24" fill="none">
                    <path d="M16.5 2H8.5C4.5 2 2.5 4 2.5 8V21C2.5 21.55 2.95 22 3.5 22H16.5C20.5 22 22.5 20 22.5 16V8C22.5 4 20.5 2 16.5 2ZM14.5 15.25H7.5C7.09 15.25 6.75 14.91 6.75 14.5C6.75 14.09 7.09 13.75 7.5 13.75H14.5C14.91 13.75 15.25 14.09 15.25 14.5C15.25 14.91 14.91 15.25 14.5 15.25ZM17.5 10.25H7.5C7.09 10.25 6.75 9.91 6.75 9.5C6.75 9.09 7.09 8.75 7.5 8.75H17.5C17.91 8.75 18.25 9.09 18.25 9.5C18.25 9.91 17.91 10.25 17.5 10.25Z" fill="#B8B8B8"></path>
                  </svg>
                </a>
                <span class="text-black text-sm font-medium">12</span>
              </div>
            </div> --}}
          </div>
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
              <svg xmlns="http://www.w3.org/2000/svg" width="68" height="34" viewbox="0 0 68 34" fill="none">
                <path d="M2 34C1.99977 29.7976 2.8273 25.6364 4.43533 21.7539C6.04336 17.8713 8.40039 14.3436 11.3718 11.3721C14.3433 8.40056 17.8709 6.04346 21.7533 4.43539C25.6358 2.82732 29.7969 1.99977 33.9991 2C51.6726 2 66 16.3261 66 34" stroke="#530031" stroke-width="4" stroke-miterlimit="10"></path>
                <path d="M9.22571 34.0001C9.22571 27.4085 11.8358 21.0869 16.4819 16.4259C21.128 11.765 27.4294 9.14648 33.9999 9.14648C40.5704 9.14648 46.8718 11.765 51.5179 16.4259C56.164 21.0869 58.7741 27.4085 58.7741 34.0001" stroke="#FF7100" stroke-width="4" stroke-miterlimit="10"></path>
                <path d="M16.1339 34C16.1339 29.2617 18.0162 24.7174 21.3667 21.3669C24.7173 18.0163 29.2616 16.134 33.9999 16.134C38.7383 16.134 43.2826 18.0163 46.6331 21.3669C49.9836 24.7174 51.8659 29.2617 51.8659 34" stroke="#FFC96D" stroke-width="4" stroke-miterlimit="10"></path>
              </svg>
            </div> --}}
            <h1 class="text-4xl lg:text-5xl mb-10 font-bold font-heading text-center max-w-lg lg:max-w-3xl mx-auto">{{ __("Rejoignez-nous et améliorer l'efficacité de votre restaurant.") }}</h1>
            <div class="flex justify-center"><a class="w-full sm:w-auto text-center py-5 px-8 rounded-full h-16 inline-flex items-center justify-center bg-tresto-500 border border-tresto-600 shadow font-bold font-heading text-white hover:bg-tresto-600 focus:ring focus:ring-tresto-200 transition duration-200" href="#">{{ __("Inscrivez-vous maintenant")}} </a></div>
          </div>
        </div>
      </div>
    </section>
              
    <x-front.footer />
  </div>
</x-layouts.front>