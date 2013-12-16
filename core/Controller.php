<?php

namespace gateres\core;


class Controller{
	
	protected $request;
	protected $response;
	
	function __construct($_request,$_response){
		
		$this->request = $_request;
		$this->response = $_response;
	
	}//__construct
	
	
	protected function getUrlParam($_paramName){
		
		if(isset($this->request->urlParams[$_paramName]) == false){
			return null;
		}else{
			return $this->request->urlParams[$_paramName];
		}
		
	}//getUrlParam
	
	
	protected function getBodyParam($_paramName){
		
		if(isset($this->request->bodyParams[$_paramName]) == false){
			return null;
		}else{
			return $this->request->bodyParams[$_paramName];
		}
		
	}//getBodyParam
	
	
	protected function getPathParam($_paramName){
		
		if(isset($this->request->pathParams[$_paramName]) == false){
			return null;
		}else{
			return $this->request->pathParams[$_paramName];
		}
		
	}//getPathParam
	
	
	protected function issetUrlParam($_paramName){
		
		if(isset($this->request->urlParams[$_paramName]) == false){
			return false;
		}else{
			return true;
		}
		
	}//issetUrlParam
	
	
	protected function issetBodyParam($_paramName){
		
		if(isset($this->request->bodyParams[$_paramName]) == false){
			return false;
		}else{
			return true;
		}
		
	}//issetBodyParam
	
	
	protected function issetPathParam($_paramName){
		
		if(isset($this->request->pathParams[$_paramName]) == false){
			return false;
		}else{
			return true;
		}
		
	}//issetPathParam
	
	
}//Controller