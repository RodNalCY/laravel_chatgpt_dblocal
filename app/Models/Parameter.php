<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parameter extends Model
{
    use HasFactory;

    protected $fillable = ['key', 'value'];

    public static function getParameter($key, $default = null)
    {
        $parameter = self::where('key', $key)->value('value');
        return $parameter ?? $default;
    }
}
