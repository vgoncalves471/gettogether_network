<?php
    // Connexion à la base de données
    try {
        $dsn = "mysql:host=localhost;dbname=mango;charset=utf8";
        $user = "root";
        $password = "";
        $pdo = new PDO($dsn, $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Erreur de connexion : " . $e->getMessage());
    }
    // Traitement du formulaire
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['pass'];
        // Hachage du mot de passe
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        // Préparation de la requête d'insertion
        $stmt = $pdo->prepare("INSERT INTO user (name, firstname, email, password) VALUES (:nom, :prenom, :email, :password)");
        // Lier les paramètres
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashed_password);
        // Exécution de la requête
        try {
            $stmt->execute();
            echo "<p>Données insérées avec succès.</p>";
        } catch (PDOException $e) {
            echo "<p>Erreur lors de l'insertion : " . $e->getMessage() . "</p>";
        }
    }
    // Fermer la connexion
    $pdo = null;
    ?>
</body>
</html>