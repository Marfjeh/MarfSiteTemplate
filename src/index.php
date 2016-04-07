<?php
//MarfSiteTemplate version 0.2
$page_name = "Home";

require_once("inc/config.php"); //for mysql or some diffrent config settings you like
require_once("inc/head.php"); //this is where the <html> <head> is stored like meta tags and titles.
require_once("inc/menu.php"); //This is where the menu is stored.
 ?>
<div id="pagecontent">

<h1>Hi!</h1>
<script>addtoelementln("pagecontent", About());</script>

</div>
<?php
require_once("inc/footer.php"); //footer and </html> end of the page.
?>
