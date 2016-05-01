<?php
/**
* Plugin Name: Gfycat Shortcode
* Plugin URI: http://ftsoftware.eu/en
* Description: A simple to use shortcode for Gfycat clips.
* Version: 1.0
* Author: Gino Messmer
* Author URI: http://ftsoftware.eu/en
* License: GPLv2. See license file for more information.
*/

	function gfycat_clip_embed_builder($atts) {
		extract(shortcode_atts(array(
			'id' => 'CandidImmaterialDromedary',
			'mode' => 'default'
		), $atts));
		
		$html_widget = '';
		
		switch($mode){
			case 'full':
			case 'responsive':
				$html_widget = '<div style="position:relative;padding-bottom:calc(100% / 1.80)"><iframe src="https://gfycat.com/ifr/' . $id . '" frameborder="0" scrolling="no" width="100%" height="100%" style="position:absolute;top:0;left:0;" allowfullscreen></iframe></div>';
				break;
			default:
				$html_widget = '<iframe src="https://gfycat.com/ifr/' . $id . '" frameborder="0" scrolling="no" width="640" height="355.55555555555554" allowfullscreen></iframe>';
				break;
		}
		
		return $html_widget;
	}
	
	add_shortcode('gfycat', 'gfycat_clip_embed_builder');