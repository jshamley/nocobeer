<header>
  <?php print render($page['header']); ?>
</header>

<nav>
  <?php print render($page['navigation']); ?>
</nav>

<a id="main-content"></a>
<div>
  <?php print render($title_prefix); ?>
  <?php if ($title): ?>
    <h1 class="page__title title" id="page-title"><?php print $title; ?></h1>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
  <?php print $messages; ?>
  <?php print render($tabs); ?>
  <?php print render($page['help']); ?>
  <?php if ($action_links): ?>
    <ul class="action-links"><?php print render($action_links); ?></ul>
  <?php endif; ?>
  <?php print render($page['content']); ?>
  <?php print $feed_icons; ?>
</div>

<footer>
  <?php print render($page['footer']); ?>
</footer>