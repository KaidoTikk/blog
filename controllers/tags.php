<?php
/**
 * Created by PhpStorm.
 * User: kaido.tikk
 * Date: 21.03.2018
 * Time: 13:17
 */

namespace App;


class tags
{
function index()
{
    $this->tags = get_all("SELECT tag_name, COUNT(post_id) AS count FROM post_tags NATURAL JOIN tag GROUP BY tag_id");
}
}