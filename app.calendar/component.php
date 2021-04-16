<?php
if( ! defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
      die();

//////////////// Тело компонента ////////////////////////////////////////////

if( CModule::IncludeModule("iblock") )  {

  $this->IncludeComponentTemplate();

}
?>
