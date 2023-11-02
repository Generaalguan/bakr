<?php

$query = "SELECT * FROM  gebakken";
$select_all_gebakken = mysqli_query($connection, $query);
?>

<main class="gebakken">
    <div class="gebakken_title">
        <h1 class="gebakken_header">Bakker</h1>
    </div>



    <?php
    while ($row = mysqli_fetch_assoc($select_all_gebakken)) {
        $gebakken_id = $row['id'];
        $gebakken_title = $row['title'];
        $gebakken_slug = $row['slug'];
        $gebakken_intro = $row['intro'];
        $gebakken_text = $row['text'];
        $gebakken_image = $row['image'];






        ?>



        <!-- First Blog Post -->
        <div class="gebakken_card">
            <h2 class="gebakken_name">
                <?php echo $gebakken_title ?>
            </h2>

            <img class="gebakken_img" src="src/img/<?php echo $gebakken_image; ?>" alt="">

            <p class="gebakken_intro">
                <?php echo $gebakken_intro ?>
            </p>
            <a class="gebakken_link" href="gebak.php?gebak_slug=<?php echo $gebakken_slug; ?>">
            <button class="gebakken_button">meer info</button>
            </a>
        </div>



    <?php }
    ?>
</main>