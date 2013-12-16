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
		
		if(strlen($this->headers) > 0) $this->headers.='\r\n';
		
		$this->headers.='From: '.$_from;
		
		$this->headers = 'From: webmaster@example.com' . "\r\n" .
		    'Reply-To: webmaster@example.com' . "\r\n" .
		    'X-Mailer: PHP/' . phpversion();
		
	}//addFromHeader
	
	
	function addReplyToHeader($_replayTo){
		
		if(strlen($this->headers) > 0) $this->headers.='\r\n';
		
		$this->headers.='Reply-To: '.$_replayTo;
		
		$this->headers = 'From: webmaster@example.com' . "\r\n" .
		    'Reply-To: webmaster@example.com' . "\r\n" .
		    'X-Mailer: PHP/' . phpversion();
		
	}//addReplyToHeader
	
	
	function addXMailerHeader($_xMailer = null){
		
		if(strlen($this->headers) > 0) $this->headers.='\r\n';
		
		$xMailer = 'PHP/' . phpversion();
		if($_xMailer != null) $xMailer = $_xMailer;
		
		$this->headers.='X-Mailer: '.$xMailer;
		
	}//addXMailerHeader
	

}//Email	

?>