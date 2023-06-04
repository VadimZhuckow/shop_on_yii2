<?php

namespace app\models;

use phpDocumentor\Reflection\Types\True_;
use Yii;
class Upload
{
    public static function file($files)
    {
        $upload_dir = 'uploads';
        $user_dir = Yii::$app->user->id;
        $final_dir = "{$upload_dir}/{$user_dir}";
        if(!is_dir($final_dir)){
            mkdir($final_dir);
        };
        $image_tmp_name = $files["Products"]['tmp_name']["image"];
        $image_size = $files["Products"]['size']['image'];
        $image_type = $files["Products"]['type']['image'];
        $image_original_name = $files["Products"]['name']['image'];

        $ext = explode('.', $image_original_name);
        $ext = end($ext);

        if(self::validate($files)){

                $new_image_name = rand(100,200) . $image_original_name . time();
                $new_image_name = md5($new_image_name);
                $final_path = "{$final_dir}/{$new_image_name}.$ext";

                if(move_uploaded_file($image_tmp_name, $final_path)){
                return $final_path;
//                    echo 'файл сохранен';
                }else{
                    echo "ошибка";
                }
        }
    }

    private static function validate($files)
    {
        $image_tmp_name = $files["Products"]['tmp_name']["image"];
        $image_size = $files["Products"]['size']['image'];
        $image_type = $files["Products"]['type']['image'];
        $image_original_name = $files["Products"]['name']['image'];

        if($image_type == "image/jpeg"){
            if($image_size < '1500000'){
                return true;
                } else{
                    echo 'вес';
                }
                }else{
                    echo 'тип';
                }
        return false;

    }
}