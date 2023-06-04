<?php

namespace app\models;

use app\models\db\Products;

/**
 *
 */
class Checkimages
{
    public string $dir = 'public_html/uploads/';
    public array $image_path = [];

    /**
     * Undocumented function
     *     запуск
     * @return void
     */
    public function start(){
        $this->getDirs();
        $this->getImages();

    }

    /**
     * получение папки
     * @return void
     */
    public function getDirs()
    {
        $scan =scandir($this->dir);
        foreach($scan as $dir){  //перебираем папку
            if($dir != '.' AND $dir != '..'){ //проврка на название
                $images_scan = scandir($this->dir . '/' . $dir);//к изначальному пути добавляем название
                foreach($images_scan as $image){
                    if($image != '.' AND $image != '..'){
                        //var_dump($image);
                        $this->image_path[$dir][] = $image;
                    }
                }
            }
        }
    }

    /**
     * Получение картинки
     * @return void
     */
    public function getImages(){
        foreach($this->image_path as  $user_id => $user_images){
            foreach($user_images as $user_image){

                $url_to_image = "{$this->dir}{$user_id}/{$user_image}";
               if(!$this->checkImageInBd($url_to_image)){
                   $this->deleteImage($url_to_image);
               }
            }
        }
    }

    /**
     * поиск картинке в базе данных
     * @param $image_path
     * @return bool
     */
    public function checkImageInBd($image_path){
    if(Products::find()->where(['image' => $image_path])->one())
    {
        return true;
    }
    return false;
    }

    /**
     * удаление картинки
     * @param $image_path
     * @return bool
     */
    public function deleteImage($image_path): bool
    {
        if(unlink($image_path)){
            return true;
            }
        return false;
    }

}