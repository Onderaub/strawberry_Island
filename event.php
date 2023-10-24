<?php require_once 'config/function.php';
require_once 'inc/header.inc.php'; ?>
<link rel="stylesheet" href="assets/css/event.css" />
<?php $content = execute("SELECT c.*FROM content c INNER JOIN `page` p on c.id_page= p.id_page WHERE title_page='event'")->fetch(PDO::FETCH_ASSOC);?>
<div class="d-flex justify-content-evenly">
    <div class="imgEvent"><img src="assets/images/prisons1.png" alt="un protagoniste mon dans un bus carcérale">
    </div>
    <div class=" textevent" w-30>
            <h1><?= $content['title_content'] ?? ''; ?></h1> 
            <div class='eventText'><?= $content['description_content'] ?? ''; ?>
         </div>
        
    </div>
</div>