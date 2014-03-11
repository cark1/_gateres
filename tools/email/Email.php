<?php

namespace gateres\tools\email;


class Email{
	
	public $to;
	public $subject;
	public $message;
	
	public $headers;
	
	function __construct($_to, $_subject, $_message){
		
		$this->to = $_to;
		$this->subject = $_subject;
		$this->message = $_message;
		
	}//__construct
	
	
	function send(){
		
		return mail($this->to, $this->subject, $this->message, $this->headers);
		
	}//send
	
	
	function addFromHeader($_from){
		
		$this->headers.="From: ".$_from."\r\n";
		
	}//addFromHeader
	
	
	function addReplyToHeader($_replayTo){
		
		$this->headers.="Reply-To: ".$_replayTo."\r\n";
		
	}//addReplyToHeader
	
	
	function addXMailerHeader($_xMailer = null){
		
		$xMailer = "PHP/" . phpversion();
		if($_xMailer != null) $xMailer = $_xMailer;
		
		$this->headers.="X-Mailer: ".$xMailer;
		
	}//addXMailerHeader
	

}//Email	

?>