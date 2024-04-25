<?php
class Article {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function addArticle($article, $user) {
        
        $query = "INSERT INTO article (article, date, user) VALUES (:article, CURRENT_TIMESTAMP, :user)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':article', $article);
        $stmt->bindParam(':user', $user);

        if ($stmt->execute()) {
            return true; // Article added successfully
        } else {
            return false; // Failed to add article
        }
    }
}
?>
