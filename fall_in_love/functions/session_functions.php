<?php
	function startSession(){
		if(session_id()=="")
			session_start();
	}

	function killSession(){
		session_destroy();
	}


?>