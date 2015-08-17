<?php 
namespace MobileHome\Controller;
use Think\Controller;
class WorkerController extends Controller {

    public function index() {
        $workerList = $this->getList();
        $this->assign('listRows', $workerList['listRows']);
        $this->assign('workerList', $workerList['list']);
        $this->display();
    }

    public function search() {
        $map = array();
        $sex = intval(I('sex'));
        $status = intval(I('status'));
        $telephone = (string)I('telephone');
        $realname = (string)I('realname');
        if(! empty($realname)) {
            $map['realname'] = array('like', '%' . $realname . '%');
        }
         if(! empty($telephone)) {
            $map['telephone'] = array('like', '%' . $telephone . '%');
        }
        if(0 <= $sex) {
            $map['sex'] = $sex;
        }
        if(0 <= $status) {
            $map['status'] = $status;
        }
        $workerList = $this->getList($map);
        $this->assign('listRows', $workerList['listRows']);
        $this->assign('workerList', $workerList['list']);
        $this->assign('map', I('post.'));
        $this->display('index');
    }

    public function add() {
        if(IS_POST) {
            $Worker = D('Worker');
            if($Worker->create()) {
                if(false !== $Worker->add()) {
                    $this->success('保存成功');
                } else {
                    $this->error('保存失败');
                }   
            } else {
                $this->error($Worker->getError());
            }
        } else {
            $this->display('edit');
        }
    }

    public function edit($id = 0) {
        if(IS_POST) {
            $Worker = D('Worker');
            if($Worker->create()) {
                if(false !== $Worker->save()) {
                    $this->success('更新成功');
                } else {
                    $this->error('更新失败' . $Worker->getLastSql());
                }
            } else {
                $this->error($Worker->getError());
            }
        } else {
            $data = array();
            $data = M('Worker')->field('create_time, update_time', true)->find($id);
            if(false === $data) $this->error('编辑数据出错');
            if(! empty($data)) $data['join_time'] = date('Y-m-d', $data['join_time']);
            $this->assign('data', $data);
            $this->display();
        }
    }

    public function loadMoreToHtml($loadRows = 6) {
        $return = '';
        $Worker = D('Worker');
        if (! empty(I('post.listRows'))) {
            $firstRow = I('post.listRows');
            $datas = $Worker->order('create_time desc')->limit($firstRow, $loadRows)->select();
            $listRows = $firstRow + $loadRows;
            $htmls = '';
            foreach($datas as $key => $data) {
                1 === $data['status'] ? $status = '在职' : $status = '离职';
                1 === $data['sex'] ? $sex = '男' : $sex = '女';
                $htmls .= '<li><a href="' . U('edit?id=' . $data['id']) . '" class="ui-btn ui-btn-icon-right ui-icon-carat-r"><h2>';
                $htmls .= $data['realname'] . '(' . $sex . ')</h2>';
                $htmls .= '<p>状态：' . $status . '</p>';
                $htmls .= '<p>电话：' . $data['telephone'] . '</p>';
                $htmls .= '<p>技能描述：' . $data['description'] . '</p>';
                $htmls .= '<p class="ui-li-aside">' . $data['worker_no'] . '</p></a>';
                $htmls .= '<span class="delete-btn"><p>删 除</p></span></li>';
            }
            $return = array('listRows' => $listRows, 'htmls' => $htmls);
        }
        $this->ajaxReturn($return);
    }

    protected function getList($map = array(), $listRows = 10) {
        $Worker = D('Worker');
        $workerList = $Worker->where($map)->order('create_time desc')->limit($listRows)->select();
        $data = array('listRows' => $listRows, 'list' => $workerList);
        return $data;
    }

     public function delete() {
        $id = intval(I('id',0));

        if (empty(id)) {
            $this->error('请选择要操作的数据!');
        }

        $map = array('id' => $id);
        if(M('Worker')->where($map)->delete()) {
            $this->success('删除成功');
        } else {
            $this->error('删除失败');
        }
    }

}
?>
