<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class StireModel extends Model
{
    //use HasFactory;
    protected $table = 'stiri';
    protected $primaryKey = 'mv_id';
    // Optionally, define fillable attributes
    protected $fillable = [
        'created_dt',
        'hour',
        'sursa',
        'srs_tape',
        'srs_tc',
        'srs_duration',
        'srs_durata',
        'dom_gen',
        'dom_spc',
        'denumire',
        'denumire_text',
        'denumire_cod',
        'titlu',
        'stire',
        'dep_no',
    ];
}
