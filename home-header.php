<!-- Header Part -->
<div class="fixed w-full z-50">
  <nav x-data="{ open: false }" class="bg-gray-800 bg-opacity-25">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-20 items-center justify-between">
		  <div class="flex-shrink-0">
			<img class="h-12 w-12" src="images/logo.png" alt="Company Logo">
		  </div>
		  <div class="hidden md:block">
			<div class="ml-10 flex items-baseline space-x-4">
			  <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
			  <a href="#about" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">About</a>

			  <a href="#service" class="text-white hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium">Services</a>

			  <a href="#project" class="text-white hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium">Projects</a>

			  <a href="#contact" class="text-white hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium">contact</a>

			  <a href="#" class="text-white bg-violet-500 hover:bg-gray-700 px-4 py-3 rounded-md text-sm font-medium">Login</a>
			</div>
		  </div>
		<div class="-mr-2 flex md:hidden">
		  <!-- Mobile menu button -->
		  <button type="button" class="inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false" @click="open = !open">
			<span class="sr-only">Open main menu</span>
			<!--
			  Heroicon name: outline/bars-3

			  Menu open: "hidden", Menu closed: "block"
			-->
			<svg  x-state:on="Menu open" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
			  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
			</svg>
			<!--
			  Heroicon name: outline/x-mark

			  Menu open: "block", Menu closed: "hidden"
			-->
			<svg x-state:on="Menu open" x-state:off="Menu closed" class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
			  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
			</svg>
		  </button>
		</div>
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div x-show="open" class="md:hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a href="#about" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">About</a>

        <a href="#service" class="text-white hover:bg-gray-700 block px-3 py-2 rounded-md text-base font-medium">Services</a>

        <a href="#project" class="text-white hover:bg-gray-700 block px-3 py-2 rounded-md text-base font-medium">Projects</a>

        <a href="#contact" class="text-white hover:bg-gray-700 block px-3 py-2 rounded-md text-base font-medium">contact</a>

        <a href="#" class="text-white bg-violet-500 hover:bg-gray-700 block px-3 py-2 rounded-md text-base font-medium">Login</a>
      </div>
    </div>
  </nav>
</div>



