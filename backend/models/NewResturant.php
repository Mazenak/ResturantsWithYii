<?php

namespace app\models;

use Yii;
use yii\base\Model;

class NewResturant extends Model
{
    public $name;
    public $type;
    public $place_on_map;

    public function rules()
    {
        return [
            [['name', 'type','place_on_map'], 'required'],
        ];
    }
}