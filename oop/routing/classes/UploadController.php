<?php

declare(strict_types = 1);
include 'classes/view.php';
use App\View\View;
// namespace App\Upload;
define('PATH', $_SERVER['REQUEST_URI']);


class UploadController {
    public static function index() {
        // echo 'hi';
        // var_dump(STORAGE_PATH);
        setcookie(
            'servey',
            'Start Serveying',
            time() + (24 * 60 * 60)
        );
        // echo '<pre>';
        // var_dump($_SERVER);
        // var_dump(PATH);
        echo View::make('index');
    } 

    public static function download() {
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename = "doc.pdf"');
        readfile(STORAGE_PATH . 'test.pdf');
    }

    public static function upload() {
        // echo 'hi';
        // $files = $_FILES;
        // var_dump($files);
        foreach($_FILES as $item) {
            $filePath = STORAGE_PATH . '/' . $item['name'];
            move_uploaded_file($item['tmp_name'], $filePath);
            // echo '<pre>';
            // var_dump($item);
        }

        

        header("Location:" . PATH );
        exit; //  should use exit after redirect anything nor the next code will executed
        // var_dump($filePath);

        // echo '<pre>';
        // var_dump(pathinfo($_FILES['upload']['tmp_name']));

        // foreach($_FILES as $key => $item) {
        //     move_uploaded_file($item[$key]['tmp_name'], $filePath);
        // }

        // echo '<pre>';
        // var_dump(pathinfo($filePath));
    }
}