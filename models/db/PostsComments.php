<?php

namespace app\models\db;

use Yii;

/**
 * This is the model class for table "posts_comments".
 *
 * @property int $id
 * @property int|null $user_id
 * @property int $datatime
 * @property int $comment
 * @property int|null $post_id
 */
class PostsComments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'posts_comments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'datatime', 'comment', 'post_id'], 'integer'],
            [['datatime', 'comment'], 'required'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'datatime' => 'Datatime',
            'comment' => 'Comment',
            'post_id' => 'Post ID',
        ];
    }
}
