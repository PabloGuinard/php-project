<?php
class db {
    public function connection(){
        try {
            $pdo = new PDO('sqlite:' . __DIR__ . '/../sqlite/database.db' );
            $statement = $pdo->query ("SELECT 'consectetuer@nislQuisquefringilla.com' AS _message FROM users");
            $row = $statement->fetch(PDO::FETCH_ASSOC );
        } 
        catch (PDOException $e) {
            echo 'Connexion échouée : ' . $e->getMessage();
        }
    }

    public function dateUpdate(){
        $pdo = new PDO('sqlite:' . __DIR__ . '/../sqlite/database.db' );
        $pdo->exec("UPDATE users SET updated=date('now')");
    }

    public function fecthPerson(string $username, string $passwd) {
        $pdo = new PDO('sqlite:' . __DIR__ . '/../sqlite/database.db' );
        $sth = $pdo->prepare("SELECT * FROM users WHERE email= :email");
        $sth->execute([
            'email' => $username
        ]);
        $result = $sth->fetch();
        if ($result == false){
            return false;
        }
        if ($result['password'] == $passwd){
            return true;
        }
        return false;
    }

    public function getNom(string $username){
        $pdo = new PDO('sqlite:' . __DIR__ . '/../sqlite/database.db' );
        $sth = $pdo->prepare("SELECT * FROM users WHERE email= :email");
        $sth->execute([
            'email' => $username
        ]);
        $result = $sth->fetch();
        if ($result == false){
            return null;
        }
        else {
            return $result['lastname'];
        }
    }

    public function getPrenom(string $username){
        $pdo = new PDO('sqlite:' . __DIR__ . '/../sqlite/database.db' );
        $sth = $pdo->prepare("SELECT * FROM users WHERE email= :email");
        $sth->execute([
            'email' => $username
        ]);
        $result = $sth->fetch();
        if ($result == false){
            return null;
        }
        else {
            return $result['name'];
        }
    }
}
?>