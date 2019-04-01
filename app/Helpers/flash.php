<?php

function flash($message, $level = 'info'){
	session()->flash('flash_message', $message);
	session()->flash('flash_message_level', $level);
}