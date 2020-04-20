<?php
include ("nav.php");
include ("global_variables.php");
?>
<title>Request<?php echo $g_title; ?></title>
<div class="form">
  <div class="shadow2">
    <form  method="POST" action="https://formspree.io/request@driekoningen.gq">
      Email:<br>
      <input class="logintext" type="email" name="email" placeholder="Your email"><br><br>
      Message: <br>
      <textarea class="logintext" name="message" placeholder="Your message..."></textarea><br><br>
      <button class="loginbtn2" type="submit">Send</button>
    </form>
  </div>
</div>
<?php include ("footer.php");?>
