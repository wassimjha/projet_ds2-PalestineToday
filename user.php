<?php
class User {
    private $conn;
    
    public function __construct($db) {
        $this->conn = $db;
    }

    public function registerUser($username, $password, $mail) {
        $query = "INSERT INTO blogueur VALUES (:username, :password, :mail)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':mail', $mail);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function loginUser($username, $password) {
        $query = "SELECT  user, password FROM blogueur WHERE user = :username";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':username', $username);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            if ($password==$row['password']) {
                return $row; // User authenticated successfully
            }
        }

        return false; // Authentication failed
    }
}

?>
