<?php require'../../private/includes/db.php' ?>

<?php
            if (isset($_GET['gebak_slug'])) {
                $the_gebak_slug = $_GET['gebak_slug'];
            }   
            
            $query = "SELECT * FROM gebakken WHERE slug = $the_gebak_slug ";
            $select_gebak = mysqli_query($connection, $query);

            while ($row = mysqli_fetch_assoc($select_gebak)) {
                $gebakken_id = $row['id'];
                $gebakken_title = $row['title'];
                $gebakken_slug = $row['slug'];
                $gebakken_intro = $row['intro'];
                $gebakken_text = $row['text'];
                $gebakken_image = $row['image'];

                ?>

                


            <?php } ?>