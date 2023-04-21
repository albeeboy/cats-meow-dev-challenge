<?php
/**
  * Template name: CTA Two-Column
**/

$external_link_attr =  $cta_two_col_content['external_link']
  ? ' target="_blank" rel="noreferrer noopener"'
  : '';
?>

<section class="cta-two-col">
  <div class="container">
    <div class="row">
      <h2 class="cta-two-col__large-viewport-heading display--none col-desktop-12 display-desktop--block chivo color--forest"><?=$cta_two_col_content['large_viewport_heading'];?></h2>
      <div class="col-12 display--block col-tablet-6 display-desktop--flex cta-two-col__left">
        <img class="cta-two-col__image" src="<?=$cta_two_col_content['image']['src'];?>" alt="<?=$cta_two_col_content['image']['alt'];?>" width="100%">
      </div>
      <div class="col-12 display--block col-tablet-6 display-desktop--flex cta-two-col__right">
        <h2 class="display--block display-desktop--none cta-two-col__heading chivo color--forest"><?=$cta_two_col_content['heading'];?></h2>
        <div>
          <p class="chivo cta-two-col__intro font-weight--light color--forest"><?=$cta_two_col_content['intro'];?></p>
          <a class="button__primary" href="https://www.example.com/book-your-stay"<?=$external_link_attr;?>><?=$cta_two_col_content['button_label'];?></a>
        </div>
      </div>
    </div>
  </div>
</section>
