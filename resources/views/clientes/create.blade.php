<!DOCTYPE html>
<html>

<head>
    <title>Novo Cliente</title>
</head>

<body>

    <h1>Novo Cliente</h1>

    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf

        <label>Nome:</label>
        <input type="text" name="nome"><br><br>

        <label>Email:</label>
        <input type="email" name="email"><br><br>

        <label>Telefone:</label>
        <input type="text" name="telefone"><br><br>

        <label>Morada:</label>
        <input type="text" name="morada"><br><br>

        <label>NIF:</label>
        <input type="text" name="nif"><br><br>

        <button type="submit">Guardar</button>
    </form>

</body>

</html>
