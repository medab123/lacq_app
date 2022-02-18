<?php
function afficherBar($r,$min,$max,$prifix = null){
    //SI(R25<=$L25-($M25-$L25)
    if($r <= $min-($max-$min)){
        echo "IIIII";
    }else{
        //SI(R25>=$M25+($M25-$L25);REPT("I";60)&"I"
        if($r>=$max+($max-$min)){
            echo str_repeat("I", 61);
        }
        //REPT("I";27+(K27-$L27)/($M27-$L27)*13)&"I")
        else{
            echo str_repeat("I", 27+($r-$min)/($max-$min)*13)."I";
        }
    }
}

afficherBar(80,70,120);
?>
