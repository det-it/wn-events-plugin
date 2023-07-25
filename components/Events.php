<?php namespace Det\Events\Components;

use Cms\Classes\ComponentBase;
use Det\Events\Models\Event;

class Events extends ComponentBase
{
    /**
     * Gets the details for the component
     */
    public function componentDetails()
    {
        return [
            'name'        => 'Events Component',
            'description' => 'No description provided yet...'
        ];
    }

    /**
     * Returns the properties provided by the component
     */
    public function defineProperties()
    {
        return [
            'event' => [
                    'title'             => 'Event',
                    'placeholder'       => 'Select event',
                    'description'       => 'if no events are selected, all will be shown',
                    'type'              => 'dropdown',        
            ]
        ];
    }

    public function getEventOptions()
    {
        return Event::lists('title','id');
    }

    public function event()
    {
        $event = Event::find($this->property('event'));
        return $event;
    }
}
