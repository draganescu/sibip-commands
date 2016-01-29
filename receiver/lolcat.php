<?php
namespace command;

function lolcat() {
	$search_query = 'lolcat';
	$html = file_get_html( "https://www.google.com/search?q=$search_query&tbm=isch" );
	$doc = new DOMDocument();
	$doc->loadHTML($html);
	$dom->preserveWhiteSpace = false;
	$images = $dom->getElementsByTagName('img');
	$image = array_rand($images);
	return $image->getAttribute('src');
}