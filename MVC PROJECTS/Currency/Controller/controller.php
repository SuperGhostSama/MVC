<?php

// Include the model and view files
include_once '../Model/model.php';
include_once '../View/view.php';

// Connect to the database
$db = new mysqli('localhost', 'root', '', 'currency');

// Create an instance of the model
$model = new CurrencyModel($db);

// Get the exchange rates from the model
$exchangeRates = $model->getExchangeRates();

// Convert the amount and store the result in a variable
$convertedAmount = convertAmount($_POST['amount'], $_POST['from_currency'], $_POST['to_currency'], $exchangeRates);

// Include the view file to display the form and converted amount
include_once '../View/view.php';

// Function to convert the amount
function convertAmount($amount, $from, $to, $rates) {
    // Find the exchange rate for the "from" and "to" currencies
    $fromRate = null;
    $toRate = null;
    foreach ($rates as $rate) {
        if ($rate['currency'] == $from) {
            $fromRate = $rate['rate'];
        }
        if ($rate['currency'] == $to) {
            $toRate = $rate['rate'];
        }
    }

    // Convert the amount and return the result
    return $amount * $toRate / $fromRate;
}

?>