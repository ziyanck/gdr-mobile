<?php
namespace MobileHome\Model;
use Think\Model;
class WorkerModel extends Model {

    protected $_validate = array(
        array('realname', 'require', '姓名不能为空', self::EXISTS_VALIDATE, 'regex', self::MODEL_BOTH),
        );

    protected $_auto = array(
        array('worker_no', 'setWorkerNo', 1, 'callback'),
        array('join_time', 'mystrtotime', 3, 'callback'),
        array('create_time', 'time', 1, 'function'),
        array('update_time', 'time', 2, 'function'),
        );
    
    /**
     * 自动生成工人编号
     * @author 黄胖厨
     * @access protected
     * @return string
     */
    protected function setWorkerNo() {
        $dateNo = !empty(I('post.joinTime')) 
            ? date('Ymd', strtotime(I('post.joinTime'))) : date('Ymd');
        return C('PROJECT_CODE') . $dateNo . get_letter(I('post.realname')) . mt_rand(0,9) . mt_rand(0,9);
    }

    protected function mystrtotime() {
        return empty(I('post.joinTime')) ? time() : strtotime(I('post.joinTime'));
    }

}
?>