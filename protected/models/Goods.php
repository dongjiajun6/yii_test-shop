<?php
/*
商品模型
2017-7-10 17:22:24
模型里边有两个关键方法，缺一不可
model（）创建一个模型的对象，是静态方法
tableName（）返回当前数据表的名字
*/
class Goods extends CActiveRecord{
	// 返回当前模型对象的方法
	public static function model($className=__CLASS__){
		return parent::model($className);
	}
	
	// 返回当前数据表的名字
	public function tableName(){
		return '{{goods}}'; //两个大括号，会自动关联前缀（在main.php文件中配置数据表的前缀，如果有前缀的话）
	}
}