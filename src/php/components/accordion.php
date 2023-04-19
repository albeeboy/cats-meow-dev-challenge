<?php
/**
  * Template name: Accordion
**/

?>

<div class="accordion">
  <ul class="accordion__container">
    <?php foreach ($accordion_content as $el) : ?>
      <li>
        <label class="chivo color--forest font-weight--bold" for="<?='accordion__el-' . $el['num'];?>"><?=$el['label'];?> <span>+</span></label>
        <input type="radio" name="accordion" id="<?='accordion__el-' . $el['num'];?>">
        <div class="accordion__content"><p class="chivo font-weight--normal color--forest"><?=$el['content'];?></p></div>
      </li>
    <?php endforeach; ?>
      </ul>
</div>
