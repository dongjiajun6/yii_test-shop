<?php
	//后台商品管理控制器
	class GoodsController extends Controller{
		function actionShow(){
                    //通过模型model实现数据表信息查询
//                    产生模型model对象
                    $goods_model=Goods::model();
//                    通过model模型调用相关方法，查询数据
                    // $goods_infos=$goods_model->find();//find每次只查询一条商品信息
                    // echo $goods_infos->goods_name;
					// echo "<br />";
					// echo $goods_infos->goods_price;
					
                    //获得全部信息findAll()
                    // $this->renderPartial('show');
					// $goods_infos=$goods_model->findAll();
					// 获得全部商品的名字
					// foreach($goods_infos as $obj){
						// $obj 是遍历出来的具体对象
						// echo $obj->goods_name,'----',$obj->goods_price;
						// echo '<br />';
					// }
					//把获得的数据传递到末班里面
					//renderPartial('视图名字'，传递的变量信息)
					//renderPartial('show',array('名字'=>值，'名字'=>值))
                    //名字是视图中使用的变量名
					// 值是当前传递的变量值
					//通过具体sql语句获得信息
					$sql="select * from {{goods}}";
					$goods_infos=$goods_model->findAllBySql($sql);
					$this->renderPartial('show',array('goods_infos'=>$goods_infos)) ; 
		}
		
		function actionAdd(){
			$goods_model=new Goods();
			if(!empty($_POST)){
				$goods_name=$_POST['Goods']['goods_name'];
				$goods_model->goods_name=$goods_name;
				$goods_model->save();
				$this->redirect('index.php?r=houtai/goods/show');
			}else{
				$this->renderPartial('add',array('goods_model'=>$goods_model));
			}
		}
		
		function actionUpdate($id){
			//修改哪个商品，需要将其信息查询出来

			//接收被修改商品信息的id
			//根据id，查询被修改商品信息
			
			$goods_model=Goods::model();//除了添加数据，都用Goods：：model（）实例化对象
			$goods_info=$goods_model->findByPk($id); //通过主键
			if(isset($_POST['Goods'])){
				foreach($_POST['Goods'] as $key=>$val){
					$goods_info->$key=$val;
				}
				if($goods_info->save()) $this->redirect('index.php?r=houtai/goods/show');
			}else{
				$this->renderPartial('update',array('goods_info'=>$goods_info)); //把goods_info传到视图末班里面
			}
		}

		function actionDel($id){
			//删除商品信息与修改类似，把被删除的id通过get方式传递
			$goods_model=Goods::model();
			$goods_info=$goods_model->findByPk($id);
			if($goods_info->delete()){
				$this->redirect('index.php?r=houtai/goods/show');
			}
		}
	}
	