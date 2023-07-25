<?php namespace Det\Events\Models;

use Model;


/**
 * Model
 */
class Date extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    
    use \Winter\Storm\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'det_events_dates';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    /**
     * @var array Attribute names to encode and decode using JSON.
     */
    public $jsonable = [];

    public function getDateTypeIdOptions(){
        return DateType::all()->pluck('title', 'id'); 
    }

    public $belongsTo = [
        'dateType' => DateType::class, 
    ];

}
