<?php
/**
 * Model object generated by: Skipper (http://www.skipper18.com)
 * Do not modify this file manually.
 */

namespace App\Models\AbstractModels;

use Illuminate\Database\Eloquent\Model;

abstract class AbstractEtablissement extends Model
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
        'nom' => 'string',
        'type_etablissement__id' => 'integer',
        'categerie_etablissement_id' => 'integer',
        'classe' => 'boolean',
        'sous_type_id' => 'integer',
        'etablissement_id' => 'integer',
        'forchette_id' => 'integer'
    ];
    
    public function typeEtablissement ()
    {
        return $this->belongsTo('\App\Models\Type_etablissement ', 'type_etablissement__id', 'id');
    }
    
    public function categerieEtablissement()
    {
        return $this->belongsTo('\App\Models\Categerie_etablissement', 'categerie_etablissement_id', 'id');
    }
    
    public function sousType()
    {
        return $this->belongsTo('\App\Models\SousType', 'sous_type_id', 'id');
    }
    
    
    
    public function forchette()
    {
        return $this->belongsTo('\App\Models\Forchette', 'forchette_id', 'id');
    }
    
     
    
    public function ficheHebergements()
    {
        return $this->hasMany('\App\Models\Fiche_hebergement ', 'etablissement_id', 'id');
    }
    
    public function ficheRestaurations()
    {
        return $this->hasMany('\App\Models\Fiche_restauration_seulle', 'etablissement_id', 'id');
    }
    
    public function users()
    {
        return $this->belongsToMany('\App\Models\User', 'user_etablissement', 'etablissement_id', 'user_id')->withPivot('id', 'created_at', 'updated_at');
    }
}
