<?php
function converter($fromCurrency, $toCurrency, $amount)
{
    $conversionRates = [
        'USD' => ['USD' => 1, 'CAD' => 1.35, 'EUR' => 0.92],
        'CAD' => ['USD' => 0.74, 'CAD' => 1, 'EUR' => 0.68],
        'EUR' => ['USD' => 1.09, 'CAD' => 1.47, 'EUR' => 1]
    ];

    if (!isset($conversionRates[$fromCurrency][$toCurrency])) {
        return "Conversion rate not found.";
    }

    $convertedAmount = $amount * $conversionRates[$fromCurrency][$toCurrency];
    return $convertedAmount;
}

$convertedAmount = '';

// Process the form on submission
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['fromValue'], $_GET['fromCurrency'], $_GET['toCurrency'])) {

    // Extract and sanitize the input values
    $amount = filter_var($_GET['fromValue'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $fromCurrency = substr($_GET['fromCurrency'], 1); // Remove the 'F' prefix
    $toCurrency = substr($_GET['toCurrency'], 1); // Remove the 'T' prefix

    // Perform the conversion
    $convertedAmount = converter($fromCurrency, $toCurrency, $amount);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Java Jam Coffee House</title>
    <meta name="description" content="CENG 311 Inclass Activity 1" />

</head>

<body>

    <form action="activity4.php" method="GET">
        <table>
            <tr>
                <td>
                    From:
                </td>
                <td>
                    <input type="text" name="fromValue" value="<?php echo isset($_GET['fromValue']) ? $_GET['fromValue'] : ''; ?>" />
                </td>
                <td>
                    Currency:
                </td>
                <td>
                    <select name="fromCurrency">
                        <option value="FUSD" /> USD </option>
                        <option value="FCAD" /> CAD </option>
                        <option value="FEUR" /> EUR </option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    To:
                </td>
                <td>
                    <input type="text" name="toValue" value="<?php echo $convertedAmount; ?>" />
                </td>
                <td>
                    Currency:
                </td>
                <td>
                    <select name="toCurrency">
                        <option value="TUSD" /> USD </option>
                        <option value="TCAD" /> CAD </option>
                        <option value="TEUR" /> EUR </option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>

                </td>
                <td>

                </td>
                <td>
                    <input type="submit" value="convert" />
                </td>
            </tr>
        </table>

    </form>
</body>

</html>
