<!DOCTYPE html>
<html>
<head>
    <title>Modifier un produit</title>
</head>
<body>

<h1>Modifier un produit</h1>

<form method="POST" action="{{ route('products.update', $product) }}">
    @csrf
    @method('PUT')

    <label>Nom :</label><br>
    <input type="text" name="name" value="{{ $product->name }}"><br><br>

    <label>Prix :</label><br>
    <input type="text" name="price" value="{{ $product->price }}"><br><br>

    <button type="submit">Mettre à jour</button>
</form>

<br>
<a href="{{ route('products.index') }}">⬅ Retour</a>

</body>
</html>
