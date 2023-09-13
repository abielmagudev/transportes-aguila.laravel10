<?php

namespace App\Models;

use App\Models\Features\HasHelpers;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propietario extends Model
{
    use HasFactory;
    use HasHelpers;

    protected $table = 'propietarios';

    protected $fillable = [
        'nombre',
        'tipos_remolque_formato_csv',
    ];


    // Attributes

    public function getTiposRemolqueArrayAttribute()
    {
        return $this->tieneTiposRemolque() ? str_getcsv($this->tipos_remolque_formato_csv) : [];
    }

    public function getTiposRemolqueCsvAttribute()
    {
        return $this->tieneTiposRemolque() ? $this->tipos_remolque_formato_csv : '';
    }

    public function getTiposRemolqueCountAttribute()
    {
        return count($this->tipos_remolque_array);
    }

    
    // Validations

    public function tieneTiposRemolque()
    {
        return ! is_null($this->tipos_remolque_formato_csv);
    }


    // Relationships

    public function tiposRemolque()
    {
        if(! $tipos_remolque_id = $this->tipos_remolque_array )
            return Collection::make([]);

        return TipoRemolque::whereIn('id', $tipos_remolque_id)->get();
    }
}
