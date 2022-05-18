<?php

/*

type: layout

name: Side bar menu

position: 14

*/

?>




<section class="section edit safe-mode nodrop side-menu" field="layout-skin-14-<?php print $params['id'] ?>" rel="module" >
    <div class="container allow-drop">
        <p class="edit">Label structure</p>
        <module type="menu" name="Documentation" id="label-structure-menu" template="simple"/>
        <p class="edit">Label creation</p>
        <module type="menu" name="DocumentationCreate" id="label-creation-menu" template="simple"/>
        <p class="edit">Label development</p>
        <module type="menu" name="DocumentationDev" id="label-development-menu" template="simple"/>
    </div>
</section>
