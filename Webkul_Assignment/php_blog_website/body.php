<style>
    img {
        width: 100px;
        height: 100px;
        margin: 10px;
    }

    div {
        display: inline-block;
    }

    span {
        margin: 10px 0 10px 0px;
        vertical-align: middle;
        text-align: left;
    }
</style>

<?php
$i = 0;
// $array = [array("name" => "ashutosh")];
// foreach ($array as $values) {
//     print_r($values["name"]);
// }
?>
<div>
    <?php
    while ($i != 10) {
        echo '<img src=""></img>';
        echo '<span>jj</span>';
        $i++;
    }
    ?>

</div>