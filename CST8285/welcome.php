<?php

if(isset($_GET['firstName']) and isset($_GET['lastName'])) :
    echo "Hello ".$_GET['firstName']. " ".$_GET['lastName'];

elseif(isset($_GET['firstName'])) :
    echo "Hello ".$_GET['firstName'];

elseif(isset($_GET['lastName'])) :
    echo "Hello ".$_GET['lastName'];

else : 
    echo "Hello there.";
endif;