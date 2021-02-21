<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$base_url = 'http://localhost/apkdevtech/';

?>

<!DOCTYPE html>
<html lang="zxx" class="js">

<head>

    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@@page-discription">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="<?php echo($base_url) ?>js/images/socials/medium.png">
    <!-- Page Title  -->
    <title><?php echo $heading; ?></title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="<?php echo($base_url) ?>js/assets/css/dashlite.css?ver=1.4.0">
    <link id="skin-default" rel="stylesheet" href="<?php echo($base_url) ?>js/assets/css/theme.css?ver=1.4.0">
</head>

<body class="nk-body bg-white npc-general pg-error">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap justify-center">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-block nk-block-middle wide-md mx-auto">
                        <div class="nk-block-content nk-error-ld text-center">
                            <img class="nk-error-gfx" src="<?php echo($base_url) ?>js/images/gfx/error-404.svg" alt="">
                            <div class="wide-xs mx-auto">
                                <h3 class="nk-error-title">Oops! Why you’re here?</h3>
                                <p class="nk-error-text"> We are very sorry for inconvenience. It looks like you’re try to access a page that either has been deleted or never existed.</p>
                                <a href="javascript:history.go(-1)" class="btn btn-lg btn-primary mt-2">Back To Home</a>
                            </div>
                        </div>
                    </div><!-- .nk-block -->
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="<?php echo($base_url) ?>js/assets/js/bundle.js?ver=1.4.0"></script>
    <script src="<?php echo($base_url) ?>js/assets/js/scripts.js?ver=1.4.0"></script>

</html>
