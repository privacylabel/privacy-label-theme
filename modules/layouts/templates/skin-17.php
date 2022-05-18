<?php

/*

type: layout

name: Fold-out for FAQ

position: 17

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

<section class="<?php echo $layout_classes; ?> edit safe-mode nodrop pl-fold-out" field="skin-17-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12 col-xl-12 mx-auto">
                <div class="row">
                    
                    <div class="cloneable">
                        <div class="shadow-sm w-100 mx-auto">
                            <details class="safe-element text-left">
                                <summary class="pl-fold-out-summary safe-element"><p>QUESTION #1. Click to fold out.</p></summary>
                                <div class="allow-drop safe-element pl-fold-out-details">
                                    <p class="safe-element">This is the answer to the first question. It will fold out once the question is clicked on. You can also drop other elements here if you want, such as pictures.</p>
                                </div>
                            </details>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</section>
