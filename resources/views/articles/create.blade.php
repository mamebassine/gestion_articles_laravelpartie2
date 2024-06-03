<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajouter un article</title>

    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
        
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        .form-group1, .form-group2, .form-group3, .form-group4, .form-group5 {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.25);
        }
        button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            color: #fff;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Ajouter un nouvel article</h1>
        <form action="{{ route('articles.list') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group1">
                <label for="nom">Nom:</label>
                <input type="text" name="nom" id="nom" class="form-control" required>
            </div>
            <div class="form-group2">
                <label for="description">Description:</label>
                <textarea name="description" id="description" class="form-control" rows="3" required></textarea>
            </div>
            <div class="form-group3">
                <label for="date_creation">Date de création:</label>
                <input type="date" name="date_creation" id="date_creation" class="form-control" required>
            </div>
            <div class="form-group4">
                <label for="type">Type:</label>
                <select class="form-control" name="type" id="type" required>
                    <option value="">Sélectionnez le type</option>
                    <option value="en premier" {{ old('type') == 'en premier' ? 'selected' : '' }}>En premier</option>
                    <option value="en second" {{ old('type') == 'en second' ? 'selected' : '' }}>En second</option>
                </select>
            </div>
            <div class="form-group5">
                <label for="image">Ajouter une image (URL):</label>
                <input type="text" class="form-control" name="image">
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
</body>
</html>
