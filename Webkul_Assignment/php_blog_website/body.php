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
<?php
$result=[array("blogImage"=>"images\Screenshot_20221126_145708.png"),array("blogImage"=>"images\Screenshot_20230127_214304.png")];
echo"<pre>";print_r($result);
// foreach($result as $values){
//     echo($values["blogImage"]);
// }
?>
<div>
    <?php
    
        foreach($result as $values){
            // echo($values["blogImage"]);
            $image=$values["blogImage"];
            echo "<img src='$image'></img>";
            echo '<span>jj</span>';
        }
        
        
    ?>

</div>