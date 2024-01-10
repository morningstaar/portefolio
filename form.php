<?php
$host = 'e-srv-lamp.univ-lemans.fr';
$user = 'e2304411';
$database = 'e2304411';
$password = 'Fvk896ph';

// Connexion à la base de données
$connexion = new mysqli($host, $user, $password, $database);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Préparer la requête d'insertion
    $requete = $connexion->prepare("INSERT INTO portfolio-lessages (nom, email, message) VALUES ($nom, $email, $message)");

    // Liage des paramètres
    $requete->bind_param("sss", $nom, $email, $message);

    // Exécution de la requête
    $requete->execute();

    // Fermer la requête et la connexion
    $requete->close();

    // Vous pouvez également ajouter le code pour enregistrer ces données dans la base de données ou les traiter d'une autre manière.
} else {
    // Le formulaire n'a pas été soumis, rediriger ou afficher un message d'erreur si nécessaire
    echo "Le formulaire n'a pas été soumis.";
}
// Fermer la connexion
$connexion->close();
?>
