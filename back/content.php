<?php
require_once '../config/function.php';


$pages = execute("SELECT * FROM `page`")->fetchAll(PDO::FETCH_ASSOC);
$contents = execute("SELECT *, page.title_page FROM content INNER JOIN `page` ON content.id_page = page.id_page")->fetchAll(PDO::FETCH_ASSOC);

//condition d'insertion des données

if (!empty($_POST)) {
    if (!empty($_POST['titleContent']) && !empty($_POST['content']) && isset($_POST['id_page'])) {
        execute("INSERT INTO content (title_content, description_content, id_page) VALUES (:content, :descript, :pages)", array(
            ':content' => $_POST['titleContent'],
            ':descript' => $_POST['content'],
            ':pages' => $_POST['id_page']
        ));
    } else {
        echo 'lol';
    }

// condition de la modification 
    if (!empty($_GET) && isset($_GET['id']) && isset($_GET['a']) && $_GET['a'] == 'edit' && !empty($_POST['titleContent']) && !empty($_POST['content'])) {
   
    $content_edit = execute("UPDATE content 
                             SET title_content=:content, description_content=:descript 
                             WHERE id_content=:id", array(
                            ':descript' => $_POST['content'],
                            ':content' => $_POST['titleContent'],
                            ':id' => $_GET['id']
                             ));
}} 
    
    $edit = execute("SELECT content.*, `page`.title_page 
                     FROM content 
                     INNER JOIN `page` 
                     ON `page`.id_page = content.id_page 
                     WHERE content.id_content=:id", array(':id' => $_GET['id']))->fetch(PDO::FETCH_ASSOC);
    
if (!empty($_GET) && isset($_GET['id']) && isset($_GET['a']) && $_GET['a'] == 'del') {
    if (isset($_GET['id']))
    $success = execute("DELETE FROM content WHERE id_content=:id", array(
        ':id' => $_GET['id']
    ));

    if ($success) {
        $_SESSION['messages']['success'][] = ' supprimé';
        header('location:./content.php');
        
    } else {
        $_SESSION['messages']['danger'][] = 'Problème de traitement, veuillez réitérer';
        header('location:./content.php');
        
    }
}

require_once '../inc/backheader.inc.php';
// var_dump($edit);die;
?>

<h1 class="text-center">Zone de Script :<h1>
<section class="text_center w-120">
<h2 class="text-info text-center fs-4">Modification du contenu de la page: <?= $edit['title_page'] ??''; ?></h2>
    <form method="post" class=" w-50 mx-auto mt-5 mb-5">
    <label for="content" class="form-label fs-3">Titre : </label>
        <input type="text" name="titleContent"  value="<?= $edit['title_content'] ??''; ?>">
        <label for="content" class="form-label fs-3">Description : </label>
         
        <textarea class="w-100 h-10" id="content" name="content" rows="5" cols="33"><?= $edit['description_content'] ??''; ?><?php    if (!isset($_GET['a'])  && !isset($_GET['id'])){ execute("SELECT description_content FROM content"); }?>
        </textarea>
            <div class="d-flex text-center justify-around bd-highlight w-120 fs-5">
        <?php    if (!isset($_GET['a'])  && !isset($_GET['id'])){   ?>   
        <select name="id_page" class="w-100">
                 <?php foreach ($pages as $page) : ?> 
                    <option  value="<?= $page['id_page'] ?? '';?>"><?php echo $page['title_page'] ?? ''; ?></option>    
                 <?php endforeach; ?>
        </select>
        <?php  }   ?>
        <button type="submit" class="btn btn-success" name="title_insert" class="">Valider</button>
        
        </div>
    </form>
</section>
<table class="table table-dark table-filled">
    <thead>
        <tr>
            <td>Titre</td>
            <td>Contenue</td>
            <td>Page</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($contents as $content) : ?> 
         <tr> 
            <td><?php echo $content['title_content'] ?? ''; ?></td>
            <td><?php echo $content['description_content'] ?? ''; ?></td>
            <td><?php echo $content['title_page'] ?? ''; ?></td>
            <td><a href="?id=<?= $content['id_content'] ??''; ?>&a=edit" class="btn btn-outline-info">Modifier</a>
                <a href="?id=<?= $content['id_content']??''; ?>&a=del" onclick="return confirm('Etes-vous sûr?')" class="btn btn-outline-danger">Supprimer</a>
            </td>
        </tr>   
    <?php endforeach ; ?>
    </tbody>    
</table>
    
    
</section>