<?php
/**
 * Created by PhpStorm.
 * User: Kaido
 * Date: 01.04.2018
 * Time: 23:24
 */
<h1>Tags</h1>
<?foreach($tags as $tag):?>
    <div><?=$tag['tag_name']?></div>
<?endforeach?>