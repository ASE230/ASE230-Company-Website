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

    function createProduct() {
        
    }

    function deleteProduct($filepath, $productName) {
        $products = getAllProducts($filepath);

        if (isset($products[$productName])) {
            // Remove the product entry
            unset($products[$productName]);
    
            // Encode the modified data back to JSON
            $updatedJsonContents = json_encode($products, JSON_PRETTY_PRINT);
    
            if ($updatedJsonContents === false) {
                // Handle error when unable to encode JSON
                return false;
            }
    
            // Write the updated JSON data back to the file
            if (file_put_contents($filepath, $updatedJsonContents) === false) {
                // Handle error when unable to write the file
                return false;
            }
    
            return true; // Deletion successful
        } else {
            // Product not found, no action needed
            return false;
        }
    }

    function editProduct($filepath, $oldProductName, $newProductName, $newData) {
        $products = getAllProducts($filepath);
    
        // Check if the product exists
        if (isset($products[$oldProductName])) {
            // Remove the old product entry
            unset($products[$oldProductName]);
    
            // Add the updated product entry with the new name
            $products[$newProductName] = $newData;
    
            // Encode the modified data back to JSON
            $updatedJsonContents = json_encode($products, JSON_PRETTY_PRINT);
    
            if ($updatedJsonContents === false) {
                // Handle error when unable to encode JSON
                return false;
            }
    
            // Write the updated JSON data back to the file
            if (file_put_contents($filepath, $updatedJsonContents) === false) {
                // Handle error when unable to write the file
                return false;
            }
    
            return true; // Edit successful
        } else {
            // Product not found, no action needed
            return false;
        }
    }
    
?>