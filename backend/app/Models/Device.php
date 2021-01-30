<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    protected $table = 'device';

    protected $primaryKey = 'id_device';

    protected $fillable = [
        'name','member_id'
    ];
    public function member(){
        return $this->belongsTo("App\Models\Member","member_id");
    }

    public $timestamps = false;
}
