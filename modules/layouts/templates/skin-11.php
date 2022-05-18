<?php

/*

type: layout

name: Attention bar

position: 11

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


<section class="section edit safe-mode nodrop attention-bar" field="layout-skin-11-<?php print $params['id'] ?>" rel="module" style="background-color:#00CFA0">
    <!--<div class="container">
        <div class="row">
            <div class="col-xl-10 mx-auto position-relative allow-drop">-->
                <div class="row info-block">
                    <div class="element col-sm-0 col-md-3 text-sm-start allow-drop">
                    </div>
                    <div class="col-9 col-sm-7 col-md-6">
                        <strong class="m-b-5" style="color:white">We’re looking for people to help translate Privacy Label in other languages.
                        Czech, Polish and Italian are some of the languages that are still missing.</strong>
                    </div>
                    <div class="col-sm-5 col-md-3 text-sm-end">
                        <div class="element button-holder allow-drop">
                            <module type="btn" template="bootstrap" button_style="btn-outline-primary" button_size="btn-sm" button_text="I'd like to help!"/>
                        </div>
                    </div>
                </div>
            <!--</div>
        </div>
    </div>-->
</section>
