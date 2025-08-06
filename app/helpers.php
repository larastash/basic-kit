<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;

if (! function_exists('user')) {
    function user(): ?User
    {
        return Auth::user();
    }
}

if (! function_exists('plural')) {
    function plural($n, array $forms, bool $includeNumber = true): string
    {
        if (is_float($n)) {
            $word = $forms[1]; // Дробные числа: 1.5 яблока
        } else {
            $lastDigit = $n % 10;
            $lastTwoDigits = $n % 100;

            if ($lastDigit == 1 && $lastTwoDigits != 11) {
                $word = $forms[0]; // 1, 21, 31... яблоко (но не 11)
            } elseif ($lastDigit >= 2 && $lastDigit <= 4 &&
                    ($lastTwoDigits < 10 || $lastTwoDigits >= 20)) {
                $word = $forms[1]; // 2-4, 22-24... яблока (но не 12-14)
            } else {
                $word = $forms[2]; // 5-20, 25-30... яблок
            }
        }

        return $includeNumber ? $n . ' ' . $word : $word;
    }

}
