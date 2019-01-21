<?php

namespace app\models;

use Yii;
use yii\base\Model;

class MyForm extends \yii\base\Model
{
	public $name;
	public $email;
	
	public function rules() {
		return [
			[['name', 'email'], 'required', 'message' => 'Не оставляй пустым'],
			['email', 'email', 'message' => 'email неканает']
		];
	}
}
?>