<div class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php if (!$label_hidden): ?>
    <div class="field-label"<?php print $title_attributes; ?>><?php print $label ?>:&nbsp;</div>
  <?php endif; ?>

  <?php foreach ($items as $delta => $item): ?>
    <span class="glyphicon glyphicon-calendar"></span><?php print render($item); ?>
  <?php endforeach; ?>
</div>
