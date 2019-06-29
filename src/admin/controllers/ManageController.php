<?php

namespace yii2bundle\article\admin\controllers;

use yii2rails\domain\web\ActiveController as Controller;

class ManageController extends Controller {

	public $serviceName = 'article.article';
	public $formClass = 'yii2bundle\article\admin\forms\PostForm';

	public function actions() {
		$actions = parent::actions();
		$actions['index']['render'] = 'index';
		$actions['view']['render'] = 'view';
		return $actions;
	}
	
}
