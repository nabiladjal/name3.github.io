<?php
/* WARNING: DO NOT EDIT THIS FILE DIRECTLY. USE THE WEB-BASED EDITOR FEATURE OR EDIT CONFIG.PHP DIRECTLY */

/**
 * Configuration options
 * If you want to set up the most common options for Domain Broker 2 you're in the right place!
 * Simply edit the contents (between quotation marks) of the items below to what you'd like.
 *
 * @package Domain Broker 2
 * @author Derek Loewen <derek@derekloewen.com>
 */

$config = array(
	// -------------------------------------------------------------------
	// General
	// -------------------------------------------------------------------
	// Show the domain portfolio?
	'enable_domain_portfolio' => *ENABLE_DOMAIN_PORTFOLIO_VALUE*,
	// -------------------------------------------------------------------
	// Footer contact info
	// -------------------------------------------------------------------
	'email' => '*EMAIL_VALUE*',
	'phone' => '*PHONE_VALUE*',
	// Twitter handle - just your username, no "@" symbol before it
	'twitter_handle' => '*TWITTER_HANDLE_VALUE*',
	// -------------------------------------------------------------------
	// Email/SMTP settings
	// -------------------------------------------------------------------
	'recipient_name' => '*RECIPIENT_NAME_VALUE*',
	'recipient_email' => '*RECIPIENT_EMAIL_VALUE*',
	'recipient_email_password' => '*RECIPIENT_EMAIL_PASSWORD_VALUE*',
	'smtp_server' => '*SMTP_SERVER_VALUE*',
	// -------------------------------------------------------------------
	// reCAPTCHA spam protection
	// -------------------------------------------------------------------
	'enable_recaptcha' => *ENABLE_RECAPTCHA_VALUE*,
	// Obtain keys from https://www.google.com/recaptcha
	'recaptcha_public_key' => '*RECAPTCHA_PUBLIC_KEY_VALUE*',
	'recaptcha_private_key' => '*RECAPTCHA_PRIVATE_KEY_VALUE*',
	// -------------------------------------------------------------------
	// Background options
	// -------------------------------------------------------------------
	// Image options include mountains, city-lights, and tabletop
	'image' => '*IMAGE_VALUE*',
	// Tint colour to apply on top of the image -- use hexadecimal format
	// #FFFFFF would add a white tint. Try out http://www.colorpicker.com/
	'tint' => '*TINT_VALUE*',
	// Texture options include circles, diamonds, feathers, and rough
	'texture' => '*TEXTURE_VALUE*',
	// -------------------------------------------------------------------
	// Editor settings
	// -------------------------------------------------------------------
	'editor_login_email' => '*EDITOR_LOGIN_EMAIL_VALUE*',
	'editor_auth_methods' => array(
		'Google' => array(
			'client_id' => '*GOOGLE_CLIENT_ID_VALUE*',
			'client_secret' => '*GOOGLE_CLIENT_SECRET_VALUE*'
		),

		'Live' => array(
			'client_id' => '*LIVE_CLIENT_ID_VALUE*',
			'client_secret' => '*LIVE_CLIENT_SECRET_VALUE*',
			'scope' => 'wl.emails'
		),
		
		'LinkedIn' => array(
			'api_key' => '*LINKEDIN_API_KEY_VALUE*',
			'secret_key' => '*LINKEDIN_SECRET_KEY_VALUE*',
			'scope' => 'r_emailaddress'
		),				
	),
);

// -------------------------------------------------------------------
// Domains
// -------------------------------------------------------------------
// A list of the domains you want to use with domain broker.
// This list is also used for the domain portfolio feature if
// the 'enable_domain_portfolio' setting is set to true
//
// Format (repeat for each domain): 
//
// 'domain name here' => array(
//	   'nicename' => 'ReplacesDomainNameText' // optional
// 	   'price' => 'price here',
// 	   'description' => 'description here',
// ),
//
// Notes:
// * If you don't want a price or description, erase the contents
//   inside the quote marks
// * If the price is blank, the tag will not show
// * Enter domain names *without* the "http://" in front
$domains = array(
	*DOMAINS_VALUE*
);