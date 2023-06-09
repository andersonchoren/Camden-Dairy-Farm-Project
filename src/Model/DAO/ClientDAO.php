<?php

    namespace APP\Model\DAO;

    use APP\Model\Connection;
    use APP\Model\ClientModel;
    use PDO;

    class ClientDAO {
        private static PDO $connection;

        public static function sign_up(ClientModel $client) {
            self::$connection = Connection::getConnection();
            $sql = "INSERT INTO client (client_id, fullname, phone_number, address_id, email) VALUES ('" . $client->clientId . "', '" . $client->fullName . "', '" . $client->phoneNumber . "', '" . $client->addressOfShipping . "', '" . $client->email . "')";
            $statement = self::$connection->prepare($sql);
        
            return $statement->execute();
        }
        
        public static function findAll(): array {
            self::$connection = Connection::getConnection();
            $sql = "SELECT * FROM client";
            $statement = self::$connection->prepare($sql);
            $statement->execute();
        
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }
        
        public static function remove(string $clientId): bool {
            self::$connection = Connection::getConnection();
            $sql = "DELETE FROM client WHERE client_id = '" . $clientId . "'";
            $statement = self::$connection->prepare($sql);
        
            return $statement->execute();
        }
        
        public static function findClient(string $login) {
            self::$connection = Connection::getConnection();
            $sql = "SELECT * FROM client WHERE email = '" . $login . "'";
            $statement = self::$connection->prepare($sql);
            $statement->execute();
        
            return $statement->fetch(PDO::FETCH_ASSOC);
        }
        
        public static function findClientId(string $clientId) {
            self::$connection = Connection::getConnection();
            $sql = "SELECT * FROM client WHERE client_id = '" . $clientId . "'";
            $statement = self::$connection->prepare($sql);
            $statement->execute();
        
            return $statement->fetch(PDO::FETCH_ASSOC);
        }
        
        public static function update(ClientModel $client) {
            self::$connection = Connection::getConnection();
            $sql = "UPDATE client SET fullname = '" . $client->fullName . "', phone_number = '" . $client->phoneNumber . "', address_id = '" . $client->addressOfShipping . "' WHERE client_id = '" . $client->clientId . "'";
            $statement = self::$connection->prepare($sql);
        
            return $statement->execute();
        }
        
    }

?>
