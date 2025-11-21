<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Confirmer la suppression</title>
</head>
<body>

<h1>Confirmer la suppression</h1>

<p>Voulez-vous vraiment supprimer ce produit ?</p>

<ul>
    <li><strong>ID :</strong> {{ $product->id }}</li>
    <li><strong>Nom :</strong> {{ $product->name }}</li>
    <li><strong>Prix :</strong> {{ $product->price }}</li>
    <li><strong>Créé le :</strong> {{ $product->created_at }}</li>
</ul>

<form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit">🗑️ Oui, supprimer</button>
</form>

<a href="{{ route('products.index') }}">↩️ Non, revenir à la liste</a>

</body>
</html>
