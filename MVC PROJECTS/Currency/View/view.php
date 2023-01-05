<!-- HTML for the currency converter form -->
<form method="post" action="view.php">
    <label for="amount">Enter amount:</label>
    <input type="text" name="amount" id="amount">
    <br>
    <label for="from_currency">From:</label>
    <select name="from_currency" id="from_currency">
        <!-- Options for the "from" currency dropdown -->
        <option value="GBP">GBP</option>
        <option value="EUR">EUR</option>
        <option value="DH">DH</option>
        <option value="USD">USD</option>
    </select>
    <br>
    <label for="to_currency">To:</label>
    <select name="to_currency" id="to_currency">
        <!-- Options for the "to" currency dropdown -->
        <option value="GBP">GBP</option>
        <option value="EUR">EUR</option>
        <option value="DH">DH</option>
        <option value="USD">USD</option>
    </select>
    <br>
    <input type="submit" value="Convert">
</form>

<?php
include_once '../Controller/controller.php';
if (isset($_POST['amount']) && isset($_POST['from_currency']) && isset($_POST['to_currency'])) {
    // Display the converted amount
    echo "Converted amount: " . $convertedAmount;
}

?>
