<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listagem de clientes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div>
    <h1>Sistema de gerenciamento de restaurante</h1>
    <div><a href="{{url('/createPrato')}}" class="btn-primary">Criar novo Prato</a></div>
</div>
<div style="display: flex;justify-content: center;margin-top: auto">

    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Detalhes</th>
            <th>Preço</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>McDonalds</td>
            <td>Pão e carne</td>
            <td>2,50</td>
            <td>
                <input type="button" value="Deletar" class="btn btn-danger">
                <input type="button" value="Editar" class="btn btn-primary">
            </td>
        </tr>
        </tbody>
    </table></div>
</body>
</html>
