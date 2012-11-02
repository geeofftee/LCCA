<?php
/*
Plugin Name: Super Simple Contact Form
Plugin URI: http://shinraholdings.com/plugins/super-simple-contact-form
Description: An absurdly simple contact form plugin. Just type [contact]. There are no options.
Version: 1.3.1
Author: bitacre
Author URI: http://shinraholdings.com
	Copyright 2012 Shinra Web Holdings (http://shinraholdings.com)
*/

function super_simple_contact_form() { 
	if( array_key_exists( 'submit', $_POST ) ) : 
		$to_email = get_option( 'admin_email' );
		$subject = 'Super Simple Contact Form: ' . ( empty( $_POST['sscf_subject'] ) ? '(no subject)' : $_POST['sscf_subject'] );
		$message = ( empty( $_POST['sscf_message'] ) ? '(message was blank)' : $_POST['sscf_message'] );
		$from_name = ( empty( $_POST['sscf_from_name'] ) ? '(name was blank)' : $_POST['sscf_from_name'] );
		$from_email = ( empty ( $_POST['sscf_from_email'] ) ? $to_email : esc_attr( $_POST['sscf_from_email'] ) );
		$headers = 'From: ' . $from_name . ' <' . $from_email . '>' . "\r\n";
		
		wp_mail( $to_email, $subject, $message, $headers );
		$output = '<h1 class="intro-heading twelve mobile-four">Thanks!</h1><p class="success">' . __( 'Your message was sent successfully!', 'SuperSimpleContactForm' ) . '</p>
		<form action="" method="post" id="contact-form">
		<label for="sscf_from_name">' . __( 'Your name:', 'SuperSimpleContactForm' ) .'<input type="text" name="sscf_from_name" id="sscf_from_name" class="required" placeholder="Tell us your name"></label>
		
		<label for="sscf_from_email">' . __( 'Your email:', 'SuperSimpleContactForm' ) .'
		<input type="text" name="sscf_from_email" id="sscf_from_email" class="required email" placeholder="Type your email address"></label>
		
		<label for="sscf_subject">' . __( 'Subject:', 'SuperSimpleContactForm' ) .'<input type="text" name="sscf_subject" id="sscf_subject" class="required" placeholder="What' . "'" . 's your message about?"></label>
		
		<label for="sscf_message">' . __( 'Message', 'SuperSimpleContactForm' ) .'<textarea name="sscf_message" id="sscf_message" rows="10" class="required" placeholder="Type your message"></textarea></label>

		<button type="submit" name="submit" id="send" class="button">Send</button>
		</form>';  
	else : 
		$output = '
	<h1 class="intro-heading ten mobile-four">We' . "'" . 'd love to hear from you.</h1>
<p class="intro mobile-four">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
	<form action="" method="post" id="contact-form">
		<label for="sscf_from_name">' . __( 'Your name:', 'SuperSimpleContactForm' ) .'<input type="text" name="sscf_from_name" id="sscf_from_name" class="required" placeholder="Tell us your name"></label>
		
		<label for="sscf_from_email">' . __( 'Your email:', 'SuperSimpleContactForm' ) .'
		<input type="text" name="sscf_from_email" id="sscf_from_email" class="required email" placeholder="Type your email address"></label>
		
		<label for="sscf_subject">' . __( 'Subject:', 'SuperSimpleContactForm' ) .'<input type="text" name="sscf_subject" id="sscf_subject" class="required" placeholder="What' . "'" . 's your message about?"></label>
		
		<label for="sscf_message">' . __( 'Message', 'SuperSimpleContactForm' ) .'<textarea name="sscf_message" id="sscf_message" rows="10" class="required" placeholder="Type your message"></textarea></label>

		<button type="submit" name="submit" id="send" class="button">Send</button>
		</form>';
	endif;
	
	return $output;
}
add_shortcode( 'contact', 'super_simple_contact_form' );
?>