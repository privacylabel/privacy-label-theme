<?php

/*

type: layout

name: Documentation Text

position: 15

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-50';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-50';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop documentation-text" field="layout-skin-15-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12 col-xl-10 text-left allow-drop mx-auto">
                <h3>This is a H3 title</h3>
                <div class="element">
                    <p>This is intro text</p>
                </div>
                <div class="element">
                    <ul>
                        <li>list item</li>
                        <li>list item</li>
                    </ul>
                </div>
                <h4>This is a H4 title</h4>
                <div class="element">
                    <p>This is more text</p>
                </div>
                <div class="element">
                    <ul>
                        <li>list item</li>
                        <li>list item</li>
                    </ul>
                </div>
                
                <div class="element">
                    <hr/>
                </div>
            </div>
        </div>
    </div>
</section>
