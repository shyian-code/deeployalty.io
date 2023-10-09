<?php
$lang_atr = $_SERVER['REQUEST_URI'];
$lang_implode = explode("/", $lang_atr);
?>

    <div id="hbst-general-header<?php
    if($lang_implode[1] == "ru" ) {
        echo "-ru"; }
    if($lang_implode[1] == "ua"){
        echo "-ua";
    };?>" class="hubspot-wrapper hubspot-wrapper-header">

        <?= do_shortcode(get_field('hubspot_contact_form')); ?>
    </div>
