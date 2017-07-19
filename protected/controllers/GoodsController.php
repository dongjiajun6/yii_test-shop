<?php
	class GoodsController extends Controller{
		function actionCategory(){
			$this->renderPartial('category');
		}
		function actionDetail(){
			$this->renderPartial('detail');
		}
		function actionTest(){
			$this-> renderPartial('test');
		}
        function test(){
            
        }
    }
?>
