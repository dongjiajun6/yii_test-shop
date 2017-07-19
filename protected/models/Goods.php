<<<<<<< HEAD
<?php
//商品模型
//2017年7月10日22:08:18
//模型里边有两个关键方法，缺一不可
//model（）创建一个模型的对象，是静态方法
//tableName（）返回当前模型名字
class Goods extends CActiveRecord{
    public static function model($className=__CLASS__){
        return parent::model($className);
    }
    
    //返回当前模型的名字
    public function tableName(){
        return "{{goods}}"; //自动关联数据表的前缀
    }

   //设置标签对应的中文名
   function attributeLabels(){
       return array(
           'goods_name'=>'商品名称',
           'goods_weight'=>'重量',
           'goods_price'=>'价格',
           'goods_number'=>'数量',
           'goods_category_id'=>'分类',
           'goods_brand_id'=>'品牌',
           'goods_introduce'=>'介绍'
       );
   }
}

=======
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
>>>>>>> 9103e95703c98cea357a50896e91f83f79e42d66
