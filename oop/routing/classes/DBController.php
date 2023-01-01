<?php

// namespace App;
include 'classes/view.php';

class DBController {
    public static function index() {
        // echo 'database';
        // echo phpinfo();
        try {

            $db = new PDO('mysql:host=localhost;dbname=pos', 'root', '');
            
            $p_name = 'iphone';
            $p_price = 70000;
            $p_code = 1111;
            $p_stock = 20;

            $query = "INSERT INTO products(product_code, product_name, unit_price, unit_in_stock) VALUES(:p_code,:p_name,:p_price,:p_stock)";
            $stmt= $db->prepare($query);
            $stmt->execute([':p_code' => $p_code,':p_name' => $p_name,':p_price' => $p_price,':p_stock' => $p_stock]);

            // $id = $db->lastInsertId();
            $getData = $db->query('SELECT * FROM products WHERE product_code =1111');

            echo '<pre>';
            var_dump($getData->fetchAll());
            // $query = 'SELECT * FROM products';
            // $stmt = $db->query($query);

            // foreach( $db->query($query)->fetchAll(PDO::FETCH_OBJ) as $data) {
            //     echo '<pre>';
            //     var_dump($data);
            // }
            // echo '<pre>';
            // var_dump($stmt->fetchAll(PDO::FETCH_CLASS));
            
        } catch(\PDOException $e) {
            throw new \PDOException($e->getMessage() , $e->getCode());
        }
    }
}