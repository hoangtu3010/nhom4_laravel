<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = "customers";
    protected $fillable = [
      "name",
      "birthday",
      "phone",
      "email",
      "address",
      "lead_id"
    ];

    public function Lead(){
        return $this->belongsTo(Lead::class, "lead_id");
    }

}
