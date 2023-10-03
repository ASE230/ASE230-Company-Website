<?php 
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once('../../lib/json.php');

    function getAllProducts($filePath) {
        return readJSON($filePath);
    }

    function getProduct($filePath, $productName) {
        $products = getAllProducts($filePath);

        if (isset($products[$productName])) {
            return $products[$productName];
        } else {
            return null;
        }
    }

    function createProduct($filepath, $productName, $productData) {
        $products = getAllProducts($filepath);
    
        if (isset($products[$productName])) {
            return false;
        }
    
        $products[$productName] = $productData;
    
        $updatedJsonContents = json_encode($products, JSON_PRETTY_PRINT);
    
        if ($updatedJsonContents === false) {
            return false;
        }
    
        if (file_put_contents($filepath, $updatedJsonContents) === false) {
            return false;
        }
    
        return true;
    }    

    function deleteProduct($filepath, $productName) {
        $products = getAllProducts($filepath);

        if (isset($products[$productName])) {
            unset($products[$productName]);
    
            $updatedJsonContents = json_encode($products, JSON_PRETTY_PRINT);
    
            if ($updatedJsonContents === false) {
                return false;
            }
    
            if (file_put_contents($filepath, $updatedJsonContents) === false) {
                return false;
            }
    
            return true;
        } else {
            return false;
        }
    }

    function editProduct($filepath, $oldProductName, $newProductName, $newData) {
        $products = getAllProducts($filepath);
    
        if (isset($products[$oldProductName])) {
            unset($products[$oldProductName]);
    
            $products[$newProductName] = $newData;
    
            $updatedJsonContents = json_encode($products, JSON_PRETTY_PRINT);
    
            if ($updatedJsonContents === false) {
                return false;
            }
    
            if (file_put_contents($filepath, $updatedJsonContents) === false) {
                return false;
            }
    
            return true;
        } else {
            return false;
        }
    }
    
?>