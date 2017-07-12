<?php
	class IndexController extends Controller{
		function actionHead(){
			$this->renderPartial('head');
		}
		function actionLeft(){
			$this->renderPartial('left');
		}
		function actionRight(){
			$this->renderPartial('right');
		}
		function actionIndex(){
			$this->renderPartial('index');
		}
	}