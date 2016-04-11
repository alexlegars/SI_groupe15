<?php
namespace Model;


class ConnectionRepository extends Repository
{
    public function get($pseudo){
        $sql = 'SELECT
    `pseudo`,
    `password`
FROM
    `user`
WHERE
  `pseudo` = :pseudo
;';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':pseudo', $pseudo);
        $stmt->execute();

        $row = $stmt->fetch();

        if($row['password'] == $_POST['password']){
            session_start();
            $_SESSION['login'] = $_POST['password'];
            return $_SESSION['login'];
        }
    }
}