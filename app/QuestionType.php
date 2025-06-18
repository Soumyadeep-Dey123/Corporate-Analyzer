<?php
namespace App\Enums;

enum QuestionType: string {
    case TEXT = 'text';
    case RADIO = 'radio';
    case CHECKBOX = 'checkbox';
    case SELECT = 'select';

    public function label(): string {
        return match($this) {
            self::TEXT     => 'Text',
            self::RADIO    => 'Single Select',
            self::CHECKBOX => 'Checkboxes',
            self::SELECT   => 'Dropdown',
        };
    }
}