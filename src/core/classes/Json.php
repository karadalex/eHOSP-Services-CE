<?php


class Json {
    
    /*
    * Creates an JSON object based on a PHP array
    * @param 
    * @return string jsonObj
    */
	public function create($phpArray = array()) {
		if(empty($phpArray)) {
			return "{}";
		} else {
			$jsonObj = "{";
			foreach($phpArray as $key => $value) {
				$jsonObj .= "\"" . $key . "\":" . "\"" . $value . "\",";
			}
			$jsonObj .= "}";

			return $jsonObj;
		}

	}
}