<?php
$docRoot = getenv("DOCUMENT_ROOT");
require $docRoot . "/script-header.php";
?>
<title>Healthy Food Subscriptions in Baton Rogue - <?php echo $name; ?></title>
</head>
<?php require $docRoot . "/header.php"; ?>

<main id="main" role="main" >
  <div class="flex-col w-full h-fit items-center bg-img-1 bg-fixed bg-cover bg-center">
    <div class="backdrop-brightness-90 dark:backdrop-brightness-50 h-full">
      <div class="flex mx-auto max-w-5xl px-3 h-full items-center">
        <article class="flex-col md:px-8 mx-auto bg-white bg-opacity-90 rounded-lg my-8 md:my-16">
          <div class="flex-col px-4 text-center">
            <h1 class="py-8 font-semibold text-black text-3xl md:text-4xl lg:text-5xl">
            Fresh Healthy Food<span class="block text-xl md:text-3xl">Delivered Directly to You</span></h1>
            <p class="text-black pb-6 text-base md:text-lg font-semibold">
            Veteran Owned and Operated<span class="block">
            All Food Prepared Locally In Batton Rouge</span></p>
            <div class="text-left" role=”form” aria-label="Contact form">
        <form action="https://formspree.io/f/xqkngbvo" method="POST">
          <div class="mb-6">
            <label for="address" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Your Address</label>
            <input type="text" name="address" placeholder="715 Europe St, Baton Rouge, LA 7082" required aria-required="true" aria-placeholder="715 Europe St, Baton Rouge, LA 7082" aria-label="Email" class="w-full px-3 py-2 placeholder-gray-300 dark:bg-gray-400 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-gray-100 focus:border-gray-300" />
          </div>
          <div class="mb-6">
            <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Your Email
              Address</label>
            <input type="email" name="email" placeholder="your@email.com" required aria-required="true" aria-placeholder="your@email.com" aria-label="Email" class="w-full px-3 py-2 placeholder-gray-300 dark:bg-gray-400 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-gray-100 focus:border-gray-300" />
          </div>
          <div class="mb-6">
            <label for="phone" class="block text-sm mb-2 text-gray-600 dark:text-gray-400">Your Phone
              Number</label>
            <input type="text" name="phone" placeholder="225-284-6320" required aria-required="true" aria-placeholder="phone" aria-label="Phone number" class="w-full px-3 py-2 placeholder-gray-300 dark:bg-gray-400 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-gray-100 focus:border-gray-300" />
          </div>
          <div class="mb-6">
            <label for="name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Your
              Name</label>
            <input type="text" name="name" placeholder="John Doe" required aria-required="true" aria-placeholder="John Doe" aria-label="Name" class="w-full px-3 py-2 placeholder-gray-300 dark:bg-gray-400 border border-gray-300 rounded-md
              focus:outline-none focus:ring focus:ring-gray-100 focus:border-gray-300" />
          </div>
          <div class="mb-6">
            <button type="submit" role="button" class="w-full mt-4 px-2 py-4 text-white bg-green-500 rounded-md focus:bg-gray-600 focus:outline-none">Submit Form</button>
          </div>
        </form>
      </div>
            <p class="text-black pt-3 pb-6 text-base md:text-lg font-semibold">
            Local Delivery is Only $5! | Gift Cards Now Available!</p>
          </div>
        </article>
      </div>
    </div>
  </div>
  <!-- whiteboard svg banner -->
  <div class="bg-zinc-800 flex-col w-full py-16 px-4">
    <div class="grid grid-cols-1 md:grid-cols-3 max-w-4xl mx-auto gap-8 md:gap-2 lg:gap-10">
    <div class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200">
    <div class="w-full flex justify-between px-6 py-12 md:py-6 space-x-6 md:h-64">
      <div class="flex-1">
      <svg xmlns="http://www.w3.org/2000/svg" class="flex ml-1 mb-3 h-8 w-8 text-amber-300" fill="currentColor"
                    viewBox="0 0 512 512"><path d="M221.6 148.7C224.7 161.3 224.8 174.5 222.1 187.2C219.3 199.1 213.6 211.9 205.6 222.1C191.1 238.6 173 249.1 151.1 254.1V472C151.1 482.6 147.8 492.8 140.3 500.3C132.8 507.8 122.6 512 111.1 512C101.4 512 91.22 507.8 83.71 500.3C76.21 492.8 71.1 482.6 71.1 472V254.1C50.96 250.1 31.96 238.9 18.3 222.4C10.19 212.2 4.529 200.3 1.755 187.5C-1.019 174.7-.8315 161.5 2.303 148.8L32.51 12.45C33.36 8.598 35.61 5.197 38.82 2.9C42.02 .602 45.97-.4297 49.89 .0026C53.82 .4302 57.46 2.303 60.1 5.259C62.74 8.214 64.18 12.04 64.16 16V160H81.53L98.62 11.91C99.02 8.635 100.6 5.621 103.1 3.434C105.5 1.248 108.7 .0401 111.1 .0401C115.3 .0401 118.5 1.248 120.9 3.434C123.4 5.621 124.1 8.635 125.4 11.91L142.5 160H159.1V16C159.1 12.07 161.4 8.268 163.1 5.317C166.6 2.366 170.2 .474 174.1 .0026C178-.4262 181.1 .619 185.2 2.936C188.4 5.253 190.6 8.677 191.5 12.55L221.6 148.7zM448 472C448 482.6 443.8 492.8 436.3 500.3C428.8 507.8 418.6 512 408 512C397.4 512 387.2 507.8 379.7 500.3C372.2 492.8 368 482.6 368 472V352H351.2C342.8 352 334.4 350.3 326.6 347.1C318.9 343.8 311.8 339.1 305.8 333.1C299.9 327.1 295.2 320 291.1 312.2C288.8 304.4 287.2 296 287.2 287.6L287.1 173.8C288 136.9 299.1 100.8 319.8 70.28C340.5 39.71 369.8 16.05 404.1 2.339C408.1 .401 414.2-.3202 419.4 .2391C424.6 .7982 429.6 2.62 433.9 5.546C438.2 8.472 441.8 12.41 444.2 17.03C446.7 21.64 447.1 26.78 448 32V472z"/></svg>
        <div class="flex items-center space-x-3">
          <h3 class="text-gray-900 text-large md:text-2xl font-medium truncate">Choose your boxes</h3>
        </div>
        <p class="mt-1 text-gray-700 text-base">New menu published every Wednesday. Get your order in by Friday and pay by Monday for a week of delicious, healthy meals.</p>
      </div>
      
    </div>

  </div>

  <div class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200">
    <div class="w-full flex justify-between px-6 py-12 md:py-6 space-x-6 md:h-64">
      <div class="flex-1">
      <svg xmlns="http://www.w3.org/2000/svg" class="flex ml-1 mb-3 h-8 w-8 text-amber-300" fill="currentColor"
                    viewBox="0 0 640 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M112 0C85.49 0 64 21.49 64 48V96H16C7.163 96 0 103.2 0 112C0 120.8 7.163 128 16 128H272C280.8 128 288 135.2 288 144C288 152.8 280.8 160 272 160H48C39.16 160 32 167.2 32 176C32 184.8 39.16 192 48 192H240C248.8 192 256 199.2 256 208C256 216.8 248.8 224 240 224H16C7.163 224 0 231.2 0 240C0 248.8 7.163 256 16 256H208C216.8 256 224 263.2 224 272C224 280.8 216.8 288 208 288H64V416C64 469 106.1 512 160 512C213 512 256 469 256 416H384C384 469 426.1 512 480 512C533 512 576 469 576 416H608C625.7 416 640 401.7 640 384C640 366.3 625.7 352 608 352V237.3C608 220.3 601.3 204 589.3 192L512 114.7C499.1 102.7 483.7 96 466.7 96H416V48C416 21.49 394.5 0 368 0H112zM544 237.3V256H416V160H466.7L544 237.3zM160 464C133.5 464 112 442.5 112 416C112 389.5 133.5 368 160 368C186.5 368 208 389.5 208 416C208 442.5 186.5 464 160 464zM528 416C528 442.5 506.5 464 480 464C453.5 464 432 442.5 432 416C432 389.5 453.5 368 480 368C506.5 368 528 389.5 528 416z"/></svg>
        <div class="flex items-center space-x-3">
          <h3 class="text-gray-900 text-large md:text-2xl font-medium truncate">Speedy Delivery</h3>
        </div>
        <p class="mt-1 text-gray-700 text-base">It's the 21st century, your food should come to you. Your boxes will arrive like magic every Wednesday and Friday.</p>
      </div>
      
    </div>

  </div>

  <div class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200">
    <div class="w-full flex justify-between px-6 py-12 md:py-6 space-x-6 md:h-64">
      <div class="flex-1">
      <svg xmlns="http://www.w3.org/2000/svg" class="flex ml-1 mb-3 h-8 w-8 text-amber-300" fill="currentColor"
                    viewBox="0 0 512 512">><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84.02L256 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 .0003 232.4 .0003 190.9L0 190.9z"/></svg>
        <div class="flex items-center space-x-3">
          <h3 class="text-gray-900 text-large md:text-2xl font-medium truncate">Heat, eat, & relax</h3>
        </div>
        <p class="mt-1 text-gray-700 text-base">Your food is cooked in-house by us and can be ready to enjoy in minutes with a microwave.</p>
      </div>
      
    </div>

  </div>
</div>
</div>

<div class="flex-col w-full px-2 py-12">
<div class="grid grid-cols-12 max-w-5xl mx-auto md:gap-8 lg:gap-12 items-center">
<div class="col-span-12 lg:col-span-9 bg-neutral-100 rounded-xl shadow-2xl p-4 mx-4">
<p class="pb-4 font-semibold">"Beyond AMAZING food that is consistently good and affordable. Finally I found something that myself and my picky teenage daughter will eat! The customer service is fantastic as well! If you haven't tried them out then you have no idea what you are missing!"</p>
<p class="font-extrabold">
  <svg xmlns="http://www.w3.org/2000/svg" class="inline-flex mb-1 h-5 w-5 text-amber-300" fill="currentColor"
  viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" class="inline-flex ml-1 mb-1 h-5 w-5 text-amber-300" fill="currentColor"
  viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" class="inline-flex ml-1 mb-1 h-5 w-5 text-amber-300" fill="currentColor"
  viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" class="inline-flex ml-1 mb-1 h-5 w-5 text-amber-300" fill="currentColor"
  viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" class="inline-flex ml-1 mr-2 mb-1 h-5 w-5 text-amber-300" fill="currentColor"
  viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"/></svg>- Kristin D.</p>
</div>
<div class="col-span-12 lg:col-span-3 md:mx-auto rounded-xl mx-auto my-12">
<img src="/images/food2-md.jpg" class="h-72 lg:h-48 rounded-full pl-2 mt-8">
</div>

<div class="col-span-12 lg:col-span-4 p-4 mb-12 mx-4">
<p class="pb-4 font-semibold text-2xl">Pricing</p>
<p class="font-semibold text-xl text-neutral-600">$10 per box meal</p>
<p class="font-semibold text-xl text-neutral-600">$5 kids lunch box</p>
<p class="font-semibold text-xl text-neutral-600">$15-$20 family size protein box</p>
<p class="font-semibold text-xl text-neutral-600">$5 snack box</p>
<p class="font-semibold text-xl text-neutral-600">$10 pasta salad/protein box</p>
<p class="font-semibold text-xl text-neutral-600">$10 garden salad/protein box</p>
</div>

<div class="col-span-12 lg:col-span-4 md:mx-auto rounded-xl md:pb-12 lg:pb-0 mb-12 mx-auto">
<img src="/images/food1-md.jpg" class="h-72 lg:h-48 rounded-full pl-2">
</div>

<div class="col-span-12 lg:col-span-4 p-4 mb-12 mx-4">
<p class="pb-4 font-semibold text-2xl">We also cater events</p>
<p class="font-semibold text-xl text-neutral-600">Including:</p>
<p class="font-semibold text-xl text-neutral-600">Private Parties</p>
<p class="font-semibold text-xl text-neutral-600">Tailgate Parties</p>
<p class="font-semibold text-xl text-neutral-600">Business Breakfasts</p>
<p class="font-semibold text-xl text-neutral-600">Business Luncheons</p>
<p class="font-semibold text-xl text-neutral-600">Corporate Events</p>
<p class="font-semibold text-xl text-neutral-600">Weddings</p>
</div>


<div class="col-span-12 lg:col-span-9 bg-neutral-100 rounded-xl shadow-2xl p-4 mb-12 mx-4 order-1">
<p class="pb-4 font-semibold">"I tried Chef Brandon's Boxes as a co-workers suggestion. I tried his meals for a week and I'm going to continue. All of the meals that I got were SO GOOD! The quality and the selection were Fantastic! I love that he delivers twice per week so that the food is fresh. Chef Brandon's Boxes are the best! I think that I have found my new best friend So many good meals, so-easy, so worth it!"</p>
<p class="font-extrabold">
  <svg xmlns="http://www.w3.org/2000/svg" class="inline-flex mb-1 h-5 w-5 text-amber-300" fill="currentColor"
  viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" class="inline-flex ml-1 mb-1 h-5 w-5 text-amber-300" fill="currentColor"
  viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" class="inline-flex ml-1 mb-1 h-5 w-5 text-amber-300" fill="currentColor"
  viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" class="inline-flex ml-1 mb-1 h-5 w-5 text-amber-300" fill="currentColor"
  viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" class="inline-flex ml-1 mr-2 mb-1 h-5 w-5 text-amber-300" fill="currentColor"
  viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"/></svg>- Jennifer S.</p>
</div>
<div class="col-span-12 lg:col-span-3 md:mx-auto rounded-xl mx-auto my-12">
<img src="/images/food3-md.jpg" class="h-72 lg:h-48 rounded-full pl-2 mb-8 lg:mb-12">
</div>

</div>
</div>

</main>

<?php require $docRoot . "/footer.php"; ?>