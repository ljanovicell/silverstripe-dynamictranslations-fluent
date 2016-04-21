<?php

/* Alias for DynamicTranslationProvider::t()
 *
 */
function _dt($entity, $string = '', $injectionArray = array()){

  return DynamicTranslationProvider::t($entity,$string,$injectionArray);

}
