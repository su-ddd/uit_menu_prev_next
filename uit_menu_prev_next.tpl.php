<?php
/*
 * Available data
 * Previous URL: $links['prev_url']
 * Previous Link Title: $links['prev_title']
 * Next URL: $links['next_url']
 * Next Link Title: $links['next_title']
 *
 */
?>
<div class="menu_prev_next_links">
<?php if (isset($links['prev_url'])): ?>
<?php print l('<< (' . $links['prev_title'] . ') Previous', $links['prev_url']); ?>
<?php endif; ?>

<?php if (isset($links['next_url'])): ?>
<?php print l('Next (' . $links['next_title'] . ') >>', $links['next_url']); ?>
<?php endif; ?>
</div>
