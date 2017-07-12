<?php
	class UserController extends Controller{
		function actionLogin(){
			$this->renderPartial('login');
		}
		
		function actionRegister(){
			$this->renderPartial('register');
		}
	}