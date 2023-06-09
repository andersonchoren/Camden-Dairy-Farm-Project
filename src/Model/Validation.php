<?php

namespace APP\Model;

class Validation
{
    public static function validateFullName($fullName)
    {
        if (!preg_match("/^[A-Za-zÀ-ÖØ-öø-ÿ\s]+$/u", trim($fullName)) && !count(explode(' ', $fullName)) >= 2) {
            return false;
        } else {
            return true;
        }
    }

    public static function validatePrice($price)
    {
        return preg_match("/^\d+(\.\d+)?$/", $price);
    }

    public static function validateUsernameAndPassword($usernameOrPassword)
    {
        return strlen($usernameOrPassword) >= 6;
    }

    public static function validateString($string)
    {
        return preg_match("/^[A-Za-zÀ-ÖØ-öø-ÿ\s]*$/u", $string);
    }

    public static function validatePhone($phoneNumber)
    {
        $length = strlen($phoneNumber);

        if ($length == 11 || $length == 8 || $length == 9)
            return true;
        else
            return false;
    }

    public static function validateDate($date)
    {
        return date("m/d/Y", strtotime($date));
    }

    public static function validateEmail($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public static function validateComments($comments)
    {
        return strlen($comments) < 46;
    }

    public static function validateNumber($number)
    {
        return ctype_digit($number);
    }

    public static function validateStock($stock)
    {
        return $stock > 0;
    }

    public static function validatePrices($price)
    {
        // TODO: pesquisar validação de preço australiana(ver no excel)
    }

    public static function validateProductionDate($productionDate)
    {
        $productionDate = Validation::ValidateDate($productionDate);

        $currentDateTimestamp = strtotime(date("m/d/Y"));
        $productionDateTimestamp = strtotime($productionDate);

        return $currentDateTimestamp >= $productionDateTimestamp;
    }

    public static function validateExpirationDate($expirationDate)
    {
        $expirationDate = Validation::ValidateDate($expirationDate);

        $currentDateTimestamp = strtotime(date("m/d/Y"));
        $expirationDateTimestamp = strtotime($expirationDate);

        return $currentDateTimestamp < $expirationDateTimestamp;
    }
}
