


<div class="container">
    <h1>Modifier l'article</h1>
    <form action="{{ route('articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nom">Nom:</label>
            <input type="text" name="nom" id="nom" class="form-control" value="{{ $article->nom }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" id="description" class="form-control" rows="3" required>{{ $article->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="date_creation">Date de création:</label>
            <input type="date" name="date_creation" id="date_creation" class="form-control" value="{{ $article->date_creation }}" required>
        
        
            <div class="form-group">
                <label for="type">Type:</label>
                <select class="form-control" name="type" id="type" required>
                    <option value="en premier" {{ $article->type == 'en premier' ? 'selected' : '' }}>En premier</option>
                    <option value="en second" {{ $article->type == 'en second' ? 'selected' : '' }}>En second</option>
                </select>
            </div>
            <div class="form-group">
                <label for="image">URL de l'image:</label>
                <input type="text" class="form-control" name="image" value="{{ $article->image }}">
            </div>



        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
</div>
<style>

.container {
    width: 50%;
    margin: 0 auto;
    padding-top: 50px;
}

h1 {
    color: #333;
}

.form-group {
    margin-bottom: 20px;
}

label {
    font-weight: bold;
}

input[type="text"],
input[type="date"],
textarea,
select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

select {
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="12" height="6"><path fill="%23343a40" d="M6 0L0 6h12z"/></svg>');
    background-size: 12px 6px;
    background-repeat: no-repeat;
    background-position-x: 100%;
    background-position-y: 50%;
    padding-right: 20px;
}

.btn-primary {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
}

.btn-primary:hover {
    background-color: #0056b3;
}

.btn-danger {
    background-color: #dc3545;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
}

.btn-danger:hover {
    background-color: #c82333;
}

</style>





























