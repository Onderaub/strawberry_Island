<?php require_once '../config/function.php';
require_once '../inc/backheader.inc.php'; 

$types=execute("SELECT * FROM media_type")->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="row">
<?php  foreach($types as $type):   ?>


    <a class="col" href="media.php?id=<?= $type['id_media_type']; ?>&title=<?=  $type['title_media_type'];?>"><div class="card  p-5  m-3 bg-warning text-center fs-4"><?=  $type['title_media_type'];?></div></a>




<?php  endforeach ;  ?>
</div>




















<?php require_once '../inc/backfooter.inc.php'; ?>