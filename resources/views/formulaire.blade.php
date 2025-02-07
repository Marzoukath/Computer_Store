<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Ordinateurs</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style> 
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 20px;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
            overflow: hidden;
        }
        .card img {
            width: 100%;
            height: auto;
        }
        .card-content {
            padding: 20px;
        }
        .card-content h3 {
            margin: 0 0 10px;
            color: #333;
        }
        .card-content p {
            margin: 5px 0;
            color: #555;
        }
        .price {
            font-size: 1.5em;
            color: #e60023;
            margin: 10px 0;
        }
        .actions {
            display: flex;
            justify-content: space-between;
            padding: 10px 20px;
            border-top: 1px solid #ddd;
        }
        .actions button {
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .modify-btn {
            background-color: #007bff;
            color: #fff;
        }
        .delete-btn {
            background-color: #dc3545;
            color: #fff;
        }
    </style>
</head>
<body>
    <h1>Liste des Ordinateurs</h1>
    <div class="container">
        <!-- Exemple d'ordinateur -->
        <div class="card">
            <img src="img/computer-laptop-work.jpg" alt="Ordinateur">
            <div class="card-content">
                <h3>Marque: Samsung Galaxy S25</h3>
                <p>Processeur: Intel Core i5</p>
                <p>RAM: 8 Go</p>
                <p>Stockage: 256 Go SSD</p>
                <p>Taille de l'écran: 6.2"</p>
                <p>Couleur: Bleu nuit</p>
                <div class="price">799 €</div>
            </div>
            <div class="actions">
                <button class="modify-btn">Modifier</button>
                <button class="delete-btn">Supprimer</button>
            </div>
        </div>
        
        <!-- Copier/coller cette structure pour chaque ordinateur -->
    </div>
</body>
</html>
