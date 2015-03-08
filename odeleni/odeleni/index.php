<?php

include("includes/header.php");
include("includes/nav.php");
include("includes/pocetna.php");
if(isset($_GET['page']) && $_GET['page'] == "rezultati")
{
include("includes/rezultati.php");
}
else if( $_GET['page'] == "rangiraj")
{
include("includes/rangiraj.php");
}
else if( $_GET['page'] == "registriraj")
{
include("includes/registriraj.php");
}


include("includes/footer.php");

?>