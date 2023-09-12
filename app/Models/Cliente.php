<?php

namespace App\Models;

use App\Models\Features\HasPaisesPredeterminadosTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    use HasPaisesPredeterminadosTrait;
}
