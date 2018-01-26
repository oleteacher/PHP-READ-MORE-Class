<?php
class ReadMore
{
	public function CountStr( $str ){

		return strlen($str);

	}
	public function Read( $params ){

		if(is_array($params)){


			$count = $this->CountStr($params['str']);
			$limit = $params['limit'];
			$start = $params['start'];
			if($count >= $limit){
				return substr($params['str'],$start, $limit);
			}else{
				return $params['str'];
			}

		}else{

			return false;

		}

	}
}