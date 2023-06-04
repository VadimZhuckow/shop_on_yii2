<?php
$this->title = "Мой блог";

?>

<style>
    .one-post{
        margin: 15px 0;
    }
    .one-post img{
        border-radius: 10px;
    }
</style>
<div class="container" style="margin-top: 25px">

    <div class="row">
        <div class="col-md-12">
            <?php echo $this->title;?>
            <div class="row">
                <?php foreach ($posts as $post){?>
                    <div class="col-md-4">
                    <div class="one-post">
                        <a href="index.php?r=post/view&id=<?=$post['id']?>">
                        <img src="<?=$post['image']?>" style="width:100%">
                        <h5><?=$post['title']?></h5>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
