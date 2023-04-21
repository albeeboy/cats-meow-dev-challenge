<?php
/**
  * Template name: Accordion with Image
**/
?>

<section class="accordion-with-image">
  <div class="container">
    <div class="row">
      <div class="col-12 display--block col-tablet-6 display-desktop--flex accordion-with-image__left">
        <div>
          <h2 class="accordion-with-image__heading color--forest font-weight--normal"><?=$accordion_with_image_content['heading'];?></h2>
          <?php require 'accordion.php'; ?>
        </div>
      </div>
      <div class="col-12 col-tablet-6 accordion-with-image__right">
        <div class="accordion-with-image__image">
          <img src="<?=$accordion_with_image_content['image']['src'];?>" alt="$accordion_with_image_content['image']['alt']" width="100%">
        </div>
      </div>
    </div>
  </div>
</section>
