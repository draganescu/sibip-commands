<?php
namespace command;

function hn() {
	$html = file_get_contents( "https://news.ycombinator.com/" );
	$regexp = '/<td class="title"><span class="deadmark"><\/span><a href="(.*?)">(.*?)<\/a><span class="sitebit comhead">/si';
	preg_match_all($regexp, $html, $matches);
	$result = '';
	foreach ($matches[1] as $key=>$link) {
		$result .= '<a href="'.$link.'">'.$matches[2][$key].'<a/><br/>';
	}
	return $result;
}