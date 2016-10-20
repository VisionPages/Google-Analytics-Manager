<?php namespace VisionPages\GoogleAnalyticsCode\Components;

use Cms\Classes\ComponentBase;

class GoogleAnalytics extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'visionpages.googleanalyticscode::lang.component.name',
            'description' => 'visionpages.googleanalyticscode::lang.component.description'
        ];
    }

    public function defineProperties()
    {
        return [
            'code' => [
                'title' => 'visionpages.googleanalyticscode::lang.properties.title',
                'description' => 'visionpages.googleanalyticscode::lang.component.description',
                'default' => '',
                'type' => 'string',
                'validationPattern' => '^UA-\d{4,9}-\d{1,4}$',
                'validationMessage' => 'visionpwages.Googleanalyticscode::lang.component.validationMessage',
                'placeholder' => 'UA-XXXXXXX'
            ]
        ];
    }

    public function onRender() 
    {
        $settings = GoogleAnalyticsSettings::instance();
        $this->page['code'] = $this->property('code');
    }
}