<?php
namespace app\admin\controller;

use think\Controller;
use app\admin\model\Pic;
use app\admin\model\Text;
use app\admin\model\Setting;

class Add extends controller
{
	public function addPicture($weight='', $src='',$content='',$time='',$state=''){
		$data = new Pic([
			'id'=>'',
			'type'=>$state,
			'src'=>$src,
			'text'=>$content,
			'time'=>$time,
			'weight'=>$weight
		]);
		if ($data->save())
		{
			echo "<script language=\"JavaScript\">\r\n";
			echo " alert(\"添加成功！\");\r\n";
			echo " history.back();\r\n";
			echo "</script>";
			exit();
		}
		else
		{
			echo "<script language=\"JavaScript\">\r\n";
			echo " alert(\"添加失败！\");\r\n";
			echo " history.back();\r\n";
			echo "</script>";
			exit();
		}
	}

	public function addText($weight='', $text='',$content1='',$time='',$state=''){
		if ($state == 'connectUs')
			$id = 0;
		else if ($state == 'aboutUs')
			$id = 1;
		else if ($state == 'logo')
			$id = 2;
		if(Text::where('id', $id)
			->update([
			'title'=>$state,
			'text'=>$text,
			'paranText'=>$content1,
			'time'=>$time,
			'weight'=>$weight
		]))
		{
			echo "<script language=\"JavaScript\">\r\n";
			echo " alert(\"修改成功！\");\r\n";
			echo " history.back();\r\n";
			echo "</script>";
			exit;
		}
		else
		{
			echo "<script language=\"JavaScript\">\r\n";
			echo " alert(\"修改失败！\");\r\n";
			echo " history.back();\r\n";
			echo "</script>";
			exit;
		} 	
	}

	public function setting($type='',$text=''){
		if($type == '首页标题')
			$id = 0;
		else if ($type == '网站标题')
			$id = 1;	
		if(
			Setting::where('id', $id)
					->update([
					'type'=>$type,
					'text'=>$text
			])
		 )
			$this->success('修改成功',"admin/index/setting");
		else 
			$this->success('修改成功',"admin/index/setting");
	}

	public function deleteText($id=''){
		$temp = array();
		$temp = explode(',', $id);
		$arrlength = count($temp);
		for($x=0;$x<$arrlength;$x++)
			Pic::destroy($temp[$x]);
	    $this->success('删除成功',"admin/index/picture");
	}
	public function upLoad($signal=''){
		if ($signal == 'signal')
			return $this->success('添加成功！', 'admin/Add/upLoad');
		return $this->fetch('index/upLoad');
	}
}