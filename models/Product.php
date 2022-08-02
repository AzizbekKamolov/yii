<?php

namespace app\models;

use yii\base\Model;

class Product extends Model
{
    public $name;
    public $email;



    public function rules()
    {
        return [
          [['name', 'email'], 'required'],
            ['email', 'email']
        ];
    }

    public function tableName(){
        return 'product';
    }

    public function attributeLabels()
    {
        return [
          'id' => 'ID',
          'title' => 'Title',
          'discription' => 'Discription'
        ];
    }
}
