<?php namespace Det\Events;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Det\Events\Components\Events' => 'Events',
        ];
    }

    public function registerSettings()
    {
    }
}
