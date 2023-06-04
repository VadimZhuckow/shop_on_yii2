<?php

namespace app\models\db;

/**
 * This is the model class for table "products".
 *
 * @property int         $id
 * @property string      $name
 * @property string|null $image
 * @property string      $description
 * @property int         $price
 * @property int         $views
 * @property int         $rating
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
            [
                [
                    'name',
                    'description',
                    'price',
                    'views',
                ],
                'required',
            ],
            [
                ['description'],
                'string',
            ],
            [
                [
                    'price',
                    'views',
                    'rating',
                ],
                'integer',
            ],
            [
                [
                    'name',

                ],
                'string',
                'max' => 255,
            ],
            [
                ['image'],
                'file'
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id'          => 'ID',
            'name'        => 'Название товара',
            'image'       => 'Image',
            'description' => 'Description',
            'price'       => 'Price',
            'views'       => 'Views',
            'rating'      => 'rating',
        ];
    }
}
