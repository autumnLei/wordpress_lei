<?php
namespace app\index\controller;

use think\Controller;
use app\index\model\Text;
use app\index\model\Pic;
use app\index\model\Setting;
use think\Url;

class Article extends Controller
{
    public function aboutUs()
    {
        $text = Text::select();
        $this->assign('text', $text);
        
        $article = Text::where('id', 1)->select();
        $this->assign('article', $article);

        $pic = Pic::where('type', 'character')->select();
        $this->assign('pic', $pic);

        $head = Setting::where('id',1)->select();
        $this->assign('head', $head);

        $top = Setting::where('id',0)->select();
        $this->assign('top', $top);

        return $this->fetch('index/article');
    }

    public function contactUs()
    {
		$text = Text::select();
        $this->assign('text', $text);

        $article = Text::where('id', 0)->select();
        $this->assign('article', $article);
        
        $pic = Pic::where('type', 'character')->select();
        $this->assign('pic', $pic);

        $head = Setting::where('id',1)->select();
        $this->assign('head', $head);

        $top = Setting::where('id',0)->select();
        $this->assign('top', $top);

        return $this->fetch('index/article');
    }
}