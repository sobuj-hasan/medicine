<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_title',
        'user_id',
        'service_price',
        'discount',
        'service_note',
        'image',
        'status',
    ];

    protected $with = ['user', 'serviceitems'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function serviceitems()
    {
        return $this->hasMany(ServiceItem::class, 'service_id');
    }

}
