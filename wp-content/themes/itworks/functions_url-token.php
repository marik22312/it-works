<?php
$URL_TOKEN = '[%URL%]';

/**
* Find instances of the current domain and replace them with a token
* @param int $post_id
* @param String $content - The orignal content
* @return String - The updated content with the token replacement in place of the site URL
*/
function f3_createDomainToken( $content )
{
	global $URL_TOKEN;

    $domain = get_bloginfo('url');
    $token = $URL_TOKEN;

    $content = str_replace( $domain, $token, $content );


    return $content;
}

/**
* Find instances of the token and replace them with the current domain
* @param int $post_id
* @param String $content - The orignal content
* @return String - The updated content with the site URL in place of the token
*/
function f3_replaceDomainToken( $content )
{
	global $URL_TOKEN;

    $domain = get_bloginfo('url');
    $token = $URL_TOKEN;

    // Find instances of the token and replace them with the current domain
    $content = str_replace( $token, $domain, $content );

    return $content;
}

// DOMAIN REPLACEMENT FILTERS
add_filter( 'the_content', 'f3_replaceDomainToken', 10, 1);
add_filter( 'get_the_content', 'f3_replaceDomainToken', 10, 1);
add_filter( 'content_edit_pre', 'f3_replaceDomainToken', 10, 1);
add_filter( 'content_save_pre', 'f3_createDomainToken', 10, 1);
add_filter( 'the_editor_content', 'f3_replaceDomainToken', 10, 1);
?>