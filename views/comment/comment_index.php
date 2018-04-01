<?php
/**
 * Created by PhpStorm.
 * User: Kaido
 * Date: 01.04.2018
 * Time: 23:35
 */
<?foreach ($comment as $comment):?>
    <div class="list-group">
        <a href="#" class="list-group-item"><?=$comment['comment']?></a>
    </div>
<?endforeach;?>