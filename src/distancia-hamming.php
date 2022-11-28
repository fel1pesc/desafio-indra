<?php
    @require_once("DistanciaHamming.php");

    $class = new DistanciaHamming();

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $class->setFita1($_POST['fita1']);
        $class->setFita2($_POST['fita2']);

        $class->execute();
    }
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Desafio Indra</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container-fluid">

    <?php
    if(!empty($class->getAlertMessage())) {
        echo "<div class='col-md-3'>
                          <div class='alert alert-{$class->getAlertType()} alert-dismissible fade show' role='alert'>
                              <b>{$class->getAlertMessage()}</b>
                              <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                          </div>
                      </div>";
    }
    ?>

    <form method="POST">
        <div class="mb-3 row">
            <div class="col-md-3">
                <label>Fita de DNA 1</label>
                <input class="form-control" type="text" id="fita1" name="fita1" onkeyup="this.value = this.value.toUpperCase()" value="<?php echo $class->getFita1() ?>">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-md-3">
                <label>Fita de DNA 2</label>
                <input class="form-control" type="text" id="fita2" name="fita2" onkeyup="this.value = this.value.toUpperCase()" value="<?php echo $class->getFita2() ?>">
            </div>
        </div>
        <button class="btn btn-primary" type="submit"> Verificar</button>
    </form>
</div>
</body>
</html>