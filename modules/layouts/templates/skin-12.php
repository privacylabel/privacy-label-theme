<?php

/*

type: layout

name: Horizontal Ruler Spacer

position: 12

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-0';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-0';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop horizontal-ruler" field="layout-skin-12-<?php print $params['id'] ?>" rel="module" style="background-color:#00CFA0">
   <hr/>
</section>
