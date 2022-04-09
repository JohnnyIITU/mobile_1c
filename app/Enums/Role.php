<?php
namespace App\Enums;

enum Role: string
{
    case ADMIN = 'admin';
    case USER = 'user';

    public static function getValuesArray(): array
    {
        $result = [];
        foreach (self::cases() as $case) {
            $result[] = $case->value;
        }
        return $result;
    }
}
