<?php
$num=8;
// $num=$_POST['limit'];
$dup=$num;
for($i=1;$i<=2;$i++){
    for($j=$i;$j<=2;$j++){
        echo("&nbsp;&nbsp;");
    }   
    for($k=1;$k<=(2*$i-1);$k++){
        echo("*");
    }
    echo("<br>");
}
$num=$num-4;
for($i=1;$i<=$num;$i++){
    if($i==$num){
        echo("&nbsp;&nbsp;"."&nbsp;&nbsp;"."*");
        for($j=1;$j<$dup-3;$j++){
            echo("&nbsp;&nbsp;");
        }
        echo("*"."<br>");
    }
    else{
    for($j=1;$j<=1;$j++){
        echo("&nbsp;&nbsp;"."&nbsp;&nbsp;");
    }
    echo("*"."<br>");}
}
echo("&nbsp;&nbsp");
for($i=1;$i<=$dup;$i++){
    echo("*");
}
echo("<br>"."&nbsp;&nbsp"."&nbsp;&nbsp"."*");
for($j=1;$j<$dup-3;$j++){
    echo("&nbsp;&nbsp;");
}
echo("*"."<br>");
?>