<?php namespace VisionPages\GoogleAnalyticsCode;

use Backend;
use System\Classes\PluginBase;

/**
 * GoogleAnalyticsCode Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'visionpages.googleanalyticscode::lang.plugin.name',
            'description' => 'visionpages.googleanalyticscode::lang.plugin.description',
            'author'      => 'VisionPages',
            'icon'        => 'icon-bar-chart'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'VisionPages\GoogleAnalyticsCode\Components\GoogleAnalytics' => 'gaCode',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'visionpages.googleanalyticscode.some_permission' => [
                'tab' => 'GoogleAnalyticsCode',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'googleanalyticscode' => [
                'label'       => 'GoogleAnalyticsCode',
                'url'         => Backend::url('visionpages/googleanalyticscode/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['visionpages.googleanalyticscode.*'],
                'order'       => 500,
            ],
        ];
    }

    public function registerSettings() 
    {
        return [
            'settings' => [
                'label'         => 'visionpages.googleanalyticscode::lang.settings.label',
                'description'   => 'visionpages.googleanalyticscode::lang.settings.description',
                'icon'          => 'icon-bar-chart-o',
                'class'         => 'VisionPages\GoogleAnalyticsCode\Models\GoogleAnalyticsSettings',
                'order'         => 1
            ]
        ];
    }

}
