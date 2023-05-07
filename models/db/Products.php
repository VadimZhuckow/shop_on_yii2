<?php

namespace app\models\db;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string $title
 * @property int|null $price
 * @property string|null $description
 * @property string|null $image
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['price'], 'integer'],
            [['description'], 'string'],
            [['title'], 'string', 'max' => 255],
            [['image'], 'file'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название товара',
            'price' => 'Стоимость',
            'description' => 'Описание',
            'image' => 'Изображение',
        ];
    }
}
