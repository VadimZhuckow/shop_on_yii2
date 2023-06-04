<?php

namespace app\controllers;

use app\models\db\Posts;
use app\models\db\PostsComments;
use yii\web\Controller;

/**
 * Блог
 * @package app\controllers
 */
class PostController extends Controller
{
    public $layout =  'post-all';

    /**
     * Все посты
     *
     * @return string
     */
    public function actionIndex()
    {
        $posts = Posts::find()->asArray()->all();
        return $this->render('index',[
            'posts' => $posts,
        ]);
    }

    /**
     * Обзор конкретного
     *
     * @return string
     */
    public function actionView()
    {
        $id = htmlspecialchars($_GET['id']);
        $post = Posts::find()->where(['id'=>$id])->one();
        return $this->render('view',[
            'post' => $post,
        ]);
    }


    public function actionGetComments()
    {
        $this->layout = false;

        $id=htmlspecialchars($_GET['id']);
        $comments = PostsComments::find()->where(['post_id'=>$id])->asArray()->all();
        $result_html = "";

        foreach ($comments as $comment){
            $result_html .= $this->render('_comment', ['comment'=>$comment]);
        }
    return $result_html;
    }

    public function actionAddComment()
    {



     $this->layout = false;

     $id = htmlspecialchars($_GET['id']);
     $comment = htmlspecialchars($_GET['comment']);


     $new_comment = new PostsComments;
     $new_comment->user_id = 5;
     $new_comment->datatime = time();
     $new_comment->comment = $comment;
     $new_comment->post_id = $id;
     $new_comment->save();

     return true;
    }

    public function actionAddLikes(){
//        $posts = Post::find()->where(['id'=>$id])->one(); поиск по одному

}
}