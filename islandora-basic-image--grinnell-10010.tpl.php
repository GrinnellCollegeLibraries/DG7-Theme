<?php

/**
 * @file
 * This is the template file for the object page for basic image
 *
 * @TODO: add documentation about file and available variables
 */
?>

<div class="islandora-basic-image-object islandora" vocab="http://schema.org/" prefix="dcterms: http://purl.org/dc/terms/" typeof="ImageObject">
  <div class="islandora-basic-image-content-wrapper clearfix">
    <?php if (isset($islandora_content)): ?>
      <div class="islandora-basic-image-content">
        <?php  // MM addition to this template is all contained in the next line of code.
          print '<div id="dg_linked_image">The image below is a screen capture (taken February 4, 2015) of the ACM Digital Library index<br/>of publications authored by Dr. Henry M. Walker, Grinnell College. <br/>The searchable metadata accompanying this image includes the text of all titles harvested from Dr. Walker\'s ACM publications index. <br/>You must visit the ACM index page in order to open live links which can be used to view and/or download content of interest.<br/>A link to Dr. Walker\'s page is provided here: <a href="http://www.cs.grinnell.edu/~walker/acm-publications.html" target="_blank">http://www.cs.grinnell.edu/~walker/acm-publications.html</a></div>';
          print $islandora_content;
        ?>
      </div>
    <?php endif; ?>
  </div>
  <div class="islandora-basic-image-metadata">
    <?php print $description; ?>
    <?php if ($parent_collections): ?>
      <div>
        <h2><?php print t('In collections'); ?></h2>
        <ul>
          <?php foreach ($parent_collections as $collection): ?>
            <li><?php print l($collection->label, "islandora/object/{$collection->id}"); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endif; ?>
    <?php print $metadata; ?>
  </div>
</div>
