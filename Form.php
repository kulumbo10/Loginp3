<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="Form.css">
    <title>Form-3</title>
</head>

<body>

    <header>
        <h2>Formulario</h2>
    </header>

    <Form method="post" action="form3.php">

        <div class="containeir">
            <label for="Usuario">Usuario:</label>
            <input type="text" name="usuario" id="busuario">
            <label for="senha">Senha:</label>
            <input type="password" name="senha" placeholder="123456">

        </div>

        <button type="submit">Submit</button>

    </Form>
    <?php if (isset($_GET['mensagem'])) : ?>
        <div class="alert alert-warning" role="alert">
            <?= $_GET['mensagem'] ?>
        </div>
    <?php endif; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>