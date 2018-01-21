<?php
namespace app\index\controller;

use think\Controller;
use app\index\model\Text;
use app\index\model\Pic;
use app\index\model\Setting;
use think\Url;

class Index extends Controller
{
    public function index()
    {   
        $text = Text::select();
        $this->assign('text', $text);
        
        $pic = Pic::where('id', '<', '1000')
            ->limit(6)
            ->order('weight', 'desc')
            ->select();
        $this->assign('pic', $pic);

        $head = Setting::where('id',1)->select();
        $this->assign('head', $head);

        $top = Setting::where('id',0)->select();
        $this->assign('top', $top);

        return $this->fetch();       
    }
    
    public function character(){
        $text = Text::select();
        $this->assign('text', $text);
        
        $pic = Pic::where('type', 'character')
            ->limit(6)
            ->order('weight', 'desc')
            ->select();
        $this->assign('pic', $pic);

        $head = Setting::where('id',1)->select();
        $this->assign('head', $head);

        $top = Setting::where('id',3)->select();
        $this->assign('top', $top);

        return $this->fetch('index');
    }
    
    public function natural(){
        $text = Text::select();
        $this->assign('text', $text);
        
        $pic = Pic::where('type', 'natural')
            ->limit(6)
            ->order('weight', 'desc')
            ->select();
        $this->assign('pic', $pic);

        $head = Setting::where('id',1)->select();
        $this->assign('head', $head);

        $top = Setting::where('id',3)->select();
        $this->assign('top', $top);

        return $this->fetch('index');
    }
    
    public function science(){
         $text = Text::select();
        $this->assign('text', $text);
        
        $pic = Pic::where('type', 'science')
            ->limit(6)
            ->order('weight', 'desc')
            ->select();
        $this->assign('pic', $pic);

        $head = Setting::where('id',1)->select();
        $this->assign('head', $head);

        $top = Setting::where('id',3)->select();
        $this->assign('top', $top);

        return $this->fetch('index');
    }
}




























