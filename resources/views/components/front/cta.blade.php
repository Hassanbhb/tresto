@props(['text' => "Commencez dès aujourd'hui - Améliorez les opérations de votre restaurant", "cta" => "Créez un compte GRATUIT maintenant !"])

<section class="py-12">
  <div class="container mx-auto px-4">
    <div class="py-28 relative">
      <div class="hidden -rotate-12 sm:block absolute top-6 left-0">
        <img class="w-48 animate-float" src="{{asset('images/chefhat.png')}}" alt="">
      </div>
      <div class="absolute top-0 right-0">
        <img class="w-28 lg:w-60 animate-float" src="{{ asset("images/menu.png") }}" alt="menu icon">
      </div>
      <div class="absolute bottom-0 left-0 sm:left-24">
        <img class="w-28 lg:w-60 animate-float" src="{{ asset("images/burger-rb.png") }}" alt="hamburger image">
      </div>
      <div class="hidden rotate-12 sm:block absolute bottom-0 right-0 sm:right-24">
        <img class="lg:w-60" src="{{asset("images/delivery.png")}}" alt="delivery icon">
      </div>
      <div class="relative z-10">
        <h1
          class="text-4xl lg:text-5xl mb-10 font-bold ltr:font-mono rtl:font-body text-center max-w-lg lg:max-w-3xl mx-auto">
          {{ __($text) }}</h1>
        <div class="flex justify-center"><a
            class="w-full sm:w-auto text-center py-5 px-8 rounded-full h-16 inline-flex items-center justify-center bg-tresto-500 border border-tresto-600 shadow font-bold ltr:font-mono rtl:font-body text-white hover:bg-tresto-600 focus:ring focus:ring-tresto-200 transition duration-200"
            href="https://tresto.ma/start?step=1">{{ __($cta) }}</a></div>
      </div>
    </div>
  </div>
</section>