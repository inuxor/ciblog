<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 12-1-20
 * Time: 上午10:55
 * To change this template use File | Settings | File Templates.
 */

?>
<ul class="nav nav-list">
		<li class="nav-header">posts</li>

    <?php foreach ($posts as $post): ?>
    <li>
        <?=$post->post_name?>
    </li>
    <?php endforeach ?>
</ul>