<?php
add_action( 'ninja_forms_after_submission', 'send_ninja_form_to_sharpspring' );
function send_ninja_form_to_sharpspring($formData){
	
	$formFields = $formData['fields_by_key'];
	
	foreach($formFields as $formField):
		if($formField['key']=='sharpspring_post_url')://if this field is the sharpspring post url
			$post_url = $formField['value'];
		
		else://it's a form field, so let's add it to the body
			
			//if they specified an admin label to make it easier to map fields in sharpspring, use it
			if(!empty(trim($formField['admin_label']))):
				$fieldNiceName = $formField['admin_label'];
			else://use the field key
				$fieldNiceName = $formField['key'];
			endif;
			
			//add this field to the body
			if($formField['type'] != 'listcheckbox' && $formField['type'] != 'listmultiselect'):
				$body[$fieldNiceName] = $formField['value'];
			else://implode values if it is a checkbox or multi-select
				$body[$fieldNiceName] = implode(',',$formField['value']);
			endif;

		endif;
		
	endforeach;
	
	$body['trackingid__sb'] = $_COOKIE['__ss_tk']; //DO NOT CHANGE THIS LINE... it collects the tracking cookie to establish tracking

	$request = new WP_Http();
	$response = $request->post( $post_url, array( 'body' => $body ) );

}