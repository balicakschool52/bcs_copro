<?php

if (!function_exists('dateFormatted')) {
    /**
     * Formats a given date into a specific format.
     *
     * @param string|int $date The date to be formatted. Can be a string date or a timestamp.
     * @return string The formatted date in the format 'd F Y' (e.g., '01 January 2023').
     */
    function dateFormatted($date)
    {
        return date('d F Y', strtotime($date));
    }
}

if (!function_exists('normalizeDecimal')) {
    /**
     * Normalizes a currency string by replacing decimal and thousand separators.
     *
     * @param string $number The currency string to be normalized.
     * @return string The normalized currency string with '.' as decimal separator and no thousand separator.
     */
    function normalizeDecimal(string $number): float
    {
        // Replace the comma (decimal separator) with a period
        $stringWithoutThousandSeparators = str_replace('.', '', $number);

        // Step 2: Replace the decimal separator (comma) with a period
        $normalizedString = str_replace(',', '.', $stringWithoutThousandSeparators);

        return (float)$normalizedString;
        // dd($number);
    }
}
if (!function_exists('normalizeCurrency')) {
    /**
     * Normalizes a currency string by removing currency symbols and replacing the decimal separator.
     *
     * @param string $price The currency string to be normalized.
     * @return string The normalized currency string with '.' as decimal separator and no thousand separator.
     */

    function normalizeCurrency(string $price): float
    {
        // Remove the currency symbol (e.g., "Rp. ", "$", "€", etc.)
        $normalized = preg_replace('/[^0-9,.-]/', '', $price);

        // Replace the comma (decimal separator) with a period
        $stringWithoutThousandSeparators = str_replace('.', '', $normalized);

        // Step 2: Replace the decimal separator (comma) with a period
        $normalizedString = str_replace(',', '.', $stringWithoutThousandSeparators);

        return (float)$normalizedString;
    }
}

if (!function_exists('format_decimal')) {
    /**
     * Formats a number to a specified number of decimal places with thousand separators.
     *
     * @param float|int|string $number The number to be formatted.
     * @param int $decimal The number of decimal places (default is 2).
     * @return string The formatted number as a string with ',' as decimal separator and '.' as thousand separator.
     */
    function format_decimal($number, $decimal = 2)
    {
        if (is_numeric($number)) {
            return number_format($number, $decimal, ",", ".");
        } else {
            return number_format(0, $decimal, ",", ".");
        }
    }
}
