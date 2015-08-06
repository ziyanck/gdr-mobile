<?php
namespace MobileHome\Model;
use Think\Model;

class MemberModel extends Model{
	public function login($uid) {
		$user = $this->field(true)->find();
		// 检查用户是否存在 || 状态禁用
		if(!$user || 1 != $user['status']) {
			$this->error('用户不存在或已禁用!');
		}
		// 记录行为
        // action_log('user_login', 'user', $uid, $uid);

        /* 登录用户 */
        $this->autoLogin($user);

        return true;
	}

	/**
     * 自动登录用户
     * @param  integer $user 用户信息数组
     */
    private function autoLogin($user){
        /* 更新登录信息 */
        $data = array(
            'uid'              => $user['uid'],
            'login_count'     => array('exp', '`login_count`+1'),
            'last_login_time' => NOW_TIME,
            'last_login_ip'   => get_client_ip(1),
        );
        $this->save($data);

        /* 记录登录SESSION和COOKIES */
        $auth = array(
            'uid'             => $user['uid'],
            'last_login_time' => $user['last_login_time'],
        );

        session('user_auth', $auth);
        session('user_auth_sign', data_auth_sign($auth));

    }
}
?>