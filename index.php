<?php
require_once 'Logic/route.php'; //penting
use Logic\Requires;

Requires::Templete('header','require');
$data = [];
$result = $result['articles'];




Requires::Templete('navbar','require');
?>
<div class="container mt-5 pt-5">
    <div class="row">
        <?php foreach($result as $row): ?>
            <div class="col-6">
                <div class="card mb-3 shadow ">
                    <img src="<?= $row["urlToImage"] ?>" width="500" height="300" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</div>



<?php 

Requires::Templete('footer','require');

?>