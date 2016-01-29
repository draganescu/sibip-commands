<?php
namespace command;

function vremea() {
	$json = file_get_contents('https://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20weather.forecast%20where%20woeid%20in%20(select%20woeid%20from%20geo.places(1)%20where%20text=%22bucharest,%20ro%22)&format=json&env=store://datatables.org/alltableswithkeys');
	$weather = json_decode($json, true);
	return $weather['query']['results']['channel']['item']['description'];
}