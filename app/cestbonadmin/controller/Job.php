<?php
namespace app\cestbonadmin\controller;
use \think\Controller;
use \think\Db;
use \think\Request;
use \app\cestbonadmin\model\Job as JobModel;
/**
* 
*/
class Job extends Common{
	public function JobList(){
		return view();
	}
	public function JobAdd(){
		if (Request::instance()->isAjax()){
			//序列化数据转换数组
			parse_str(input("post.data"),$data);
			// $res = JobModel::SetAdd($data);
			var_dump($data);
		}
		return view();
	}
}