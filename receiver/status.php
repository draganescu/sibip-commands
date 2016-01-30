<?php
namespace command;
use \RedBeanPHP\R;

function status() {
	$sender = \app\run('input', 'post', 'sender');
	$recipient = \app\run('input', 'post', 'recipient');
    $emails  = R::find( 'email', ' sender = ? or recipient = ? ', [ $sender, $recipient ]);
    $result = '<dl>';
    foreach ($emails as $email) {
    	$result .= '<dt>'.$email->subject.'</dt>';
    	$result .= '<dd>'.$email->body_plain.'</dd>';
    }
    $result .= '</dl>';
	return $result;
}