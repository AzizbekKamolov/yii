<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "main".
 *
 * @property int $id
 * @property string|null $prefix
 * @property string|null $firstname
 * @property string|null $lastname
 * @property string|null $title
 * @property string|null $company
 * @property string|null $phone
 * @property string|null $cellphone
 * @property string|null $phone2
 * @property string|null $address1
 * @property string|null $address2
 * @property string|null $po_box
 * @property string|null $zip_code
 * @property string|null $country
 * @property string|null $city
 * @property string|null $language
 * @property int|null $owner_id
 * @property string|null $category
 * @property string|null $subcategory
 */
class Main extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'main';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['address1', 'address2'], 'string'],
            [['owner_id'], 'integer'],
            [['prefix', 'firstname', 'lastname', 'title', 'phone', 'cellphone', 'phone2', 'po_box', 'zip_code', 'country', 'city'], 'string', 'max' => 255],
            [['company', 'language', 'category', 'subcategory'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'prefix' => 'Prefix',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'title' => 'Title',
            'company' => 'Company',
            'phone' => 'Phone',
            'cellphone' => 'Cellphone',
            'phone2' => 'Phone 2',
            'address1' => 'Address 1',
            'address2' => 'Address 2',
            'po_box' => 'Po Box',
            'zip_code' => 'Zip Code',
            'country' => 'Country',
            'city' => 'City',
            'language' => 'Language',
            'owner_id' => 'Owner ID',
            'category' => 'Category',
            'subcategory' => 'Subcategory',
        ];
    }

    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category']);
    }

    public function getSubCategory()
    {
        return $this->hasOne(Subcategory::className(), ['id' => 'subcategory']);
    }
}
