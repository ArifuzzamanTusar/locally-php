<div class="section_cat ">
    <div class="container">
        <h1 class="text-center pt-5  heading_texts cat_heading">Popular Topics</h1>
        <div class="row">
            <?php
            for ($i = 0; $i < 4; $i++) {


            ?>
                <div class="mb-4  col-md-3 col-sm-6 col-6 cat_grid">

                    <a class="cat_link" href="#">


                        <div class="cat-grid-item" style="background-image: url(images/<?php echo $bg ?>);">
                            <h3 class="cat_item_heading">Discussion</h3>
                        </div>
                    </a>

                </div>

            <?php
            }
            ?>


        </div>

    </div>
</div>