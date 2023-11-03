<?php require '../private/includes/db.php' ?>

<?php
if (isset($_GET['gebak_slug'])) {
    $the_gebak_slug = $_GET['gebak_slug'];
}

$query = "SELECT * FROM gebakken WHERE slug = '$the_gebak_slug'";
$select_gebak = mysqli_query($connection, $query);



while ($row = mysqli_fetch_assoc($select_gebak)) {
    $gebakken_id = $row['id'];
    $gebakken_title = $row['title'];
    $gebakken_slug = $row['slug'];
    $gebakken_intro = $row['intro'];
    $gebakken_text = $row['text'];
    $gebakken_image = $row['image'];

    ?>
<section class="gebak">
    <h1 class="gebak_title">
        <?php echo $gebakken_title?>
    </h1>
    <img src="./src/img/<?php echo $gebakken_image ?>" alt="een foto van een <?php echo $gebakken_title ?>" class="gebak_img">
    <p class="gebak_p"><?php echo $gebakken_text ?></p>
</section>
    <?php
}
?>