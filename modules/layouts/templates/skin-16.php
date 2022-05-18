<?php

/*

type: layout

name: Documentation Examples

position: 16

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

<section class="<?php echo $layout_classes; ?> edit safe-mode nodrop pl-examples" field="skin-16-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12 col-xl-10 mx-auto">
                <div class="row">
                    
                    <div class="m-b-40 col-sm-12 col-lg-6 cloneable">
                        <div class="card shadow-sm">

                            <div class="allow-drop">
                                <h6 class="pl-example-header">EXAMPLE #1</h6>
                                <h4 class="m-t-10 m-b-10">Beautiful Website Party Time</h4>

                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when .</p>
                            </div>
                        </div>
                    </div>

                    <div class="m-b-40 col-sm-12 col-lg-6 cloneable">
                        <div class="card shadow-sm">

                            <div class="allow-drop">
                                <h6 class="pl-example-header">EXAMPLE #2</h6>
                                <h4 class="m-t-10 m-b-10">Modern Design Amazing Such Wow</h4>

                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when .</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</section>
