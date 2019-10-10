<?php
	$session_id = $_POST['session_id'];
	$current_token = md5($session_id);
	echo json_encode(array("id" => $current_token));
?>