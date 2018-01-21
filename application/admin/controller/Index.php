<?php
namespace app\admin\controller;

use think\Controller;
use think\Session;
use app\admin\model\Pic;
use app\admin\model\Text;

class Index extends controller
{
	public function __construct() {
		parent::__construct();
		if (!Session::has('user')){
		 	return $this->error('请先登录',"Login/index", 3);
		}
	}

    public function index()
    {
        return $this->fetch();
    }
    public function lantianbaiyun(){
    	return $this->fetch('index/lantianbaiyun');
    }
    public function picture(){
        $pic = Pic::where('id', '<', '1000')->select();
        $json = json_encode($pic);
        //echo dump($json);
        $this->assign('json', $json);
        return $this->fetch('tab/picture');
    }
    public function article(){
        $pic = Text::where('id', '<', '3')->select();
        $json = json_encode($pic);
        $this->assign('json', $json);
        return $this->fetch('tab/article');
    }
    public function setting(){
        return $this->fetch('tab/setting');
    }
    public function addArticle(){
        return $this->fetch('tab/addArticle');
    }
    public function addPicture(){
        return $this->fetch('tab/addPicture');
    }
}
