<?php

namespace app\models\db;

use Yii;

/**
 * This is the model class for table "orders_history".
 *
 * @property int $id
 * @property int $sum
 * @property int $datatime
 * @property string $order_list
 * @property int $status
 */
class OrdersHistory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orders_history';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'sum', 'datatime', 'order_list', 'status'], 'required'],
            [['id', 'sum', 'datatime', 'status'], 'integer'],
            [['order_list'], 'string'],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sum' => 'Sum',
            'datatime' => 'Datatime',
            'order_list' => 'Order List',
            'status' => 'Status',
        ];
    }
}
