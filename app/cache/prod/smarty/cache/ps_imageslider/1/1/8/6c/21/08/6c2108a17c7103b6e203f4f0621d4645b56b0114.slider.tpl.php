<?php /*%%SmartyHeaderCode:59749108059707788cb0053-61512418%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:ps_imageslider/views/templates/hook/slider.tpl',
      1 => 1500369154,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '59749108059707788cb0053-61512418',
  'variables' => 
  array (
    'homeslider' => 0,
    'slide' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59707788cc1ef4_24605273',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59707788cc1ef4_24605273')) {function content_59707788cc1ef4_24605273($_smarty_tpl) {?>
  <div id="carousel" data-ride="carousel" class="carousel slide hidden-sm-down" data-interval="5000" data-wrap="true" data-pause="hover">
    <ul class="carousel-inner" role="listbox">
              <li class="carousel-item active">
          <a href="http://www.prestashop.com/?utm_source=back-office&amp;utm_medium=v17_homeslider&amp;utm_campaign=back-office-FR&amp;utm_content=download">
            <figure>
              <img src="http://localhost:8000/modules/ps_imageslider/images/sample-1.jpg" alt="sample-1">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">Sample 1</h2>
                  <div class="caption-description"><h2>EXCEPTEUR OCCAECAT</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tristique in tortor et dignissim. Quisque non tempor leo. Maecenas egestas sem elit</p></div>
                </figcaption>
                          </figure>
          </a>
        </li>
              <li class="carousel-item ">
          <a href="http://www.prestashop.com/?utm_source=back-office&amp;utm_medium=v17_homeslider&amp;utm_campaign=back-office-FR&amp;utm_content=download">
            <figure>
              <img src="http://localhost:8000/modules/ps_imageslider/images/sample-2.jpg" alt="sample-2">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">Sample 2</h2>
                  <div class="caption-description"><h2>EXCEPTEUR OCCAECAT</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tristique in tortor et dignissim. Quisque non tempor leo. Maecenas egestas sem elit</p></div>
                </figcaption>
                          </figure>
          </a>
        </li>
              <li class="carousel-item ">
          <a href="http://www.prestashop.com/?utm_source=back-office&amp;utm_medium=v17_homeslider&amp;utm_campaign=back-office-FR&amp;utm_content=download">
            <figure>
              <img src="http://localhost:8000/modules/ps_imageslider/images/sample-3.jpg" alt="sample-3">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">Sample 3</h2>
                  <div class="caption-description"><h2>EXCEPTEUR OCCAECAT</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tristique in tortor et dignissim. Quisque non tempor leo. Maecenas egestas sem elit</p></div>
                </figcaption>
                          </figure>
          </a>
        </li>
          </ul>
    <div class="direction">
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
        <span class="icon-prev hidden-xs" aria-hidden="true">
          <i class="material-icons">&#xE5CB;</i>
        </span>
        <span class="sr-only">Précédent</span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
        <span class="icon-next" aria-hidden="true">
          <i class="material-icons">&#xE5CC;</i>
        </span>
        <span class="sr-only">Suivant</span>
      </a>
    </div>
  </div>
<?php }} ?>
