<?php
namespace app\admin\controller;
use think\View;
use think\Controller;
use app\admin\model\User;
use app\admin\model\Pic;
use think\Session;


class Modify extends Controller{
  
  public function modifyPicture($id=''){
	$pic = Pic::where('id', $id)->select();
	//$pic = json_decode($pic);

	$this->assign('pic', $pic);
	//var_dump($pic); 
	//echo $pic[0]["id"].'<br>';
	//$src =  $pic[0]["src"];
	//$this->assign('src', $src);
	//echo $pic[0]["weight"].'<br>';
	//$text =  $pic[0]["text"];
	//$this->assign('text', $text);
	//echo $pic[0]["type"].'<br>';
  	return $this->fetch('tab/modifyPicture');
  }

  public function modifyPicture_save($id='',$src='',$weight='',$content='',$state='',$time=''){
  	//echo $time ;
  	if(Pic::where('id', $id)
			->update([
			'type'=>$state,
			'src'=>$src,
			'text'=>$content,
			'time'=>$time,
			'weight'=>$weight
		]))
		$this->success('修改成功',"admin/index/picture");
	else 
		$this->success('修改失败',"admin/index/picture");
  }
}