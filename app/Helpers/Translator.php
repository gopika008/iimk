<?php

namespace App\Helpers;

use Stichoza\GoogleTranslate\GoogleTranslate;

class Translator
{
    public static function toHindi(?string $text): string
    {
        if (empty($text)) {
            return '';
        }

        try {

            return GoogleTranslate::trans(
                strip_tags($text),
                'hi',
                'en'
            );

        } catch (\Exception $e) {

            return '';
        }
    }

    public static function toEnglish(?string $text): string
    {
        if (empty($text)) {
            return '';
        }

        try {

            return GoogleTranslate::trans(
                strip_tags($text),
                'en',
                'hi'
            );

        } catch (\Exception $e) {

            return '';
        }
    }
}