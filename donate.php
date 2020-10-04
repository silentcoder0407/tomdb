<?php
include("global_variables.php");
include("nav.php");
include("headers.php");


?>

<title>Donate<?php echo $g_title; ?></title>

    <div class='p-3'>
        <h1 align='left'>Donate</h1>
    </div>
<div class=" bg-dark text-white p-3">
<center><img class="loginlogo" src="<?php echo $g_logo;?>"/></center><br>
    <div class="container bg-dark pt-2 pb-2 rounded">
        <h3 class="text-center">Thank you for helping to develop TOMDB</h3>
        <p class="text-center">
            This service is completely free of charge. I finance it on my own.
            If you want to help develop TOMDB and keep the service online, <a href="https://www.buymeacoffee.com/tomdbinfo">buy me a coffee</a>.<br>
        </p>
        
        <div class="container text-center">
            <a class="text-center" href="https://www.buymeacoffee.com/tomdbinfo" target="_blank" ><img alt="Buy Me A Coffee" style="height: 50px"  src="img/default-orange.webp"> </a>
        </div>
        
    </div>

</div>

<?php include ('footer.php');?>
