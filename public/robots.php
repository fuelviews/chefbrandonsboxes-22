<?php

// Make it a plain text file
header('Content-Type:text/plain');

// Output based on HTTP host
if(preg_match('/herokuapp/', $_SERVER['HTTP_HOST'])) {

    // Enter your test site robots.txt here

?>
User-agent: *
Disallow: /
<?php

}
else {

    // Enter your live site robots.txt here

?>
User-agent: *
Allow: /
Disallow: /landers/

Sitemap: <?php echo 'https://'.$_SERVER['SERVER_NAME']; ?>/sitemap.xml
<?php    

}

?>