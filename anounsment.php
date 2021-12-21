<?php
require 'db.php';
$offset = (int)$_REQUEST['page'];
$pageSize = 4;
$sql =  "SELECT * FROM `announcement` LIMIT $pageSize OFFSET $offset";
$items = $pdo->query($sql);

foreach ($items as $item): ?>
<div class="annsmnt">
    <p><?php print_r($item['name_item'])?></p>
    <img src="pictures/<?php print_r($item['picture'])?>" alt="no pic">
    <p>Price: <?php print_r($item['price'])?>$</p>

    <button id="show_more">Show More</button>
</div>
<?php endforeach;
