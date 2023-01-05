<?php

class CurrencyModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getExchangeRates() {
        // Query the database to retrieve the exchange rates
        $query = "SELECT * FROM exchange_rates";
        $result = $this->db->query($query);

        // Return the exchange rates as an array
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}

?>
