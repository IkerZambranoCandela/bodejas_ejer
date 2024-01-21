<?php
// Bodega.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vino;

class Bodega extends Model
{
    use HasFactory;

    protected $fillable = [
        "nombre",
        "direccion",
        "email",
        "telefono",
        "persona_contacto",
        "anio_fundacion",
        "descripcion",
        "hotel",
        "restaurante",
    ];
    
    public function vinos()
    {
        return $this->hasMany(Vino::class);
    }
}

