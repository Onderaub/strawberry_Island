<?php require_once '../config/function.php';
require_once '../inc/backheader.inc.php';

if(!empty ($_POST)){var_dump($_POST);
    execute("INSERT INTO `page` (title_page) VALUE (:chevre)", array(
        ':chevre'=>$_POST['page']
    ));


}else{ $error ['Non Valide']='no_valid';}





$title= execute("SELECT*FROM page")->fetchAll(PDO::FETCH_ASSOC);
// var_dump($title);die(); 
?>

<section class="text-center">
<h1 class="text-center">Pages</h1>
<!-- <form method = "post" class=" w-50 mx-auto mt-5 mb-5">
    <label for="page" class="form-label"></label>
    <input name="page" value="" class="form-control w-50 mx-auto" id="page" type="text" width=20vh>
    <input type="hidden" name="id" value="<?= $title['id'] ?? ''; ?>">
    <button type="submit" class="btn btn-success" value='a' name="create">valider</button>
</form> -->

<table class="table table-dark table-striped rouded">
    <thead>

     <tr>
        <th class="text-center">Title_page</th>
    </tr>
    </thead>
   <tbody>
    <tr>
    <?php foreach ($title as $data) : ?>
        <td><?= $data['title_page'] ?? ''; ?></td>
    </tr>
    <?php endforeach ?>
   </tbody>
</table>
</section>
