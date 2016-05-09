<?php

class Json {
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