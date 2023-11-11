<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address', 'phone', 'id_card'];

    public static function createCustomer(array $data)
    {
        return self::create($data);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

}
