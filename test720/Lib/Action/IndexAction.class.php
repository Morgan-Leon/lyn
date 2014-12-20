<?php
class IndexAction extends Action {
    public function index(){
	
	$this->display();
	   
    
    }   

	public function archive(){
		dump($_GET);
		
		$product_id = $_GET["_URL_"][2];
	
		$version = $_GET["_URL_"][3];
	
		$imei = $_GET["_URL_"][4];

		dump("product_id = $product_id");
		dump("version = $version");
		dump("imei = $imei");
	}
}



