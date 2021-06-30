<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    protected $table = "leads";
    protected $fillable = [
        "name",
        "birthday",
        "phone",
        "email",
        "address",
        "department_id"
    ];

    public function department(){
        return $this->belongsTo(Departments::class, "department_id");
    }
}
