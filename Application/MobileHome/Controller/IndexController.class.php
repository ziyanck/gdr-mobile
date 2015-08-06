<?php
namespace MobileHome\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	if(is_login()) {
			$this->display();
    	} else {
    		$this->display('Public/login');
    	}
    }
}