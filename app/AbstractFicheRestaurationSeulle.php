<?php
 

namespace App\Models\AbstractModels;

use Illuminate\Database\Eloquent\Model;

abstract class AbstractFicheRestaurationSeule extends Model
{
    /**  
     * Primary key type.
     * 
     * @var string
     */
    protected $keyType = 'bigInteger';
    
    /**  
     * The attributes that should be cast to native types.
     * 
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'etablissement_id' => 'integer'
    ];
    
    public function etablissement()
    {
        return $this->belongsTo('\App\Models\Etablissement', 'etablissement_id', 'id');
    }
}
