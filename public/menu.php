<?php
$docRoot = getenv("DOCUMENT_ROOT");
require $docRoot . "/script-header.php";
?>
<title>Menu - <?php echo $name; ?></title>
</head>
<?php require $docRoot . "/header.php"; ?>

<main id="main" role="main" >
  <div class="flex-col w-full h-fit items-center bg-img-1 bg-fixed bg-cover bg-center">
    <div class="backdrop-brightness-90 dark:backdrop-brightness-50 h-full">
      <div class="flex mx-auto max-w-5xl px-3 h-full items-center">
        <article class="flex-col md:px-8 mx-auto bg-white bg-opacity-90 rounded-lg my-8 md:my-16">
          <div class="flex-col px-4 text-center">
            <h1 class="py-8 font-semibold text-black text-3xl md:text-4xl">
            Sample Weekly Menu</h1>
          </div>
        </article>
      </div>
    </div>
  </div>

    <!-- whiteboard svg banner -->
    <div class="bg-zinc-800 flex-col w-full py-16 px-4">
    <div class="grid grid-cols-1 md:grid-cols-2 max-w-4xl mx-auto gap-8 md:gap-2 lg:gap-6">

    <div class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200">
    <div class="w-full flex justify-between px-6 py-12 md:py-6 space-x-6">
      <div class="flex-1 over">
      <img src="/images/chicken-breast-md.jpg" class="float-none mb-8 lg:mb-0 h-28 lg:h-28 lg:float-right rounded-full pl-2">
        <div class="flex items-center space-x-3">
          <h2 class="text-gray-900 text-medium md:text-2xl font-medium truncate">Rosemary, Garlic<span< class="block">Roasted Chicken Breast</span></h2>
        </div>
        <p class="mt-4 text-gray-700 text-base">With Grilled Asparagus & Smothered New Potatoes</p>
      </div>
    </div>
    </div>
    <div class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200">
    <div class="w-full flex justify-between px-6 py-12 md:py-6 space-x-6">
      <div class="flex-1 over">
      <img src="/images/pork-md.jpg" class="float-none mb-8 lg:mb-0 h-28 lg:h-28 lg:float-right rounded-full pl-2">
        <div class="flex items-center space-x-3">
          <h2 class="text-gray-900 text-medium md:text-2xl font-medium truncate">Hickory Smoked<span< class="block">Pork Loin</span></h2>
        </div>
        <p class="mt-4 text-gray-700 text-base">With Oven Roasted Candied Sweet Potatoes & Steamed Broccoli</p>
      </div>
    </div>
    </div>
    <div class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200">
    <div class="w-full flex justify-between px-6 py-12 md:py-6 space-x-6">
      <div class="flex-1 over">
      <img src="/images/not-enchiladas-md.jpg" class="float-none mb-8 lg:mb-0 h-28 lg:h-28 lg:float-right rounded-full pl-2">
        <div class="flex items-center space-x-3">
          <h2 class="text-gray-900 text-medium md:text-2xl font-medium truncate">Chicken Enchiladas</h2>
        </div>
        <p class="mt-4 text-gray-700 text-base">With Black Beans & Mexican Style Rice</p>
      </div>
    </div>
    </div>
    <div class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200">
    <div class="w-full flex justify-between px-6 py-12 md:py-6 space-x-6">
      <div class="flex-1 over">
      <img src="/images/tuna-md.jpg" class="float-none mb-8 lg:mb-0 h-28 lg:h-28 lg:float-right rounded-full pl-2">
        <div class="flex items-center space-x-3">
          <h2 class="text-gray-900 text-medium md:text-2xl font-medium truncate">Seared Tuna Steak</h2>
        </div>
        <p class="mt-4 text-gray-700 text-base">With Grilled Summer Squash & Basmati Rice</p>
      </div>
    </div>
    </div>
    <div class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200">
    <div class="w-full flex justify-between px-6 py-12 md:py-6 space-x-6">
      <div class="flex-1 over">
      <img src="/images/pork2-md.jpg" class="float-none mb-8 lg:mb-0 h-28 lg:h-28 lg:float-right rounded-full pl-2">
        <div class="flex items-center space-x-3">
          <h2 class="text-gray-900 text-medium md:text-2xl font-medium truncate">Apple Butter Pork<span< class="block">Loin</span></h2>
        </div>
        <p class="mt-4 text-gray-700 text-base">With Scalloped Potatoes & Candied Baby Carrots</p>
      </div>
    </div>
    </div>
    <div class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200">
    <div class="w-full flex justify-between px-6 py-12 md:py-6 space-x-6">
      <div class="flex-1 over">
      <img src="/images/steak-md.jpg" class="float-none mb-8 lg:mb-0 h-28 lg:h-28 lg:float-right rounded-full pl-2">
        <div class="flex items-center space-x-3">
          <h2 class="text-gray-900 text-medium md:text-2xl font-medium truncate">Pepper Steak Stir<span< class="block">Fry</span></h2>
        </div>
        <p class="mt-4 text-gray-700 text-base">Served Over Brown Rice</p>
      </div>
    </div>
    </div>
    <div class="col-span-1 md:col-span-2 bg-white rounded-lg shadow divide-y divide-gray-200">
    <div class="w-full flex justify-between px-6 py-12 md:py-6 space-x-6">
      <div class="flex-1 over">
      <img src="/images/shrimp-md.jpg" class="float-none mb-8 lg:mb-0 h-28 lg:h-28 lg:float-right rounded-full pl-2">
        <div class="flex items-center space-x-3">
          <h2 class="text-gray-900 text-medium md:text-2xl font-medium truncate">Shrimp Alfredo<span< class="block">Pasta</span></h2>
        </div>
        <p class="mt-4 text-gray-700 text-base">With An Herb Roasted Vegetable Medley</p>
      </div>
    </div>
    </div>


</div>
</div>


<div class="flex-col w-full px-2">
<div class="grid grid-cols-12 max-w-5xl mx-auto md:gap-8 lg:gap-12 items-center">
  <div class="col-span-1"></div>
<div class="col-span-12 lg:col-span-2 md:mx-auto rounded-xl mx-auto my-12">
<img src="/images/food1-md.jpg" class="h-72 lg:h-28 rounded-full pl-2 mt-8">
</div>
<div class="col-span-12 lg:col-span-2 md:mx-auto rounded-xl mx-auto my-12">
<img src="/images/food2-md.jpg" class="h-72 lg:h-28 rounded-full pl-2 mt-8">
</div>
<div class="col-span-12 lg:col-span-2 md:mx-auto rounded-xl mx-auto my-12">
<img src="/images/food3-md.jpg" class="h-72 lg:h-28 rounded-full pl-2 mt-8">
</div>
<div class="col-span-12 lg:col-span-2 md:mx-auto rounded-xl mx-auto my-12">
<img src="/images/food4-md.jpg" class="h-72 lg:h-28 rounded-full pl-2 mt-8">
</div>
<div class="col-span-12 lg:col-span-2 md:mx-auto rounded-xl mx-auto my-12">
<img src="/images/food5-md.jpg" class="h-72 lg:h-28 rounded-full pl-2 mt-8">
</div>


<div class="col-span-full mx-auto mb-12">
<div class="col-span-11 lg:col-span-9 bg-neutral-100 rounded-xl shadow-2xl p-4 mb-12 mx-4 order-none lg:order-1">
<p class="pb-4 font-semibold">"Fresh cooked food delivered to your door. What's not to love about that? Great food, great service, for a great value!"</p>
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
  viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"/></svg>- Brad W.</p>
</div>
</div>
</div>
</div>

</main>

<?php require $docRoot . "/footer.php"; ?>