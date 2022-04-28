<body
  class="flex flex-col h-full mx-auto z-10 text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-900 transition motion-reduce:transition-none">
  <header class="header-wrapper" id="">
    <!-- secondary (top) navbar goes here -->
    <div class="bg-neutral-400 dark:bg-neutral-900 dark:text-gray-100 hidden">
      <nav class="flex max-w-7xl mx-auto px-4 py-1 justify-evenly w-full" role="navigation" aria-label="Secondary Menu">
        <!-- left group -->
        <div class="flex justify-evenly my-auto text-sm">
          <label for="phone" aria-label="Call our phone number">
            <a href="tel:<?php echo $phone; ?>">
              <div class="mr-auto flex justify-evenly">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-5 w-5 my-auto"
                  viewBox="0 0 448 512">
                  <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                  <path
                    d="M384 32H64C28.65 32 0 60.65 0 96v320c0 35.35 28.65 64 64 64h320c35.35 0 64-28.65 64-64V96C448 60.65 419.3 32 384 32zM351.6 321.5l-11.62 50.39c-1.633 7.125-7.9 12.11-15.24 12.11c-126.1 0-228.7-102.6-228.7-228.8c0-7.328 4.984-13.59 12.11-15.22l50.38-11.63c7.344-1.703 14.88 2.109 17.93 9.062l23.27 54.28c2.719 6.391 .8828 13.83-4.492 18.22L168.3 232c16.99 34.61 45.14 62.75 79.77 79.75l22.02-26.91c4.344-5.391 11.85-7.25 18.24-4.484l54.24 23.25C349.5 306.6 353.3 314.2 351.6 321.5z" />
                </svg>
                &nbsp;<?php echo $phone; ?>
              </div>
            </a>
          </label>
          <label for="hours" aria-label="Hours of operation" tabindex="0">
            <div class="flex">&nbsp &nbsp;
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-5 w-5 my-auto" viewBox="0 0 512 512">
                <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                <path
                  d="M256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512zM232 256C232 264 236 271.5 242.7 275.1L338.7 339.1C349.7 347.3 364.6 344.3 371.1 333.3C379.3 322.3 376.3 307.4 365.3 300L280 243.2V120C280 106.7 269.3 96 255.1 96C242.7 96 231.1 106.7 231.1 120L232 256z" />
              </svg>
              &nbsp;<?php echo $hours; ?>
            </div>
          </label>
        </div>
        <!-- right group -->
        <label for="theme-toggle" id="checkbox"
          class="flex items-center justify-center cursor-pointer text-zinc-400 dark:text-yellow-100 ml-auto">
          <span class="text-xs text-slate-800 dark:text-slate-200">Theme&nbsp;</span>
          <div class="relative">
            <input type="checkbox" id="theme-toggle" class="sr-only darkmode switch" title="darkmode switch"
              onclick="return saveToggleState();">
            <div class="block bg-gray-600 w-12 h-7 rounded-full"></div>
            <div id="dot" class="dot absolute left-1 top-1 w-5 h-5 rounded-full bg-white flex justify-center mx-auto">
              <div class="flex-col justify-center my-auto">
                <svg id="moon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="moon-stars"
                  class="svg-inline--fa fa-moon-stars h-3 w-4 hidden" role="img" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 512 512">
                  <path fill="currentColor"
                    d="M332.2 426.4c-93.1 17.7-178.5-53.7-178.5-147.7 0-54.2 29-104 76.1-130.8 7.3-4.1 5.4-15.1-2.8-16.7C108.7 109.4 0 200 0 320c0 106 85.8 192 191.8 192 59.2 0 113.2-26.9 149-71.1 5.3-6.5-.5-16.1-8.6-14.5zM304 96l16-32 32-16-32-16-16-32-16 32-32 16 32 16 16 32zm154.7 85.3L432 128l-26.7 53.3L352 208l53.3 26.7L432 288l26.7-53.3L512 208l-53.3-26.7z">
                  </path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" id="sun" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
              </div>
            </div>
          </div>
        </label>
      </nav>
    </div>
    <!-- primary nav -->
    <nav id=""
      class="bg-white dark:bg-gray-800 transition motion-reduce:transition-none shadow-md shadow-transparent relative"
      aria-label="navigation" aria-label="Main menu">
      <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between">
          <div class="flex space-x-7">
            <div>
              <!-- Website Logo -->
              <a href="/" class="flex items-center py-0 px-2">
               <img src="/images/chefblogo-md.png" alt="Chef Blog Logo" class="w-48 py-4">
                <span class="sr-only"><?php echo $name; ?> Logo</span>
              </a>
            </div>
            <!-- Primary Navbar items -->
            <div class="hidden md:flex items-center space-x-1">
              <ul role="menu" id="nav-ul" class="nav-ul flex flex-wrap md:inline-flex list-none">
                <li role="menuitem" class="nav-active-link mx-3"><a href="/about" class="font-semibold">About</a></li>
                <li role="menuitem" class="nav-active-link mx-3"><a href="/menu/" class="font-semibold">
                    Menu</a></li>
                <li role="menuitem" class="nav-active-link mx-3"><a href="/catering/" class="font-semibold">
                    Catering</a></li>
                <li role="menuitem" class="nav-active-link mx-3"><a href="/contact/" class="font-semibold">
                    Contact</a></li>
                <li role="menuitem" class="nav-active-link mx-3"><a href="tel:<?php echo $phone; ?>" class="font-semibold text-amber-200">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-6 w-6 my-auto mb-1 mr-3 inline-block"
                  viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M18.92 351.2l108.5-46.52c12.78-5.531 27.77-1.801 36.45 8.98l44.09 53.82c69.25-34 125.5-90.31 159.5-159.5l-53.81-44.04c-10.75-8.781-14.41-23.69-8.974-36.47l46.51-108.5c6.094-13.91 21.1-21.52 35.79-18.11l100.8 23.25c14.25 3.25 24.22 15.8 24.22 30.46c0 252.3-205.2 457.5-457.5 457.5c-14.67 0-27.18-9.968-30.45-24.22l-23.25-100.8C-2.571 372.4 5.018 357.2 18.92 351.2z"/></svg><span class="text-black"><?php echo $phone; ?></span></a></li>
              </ul>
          </label>
            </div>
          </div>
          <!-- Secondary Navbar items -->
          <div class="hidden md:flex items-center space-x-3">
            <a href="/contact/">
            <button type="button"
              class="scale-100 hover:scale-105 transition-transform duration-300 drop-shadow-sm hover:drop-shadow-lg inline-flex items-center px-3 py-2 shadow-sm text-base font-medium rounded-sm text-amber-800 hover:text-amber-900 border border-amber-500 dark:border-amber-600 dark:text-green-100 bg-gradient-to-b bg-amber-300 hover:from-amber-300 hover:via-amber-200 hover:to-amber-300 dark:hover:bg-green-600 hover:border-amber-600 dark:hover:border-green-200 dark:from-green-700 dark:via-green-600 dark:to-green-700 dark:hover:from-green-800 dark:hover:via-green-700 dark:hover:to-green-800 focus:outline-none focus:ring focus:ring-green-500">
              Order Boxes
            </button>
</a>
<a href="https://www.ezcater.com/catering/pvt/chef-brandons-boxes-3">
            <button type="button"
              class="scale-100 hover:scale-105 transition-transform duration-300 drop-shadow-sm hover:drop-shadow-lg inline-flex items-center px-3 py-2 shadow-sm text-base font-medium rounded-sm text-green-800 hover:text-green-900 border border-green-500 dark:border-green-600 dark:text-green-100 bg-gradient-to-b bg-green-300 hover:from-green-300 hover:via-green-200 hover:to-green-300 dark:hover:bg-green-600 hover:border-green-600 dark:hover:border-green-200 dark:from-green-700 dark:via-green-600 dark:to-green-700 dark:hover:from-green-800 dark:hover:via-green-700 dark:hover:to-green-800 focus:outline-none focus:ring focus:ring-green-500">
              Order Catering
            </button>
</a>
          </div>
          <!-- Mobile menu button -->
          <div class="md:hidden flex items-center dark:text-white" id="menu-button-mobile">
            <button id="hamburger" onclick="menuAttributeMobile()" class=" mobile-menu-button outline-none"
              aria-expanded="false" aria-controls="menu">
              <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 200 200" class=" hover:"
                shape-rendering="crispEdges">
                <g stroke-width="6.5" stroke-linecap="round">
                  <path d="M72 82.286h28.75" fill="currentColor" fill-rule="evenodd" stroke="currentColor"
                    shape-rendering="crispEdges" />
                  <path
                    d="M100.75 103.714l72.482-.143c.043 39.398-32.284 71.434-72.16 71.434-39.878 0-72.204-32.036-72.204-71.554"
                    fill="none" stroke="currentColor" shape-rendering="crispEdges" />
                  <path d="M72 125.143h28.75" fill="currentColor" fill-rule="evenodd" stroke="currentColor"
                    shape-rendering="crispEdges" />
                  <path
                    d="M100.75 103.714l-71.908-.143c.026-39.638 32.352-71.674 72.23-71.674 39.876 0 72.203 32.036 72.203 71.554"
                    fill="none" stroke="currentColor" shape-rendering="crispEdges" />
                  <path d="M100.75 82.286h28.75" fill="currentColor" fill-rule="evenodd" stroke="currentColor" />
                  <path d="M100.75 125.143h28.75" fill="currentColor" fill-rule="evenodd" stroke="currentColor" />
                </g>
              </svg>
              <span class="sr-only">Hamburger menu</span>
            </button>
          </div>
        </div>
      </div>
      <!-- mobile menu -->
      <div class="hidden md:hidden absolute w-full z-50 bg-gray-200 dark:bg-gray-700" id="menu-wrapper-mobile">
        <ul role="menu" id="nav-ul-mobile" class="nav-ul-mobile list-none">
          <li role="menuitem" class="nav-active-link-mobile"><a href="/about/"
              class="flex justify-center mx-auto px-2 py-4 hover:bg-gray-500 transition duration-250 motion-reduce:transition-none text-xl">Home</a>
          </li>
          <li role="menuitem" class="nav-active-link-mobile"><a href="/menu/"
              class="nav-active-link flex justify-center mx-auto px-2 py-4 hover:bg-gray-500 transition motion-reduce:transition-none duration-250 text-xl">
              Menu</a></li>
          <li role="menuitem" class="nav-active-link-mobile"><a href="/catering/"
              class="nav-active-link flex justify-center mx-auto px-2 py-4 hover:bg-gray-500 transition motion-reduce:transition-none duration-250 text-xl">
              Catering</a></li>
          <li role="menuitem" class="nav-active-link-mobile"><a href="/contact/"
              class="nav-active-link flex justify-center mx-auto px-2 py-4 hover:bg-gray-500 transition motion-reduce:transition-none duration-250 text-xl">
              Contact</a></li>
        </ul>
        <div
          class="hidden justify-center mx-auto text-zinc-400 dark:text-yellow-100 border-t border-gray-300 dark:border-gray-500">
          <label for="theme-toggle-mobile" id="checkbox2"
            class="flex items-center justify-start cursor-pointer px-2 py-4"><span
              class="mr-5 text-gray-600 dark:text-gray-100">Switch theme</span>
            <div class="relative">
              <input type="checkbox" id="theme-toggle-mobile" class="sr-only darkmode switch" title="darkmode switch"
                onclick="return saveToggleStateMobile();">
              <div class="block bg-gray-600 w-14 h-8 rounded-full"></div>
              <div id="dot2"
                class="dot absolute left-1 top-1 w-6 h-6 rounded-full bg-white flex justify-center mx-auto">
                <div class="flex-col justify-center my-auto">
                  <svg id="moon-mobile" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="moon-stars"
                    class="svg-inline--fa fa-moon-stars h-4 w-5 hidden" role="img" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 512 512">
                    <path fill="currentColor"
                      d="M332.2 426.4c-93.1 17.7-178.5-53.7-178.5-147.7 0-54.2 29-104 76.1-130.8 7.3-4.1 5.4-15.1-2.8-16.7C108.7 109.4 0 200 0 320c0 106 85.8 192 191.8 192 59.2 0 113.2-26.9 149-71.1 5.3-6.5-.5-16.1-8.6-14.5zM304 96l16-32 32-16-32-16-16-32-16 32-32 16 32 16 16 32zm154.7 85.3L432 128l-26.7 53.3L352 208l53.3 26.7L432 288l26.7-53.3L512 208l-53.3-26.7z">
                    </path>
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" id="sun-mobile" class="h-5 w-5" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                  </svg>
                </div>
              </div>
            </div>
          </label>
        </div>
      </div>
  </header>
  </div>
  </nav>