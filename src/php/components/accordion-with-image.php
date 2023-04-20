<?php
/**
  * Template name: Accordion with Image
**/
?>

<section class="accordion-with-image">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="accordion-with-image__heading color--forest font-weight--normal"><?=$accordion_with_image_content['title'];?></h2>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <?php require 'accordion.php'; ?>
        <div class="accordion-with-image__image">
          <img src="<?=$accordion_with_image_content['image']['src'];?>" alt="$accordion_with_image_content['image']['alt']" width="100%">
        </div>
      </div>
    </div>
    </div>
  </div>
</section>
