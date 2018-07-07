<?php 
namespace app\controllers;

use yii\web\Controller;
use app\models\Country;
use app\models\NewResturant;


class ResturantsController extends Controller
{
	public function actionIndex()
    {
    	return $this->render('index');
	}

	public function actionNew()
    {
    	return $this->render('new');
	}

	 public function actionSubmit()
    {
        $model = new NewResturant();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // valid data received in $model

            // do something meaningful here about $model ...

            return $this->render('resturant-adding-confirm');
        } else {
            // either the page is initially displayed or there is some validation error
            return $this->render('new', ['model' => $model]);
        }
    }
}