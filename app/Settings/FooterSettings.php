<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;
use Spatie\Translatable\HasTranslations;

class FooterSettings extends Settings
{
    use HasTranslations;

    public string $phone;
    public $email;
    public $address;
    public $copyright_text; // Уберите тип string или укажите array
    //    public array $social_links;
    public array $sections;

    protected array $translatable = [
        'address',
        'copyright_text',
        'sections',
    ];

    public static function group(): string
    {
        return 'footer';
    }
}
