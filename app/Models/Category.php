<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [
        'id',
    ];

    public $timestamps = false;


    public function products()
    {
        return $this->hasMany(Product::class)
            ->orderBy('id', 'desc');
    }


    public function getName()
    {
        $locale = app()->getLocale();
        switch ($locale) {
            case 'tm':
                return $this->name_tm;
                break;
            case 'en':
                return $this->name_en ?: $this->name_tm;
                break;
            default:
                return $this->name_tm;
        }
    }
}
