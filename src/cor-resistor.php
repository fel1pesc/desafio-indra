<?php
    @require_once("CorResistor.php");

    $class = new CorResistor();

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $class->setColor(strtolower($_POST['color']));

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
                    <label>Cor</label>
                    <input class="form-control" type="text" id="color" name="color" value="<?php echo $class->getColor() ?>">
                </div>
            </div>
            <button class="btn btn-primary" type="submit"> Verificar</button>
        </form>
    </div>
</body>
</html>
