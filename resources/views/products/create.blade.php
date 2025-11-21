<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un produit</title>
</head>
<body>

<h1>Ajouter un produit</h1>

<form method="POST" action="{{ route('products.store') }}">
    @csrf

    <label>Nom :</label><br>
    <input type="text" name="name"><br><br>

    <label>Prix :</label><br>
    <input type="text" name="price"><br><br>

    <button type="submit">Enregistrer</button>
</form>

<br>
<a href="{{ route('products.index') }}">⬅ Retour</a>

</body>
</html>
