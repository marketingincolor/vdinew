<?php
/* joints Custom Post Type Example
This page walks you through creating 
a custom post type and taxonomies. You
can edit this one or copy the following code 
to create another one. 

I put this in a separate file so as to 
keep it organized. I find it easier to edit
and change things if they are concentrated
in their own file.

*/


function codex_custom_init() {
    $args = array(
      'public' => true,
      'label'  => 'Capabilities',
      'supports' => array( 'title', 'thumbnail', 'page-attributes', 'editor' )
    );
    register_post_type( 'capabilities', $args );
}
add_action( 'init', 'codex_custom_init' );
