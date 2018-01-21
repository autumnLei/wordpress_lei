<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;

think\Route::rule('natural', 'index/Index/natural');
think\Route::rule('science', 'index/Index/science');
think\Route::rule('character', 'index/Index/character');
//定义后台管理界面路由 解决后台界面不能导入前台资源文件问题
think\Route::rule('manager', 'admin/Index/index');
//解决从后台返回前台的路由冲突
think\Route::rule('index', 'index/Index/index');
//专门为蓝天白云设置个背景
think\Route::rule('lantianbaiyun', 'admin/Index/lantianbaiyun');
//三个栏目的
think\Route::rule('picture', 'admin/Index/picture');
think\Route::rule('article', 'admin/Index/article');
think\Route::rule('setting', 'admin/Index/setting');

think\Route::rule('addPicture', 'admin/Index/addPicture');
think\Route::rule('addArticle', 'admin/Index/addArticle');

think\Route::rule('contactUs', 'index/Article/contactUs');
think\Route::rule('aboutUs', 'index/Article/aboutUS');
//修改图片的方法的路由
think\Route::rule('modifyPicture', 'admin/Modify/modifyPicture');
return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],

];
