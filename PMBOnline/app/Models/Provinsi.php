<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    protected $table = 'provinsi';

    protected $fillable = ['nama'];

    // Define the relationship to Kabupatens
    public function kabupatens()
    {
        return $this->hasMany(Kabupaten::class, 'provinsi_id');
    }
}