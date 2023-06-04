<?php
$this->title = $post->title;
?>

<style>
    .flex{
        display: flex;
        justify-content: flex-end;
        color:aqua;
    }
    .likes{
        margin-right:5px;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-12" style="margin-top:25px">
            <img src="<?=$post->image?>" style="width : 100%">
            <div>
                <h3><?=$post->title?></h3>
            </div>
            <div class="flex">
                <div class="likes">
                    &#9829; <?=$post->likes?>
                </div>
                <div class="view">
                    &#9786;<?=$post->views?>
                </div>
            </div>
            <?=$post->content?>
        </div>

        <div class="col-md-12">
            <h4>Комментарии</h4>
            <div class="comment-area"></div>
        </div>

        <div class="col-md-12 mt-50">
            <h4>Добавить коммент</h4>
            <textarea class="form-control t-comment"></textarea>
            <button class="btn btn-succes send-comment">Добавить</button>
        </div>
    </div>
</div>

<script src="vendor_assets/js/jquery/jquery-1.12.4.min.js"></script>
<script src="vendor_assets/js/jquery/uikit.min.js"></script>
<script>
    $('.likes').click(function(){
       console.log(1);
       //отпровить запрос

    });
</script>
