<?php
require_once '../controllers/form_validation.php';
$title = 'Fill | Nouveau Sujet';
require_once 'require/header.php';
$id = $_SESSION['id'];
echo $subjectAdded ?? ''; ?>
<div class="container bg-light mt-2 opacity">
    <a id="returnArrow" title="Fill | Forum" href="forum.php"><i class="fas fa-arrow-left" style="font-size: 50px;"></i></a>
    <h1 class="text-center ml-auto mr-auto">Nouveau Sujet :</h1>
</div>
<div id="scroll">
<form class="container" action="?id=<?= $id ?? '' ?>" method="post" novalidate>
    <input type="hidden" name="dateOfCreation" value="" id="dateOfCreation" disabled>
    <div class="form-group">
        <label class="text-light" for="subject">Sujet :</label>
        <span class="text-danger float-right"><?= $errors['subject'] ?? '' ?></span>
        <input id="subject" name="subject" type="text" class="col-12" value="<?= $_POST['subject'] ?? '' ?>">
    </div>
    <input name="submitsubject" class="btn btn-outline-success col-12 text-center mt-1" value="Créer le Sujet"
           type="submit">
</form>
</div>
<?php require_once 'require/footer.php'; ?>
<script src="../assets/js/jquery-3.3.1.min.js"></script>
<script src="../assets/js/newsubject.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
