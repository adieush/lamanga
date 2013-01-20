  <div class="wrap">
    <header>
      <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
          <div class="lamanga-logo"></div>
        </a>
      <?php endif; ?>
      
    </header>
    <div id='cssmenu'>
      <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'inline', 'clearfix')))); ?>
    </div>
    <div class="left-sidebar">
     <?php print render($page['sidebar_first']); ?>
    </div>
    <div class="center-content">
      <a id="main-content"></a>
        <?php print render($title_prefix); ?>
        <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
        <?php print render($title_suffix); ?>
        <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
        <?php print render($page['content']); ?>
        <?php print $feed_icons; ?>
    </div>
    <div class="right-sidebar">
      <?php print render($page['sidebar_second']); ?>
    </div>
    <div class="empty"></div>
  </div>
  <div class="footer">
    <?php print render($page['footer']); ?>
  </div>