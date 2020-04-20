<link rel="stylesheet" type="text/css" href="style.css">
<p style="text-align: center;"><sub>&copy;&nbsp;<?php echo date("Y") ." ". $g_gtitle;?> by ALREJJ Group of Companies</sub><br /><br>
</p>

<!--to top beg-->
<button onclick="topFunction()" id="myBtn" class="myBtn" title="Go to top" >Top</button>
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>
<!--to top end-->
