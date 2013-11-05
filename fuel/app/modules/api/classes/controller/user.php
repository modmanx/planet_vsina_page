<?php

namespace Api;

class Controller_User extends \Controller_Rest
{

	public function post_index(){

		

		$this->response([
				'status' => 1,
				'msg' => 'ok'
			], 200);

	}

}
