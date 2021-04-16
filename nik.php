<?
$dont_show_tcom_services   = true;
$dont_show_adminpanel      = true;
$dont_show_header          = true;
$dont_show_footer          = true;
$dont_show_toolbar         = true;
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php"); ?>

<?php
$month = $_REQUEST[ 'month' ] ? $_REQUEST[ 'month' ] : 0;
$APPLICATION->IncludeComponent( "bix:app.calendar",
    ".default",
    Array(  "CACHE_TIME" => "3600",
            "PRODUCT" => "Календарь за ",
            "MONTH" => $month
        )
    );
?>
</body>
</html>
