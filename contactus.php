<?php
include ("nav.php");
include ("global_variables.php");
?>
<title>Request<?php echo $g_title; ?></title>
<div class="container bg-secondary text-white pt-3 pb-3">
 <h1>Contact Us</h1>
    <form  method="POST" action="https://formspree.io/request@driekoningen.gq">
		<div class="class="form-group"">
      <label for="email">Email address:</label>
      <input class="form-control" type="email" name="email" placeholder="Your email">
	  </div>
	  <div class="class="form-group"">
      <label for="message">Message:</label>
      <textarea class="form-control" name="message" placeholder="Your message..."></textarea>
	  </div><br>
      <button class="btn btn-primary" type="submit">Send</button>
    </form>
  </div>
</div>
<?php include ("footer.php");?>
