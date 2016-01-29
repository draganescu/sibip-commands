<?php
namespace command;

function lolcat() {
	$json = file_get_contents("http://api.giphy.com/v1/gifs/random?api_key=dc6zaTOxFJmzC&tag=lolcat");
	$lolcat = json_decode($json, true);
	return '<img src="'.$lolcat['data']['image_url'].'" />';
}