<?php
/**
  * Template name: Accordion
**/

?>

<div class="accordion">
  <ul class="accordion__container">
    <?php foreach ($accordion_content as $el) : ?>
      <li id="<?='accordion__el-' . $el['num'];?>">
        <div class="accordion__label chivo font-weight--bold"><?=$el['label'];?> <span><?php require 'svg/plus.php'; ?></span></div>
        <div class="accordion__content"><p class="chivo font-weight--normal"><?=$el['content'];?></p></div>
      </li>
    <?php endforeach; ?>
      </ul>
</div>
