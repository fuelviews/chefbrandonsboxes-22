<?php

// website config
$name = "Chef Brandon's Boxes";
$address = "715 Europe St";
$al2 = ""; // address line two
$city = "Baton Rouge";
$state = "LA";
$zip = "70802";
$phone = "225-284-6320";
$hours = "";

// socail media links config
$gmb = "";
$fb = "";
$ig = "";
$twt = "";
$yelp = "";

############################################################################################
############## DO NOT EDIT BELOW THIS LINE UNLESS YOU KNOW WHAT YOU'RE DOING ###############
############################################################################################

// hostname
$domain = "chefbrandonsboxes.com";

// canonical Links
$canonicalFilename =
    (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] === "off"
        ? "https"
        : "https") . "://$domain$_SERVER[REQUEST_URI]";

// remove double trailing slashes
if (
    $_SERVER["REQUEST_URI"] != "//" and
    preg_match('{//$}', $_SERVER["REQUEST_URI"])
) {
    http_response_code(301);
    header("Location: " . preg_replace('{//$}', "", $_SERVER["REQUEST_URI"]));
    exit();
}

$file = basename($_SERVER['PHP_SELF']); // your file name 
$last_modified_time = filemtime($file); 
$etag = md5_file($file); 

header("Last-Modified: ".gmdate("D, d M Y H:i:s", $last_modified_time)." GMT"); 
header("Etag: $etag"); 
?>

<!-- script header -->
<!DOCTYPE html>

<script>
  if (localStorage.theme === 'system' || (!('theme' in localStorage) && window.matchMedia(
        '(prefers-color-scheme: dark)')
      .matches)) {
    html.classList.add("dark") // inline to prevent FOUC
  }
</script>

<!-- empty html class for dark mode -->
<html lang="en-US">

<head>
  <link rel="canonical" href="<?php echo filter_var($canonicalFilename); ?>">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- load javascript first -->
  <script src="/javascript/main.js" defer></script>
  <script src="/javascript/cookieconsent.js" defer></script>

  <!-- inline css for pagespeed -->
  <?php
  if($_SERVER['HTTP_HOST'] == 'localhost:3000')
  {
      echo '<link rel="preload" href="/css/styles.css" as="style" onload="this.rel='."'stylesheet'".'"'.'>';
  } else {
      echo '  
      <style>';
      require $docRoot . "/css/styles.css";
      echo '  </style>';
  }
  ?>

  <!-- fav icon -->
  <?php require $docRoot . "/favicon/favicons-meta-tags.html"; ?>