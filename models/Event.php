<?php namespace Det\Events\Models;

use Model;
use BackendAuth;
use Det\Sessions\Models\Session;

/**
 * Model
 */
class Event extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    use \Winter\Storm\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'det_events_events';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    /**
     * @var array Attribute names to encode and decode using JSON.
     */
    public $jsonable = [];

    public function beforeCreate(){
        $user = BackendAuth::getUser();
        $this->user_id = $user->id;
    }

    public $hasMany = [
        'dates' => [Date::class, 'order' => 'date asc'],
        'sessions' => [Session::class, 'order' => 'start_time asc'],
    ];

    public $belongsTo = [
        'user' => 'Backend\Models\User', 
    ];


}
