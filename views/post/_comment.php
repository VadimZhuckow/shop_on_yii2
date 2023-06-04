<div style="border-bottom:1px solid gray; padding-bottom:15px; margin-bottom:15px">
<h6>
    <?php echo \app\models\User::getUserNameById($comment['user_id']);?>
</h6>
<?php echo $comment['comment']?>
<br>
<i>01.01.2020</i>
</div>



