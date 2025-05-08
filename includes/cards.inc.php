<?php
    $dataspace = array( "Sprint 1 Project:Ik", 
                        "Sprint 2 Project: Portfolio", 
                        "Sprint 3 Kries",
                        "Sprint 4 Project: Fast Tech",
                        "Sprint 4.2 Livio's Website",
                        "Sprint 5 Kwalificatie Dosier",
                        "Sprint 6 Shitter",
                        "Sprint 7 24 Heures du Mans",
                        "Extern Project Alpen Jagers",
                        "Extern Project Magazijnapp Buchem",);

    $link[] = "/Projecten/sprint_1.php";
    $link[] = "/Projecten/sprint_2.php";
    $link[] = "/Projecten/sprint_3.php";
    $link[] = "/Projecten/sprint_4.php";
    $link[] = "/Projecten/sprint_4,2.php";
    $link[] = "/Projecten/sprint_5.php";
    $link[] = "/Projecten/sprint_6.php";
    $link[] = "/Projecten/sprint_7.php";
    $link[] = "/Projecten/DeAlpenJagers.php";
    $link[] = "/Projecten/MagazijnappBuchem.php";
 

    $card = 1;

    $name = array (
    "Project: Ik",
    "Project: Portfolio", 
    "Kries",
    "Project: Fast Tech",
    "Livio's Website",
    "Kwalificatie Dosier",
    "Shitter",
    "24 Heures du Mans",
    "De AlpenJagers",
    "Magazijnapp Buchem",);

    foreach ($dataspace as $index => $value){
?>

<div class="card-grid-space" data-space="<?php echo $dataspace[$index]; ?>">
    <div class="num"><?php echo $name[$index]; ?> </div>
    <a class="card card<?php echo $card++; ?>" href="<?php echo $link[$index];?>">
    </a>
</div>

<?php 
    }
?>