<?php
namespace MobileHome\Controller;
use Think\Controller;
use User\Api\UserApi;

class PublicController extends Controller{
	public function login($username = null, $password = null, $verify = null) {
		if(IS_POST) {
			/* 校验验证码 */
			/*if(!check_verify($verify)) {
				$this->error('验证码错误!');
			}*/
			/* 调用UC登录接口登录 */
            $UserApi = new UserApi;
            $uid = $UserApi->login($username, $password);
            if(0 < $uid){ //UC登录成功
				/* 校验用户名&密码 */
				$member = D('Member');
				if($member->login($uid)) {
					$this->success('成功登录', U('Index/index'));
				} else {
					$this->error($member->getError());
				}
			} else {
				switch($uid) {
                    case -1: $error = '用户不存在或被禁用！'; break; //系统级别禁用
                    case -2: $error = '密码错误！'; break;
                    default: $error = '未知错误！'; break; // 0-接口参数错误（调试阶段使用）
                }
                $this->error($error);
			}
		} else {
			if(0 < is_login()) {
				$this->redirect('Index/index');
			} else {
				$this->display();
			}
		}
	}

	public function verify() {
		$config = array(
			/*'imageW'    => '120',
			'imageH'    => '30',
			'fontSize'  => '14',*/
			);
		$verify = new \Think\Verify($config);
		return $verify->entry(1);
	}
}
?>