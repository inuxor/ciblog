<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 12-1-20
 * Time: 上午11:00
 * To change this template use File | Settings | File Templates.
 */
?>
<ul class="nav nav-list">
	<li class="nav-header">cate</li>
    <?php foreach ($cates as $cate): ?>
    <li>
        <?=$cate?>
    </li>
    <?php endforeach ?>
</ul>