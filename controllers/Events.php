<?php namespace Det\Events\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Events extends Controller
{
    public $implement = [        
        'Backend\Behaviors\ListController',        
        'Backend\Behaviors\FormController',
        'Backend\Behaviors\RelationController', 
   ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $relationConfig = 'config_relation.yaml';

    public $requiredPermissions = [
        'create', 
        'edit' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Det.Events', 'det-events');
    }
}
