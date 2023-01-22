<?php
require_once 'Logic/route.php'; 
use Logic\Request;
use Logic\Search;
use Logic\Requires;

Requires::Templete('header','require');
$data = [];
$result = $result['articles'];




Requires::Templete('navbar','require');
?>
<div class="container mt-5 pt-5">
    <div class="row justify-content-center">
        <div class="col p-3 bg-light rounded shadow mb-3">
            <form method="GET">
                <div class="input-group mb-3 shadow">
                    <input type="text" name="content" class="form-control" placeholder="Cari berita cepat" aria-label="Recipient's username" aria-describedby="button-addon2" >
                    <button class="btn btn-outline-dark" type="submit" id="button-addon2">Cari berita</button>
                </div>
            </form>
        </div>
    </div>
    <?php $result = Search::beritaIndo(Request::requestGET(),$result); ?>
    <div class="row">
        <?php foreach($result as $row): ?>
            <div class="col-6">
                <div class="card mb-3 shadow ">
                    <img src="<?= $row["urlToImage"] ?>" width="500" height="300" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $row['title'] ?></h5>
                        <p class="card-text"><?= $row['content']?>...</p>
                        <a class="btn btn-dark" href="<?= $row['url'] ?>">Baca Selengkapnya</a>
                        <p class="card-text"><small class="text-muted"><?= $row['publishedAt'] ?></small></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<div class="container-fluid bg-dark pt-5 ">
    <div class="row">
        <div class="col">
            <p class="text-center text-light">Made in love by SadampayodaSabilillah</p>
        </div>
    </div>
</div>



<?php 

Requires::Templete('footer','require');

?>