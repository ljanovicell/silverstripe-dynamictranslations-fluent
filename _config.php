<?php

/**
 * Dynamic Translations module for SilverStripe
 */

// Dynamic translations should never time-out
SS_Cache::set_cache_lifetime('DynamicTranslations', null, 100);

// Alias for DynamicTranslationProvider::t()
function _dt($entity, $string = '', $injectionArray = array()){

  return DynamicTranslationProvider::t($entity,$string,$injectionArray);

}
