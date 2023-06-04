<?php

namespace app\models;

class Rating
{
    public int $user_id;
    public int $w_like    = 10;
    public int $w_comment = 30;
    public int $w_post    = 100;
    public int $result;

    public function get()
    {
        return $this->result = $this->getResultLikes() + $this->getResultPosts() + $this->getResultComments();
    }

    public function getCountLikes()
    {
        return 10;
    }

    public function getCountComments()
    {
        return 20;
    }

    public function getCountPosts()
    {
        return 5;
    }

    public function getResultLikes()
    {
        return $this->getCountLikes() * $this->w_like;
    }

    public function getResultComments()
    {
        return $this->getCountComments() * $this->w_comment;
    }

    public function getResultPosts()
    {
        return $this->getCountPosts() * $this->w_post;
    }
}