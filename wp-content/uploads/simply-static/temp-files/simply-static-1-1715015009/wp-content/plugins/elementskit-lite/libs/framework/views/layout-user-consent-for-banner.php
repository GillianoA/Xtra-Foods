<style>.ekit-user-consent-for-banner{
		margin: 0 0 15px 0!important;
		max-width: 655px;
	}</style>
<script>
	jQuery(document).ready(function ($) {
		"use strict";
		$('#ekit-admin-switch__ekit-user-consent-for-banner').on('change', function(){
			let val = ($(this).prop("checked") ? $(this).val() : 'no');
			let data = {
				'settings' : {
					'ekit_user_consent_for_banner' : val, 
				}, 
				'nonce': "<br />
<b>Fatal error:  Uncaught Error: Call to undefined function esc_html() in C:\xampp\htdocs\Xtra-Foods\wp-content\plugins\elementskit-lite\libs\framework\views\layout-user-consent-for-banner.php:16
Stack trace:
#0 {main}
  thrown in <b>C:\xampp\htdocs\Xtra-Foods\wp-content\plugins\elementskit-lite\libs\framework\views\layout-user-consent-for-banner.php on line <b>16<br />
</script>