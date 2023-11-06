<?php
class JSONHelper {
    private static $file = '../../data/contacts.json';

    public static function readData() {
        if (file_exists(self::$file)) {
            $data = file_get_contents(self::$file);
            return json_decode($data, true);
        } else {
            return [];
        }
    }

    public static function writeData($data) {
        $json_data = json_encode($data, JSON_PRETTY_PRINT);
        file_put_contents(self::$file, $json_data);
    }

    public static function createRecord($record) {
        $data = self::readData();
        $data[] = $record;
        self::writeData($data);
    }

    public static function updateRecord($index, $record) {
        $data = self::readData();
        if (isset($data[$index])) {
            $data[$index] = $record;
            self::writeData($data);
        }
    }

    public static function deleteRecord($index) {
        $data = self::readData();
        if (isset($data[$index])) {
            unset($data[$index]);
            self::writeData(array_values($data)); // Re-index the array
        }
    }
}
?>
