/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/
(function ($, Drupal, drupalSettings) {
  Drupal.behaviors.js_webassert_test_wait_for_element = {
    attach: function attach(context) {
      $('#js_webassert_test_element_invisible').show();
    }
  };
})(jQuery, Drupal, drupalSettings);