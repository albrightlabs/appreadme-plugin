<?php namespace Albrightlabs\AppReadMe;

use Event;
use Backend;
use System\Classes\PluginBase;

/**
 * ReadMe Plugin Information File
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
            'name'        => 'App ReadMe',
            'description' => 'A plugin that allows for documentation to easily be added to any application.',
            'author'      => 'Albright Labs LLC',
            'icon'        => 'icon-file-text-o',
            'icon-svg'    => '/plugins/albrightlabs/appreadme/assets/images/plugin-icon.svg',
            'homepage'    => 'https://albrightlabs.com/',
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
     * @return void
     */
    public function boot()
    {
        /**
         * Add css to hide scope icon in admin area navigation
         */
        Event::listen('backend.page.beforeDisplay', function($controller, $action, $params) {
            $controller->addCss("/plugins/albrightlabs/appreadme/assets/css/styles.css");
        });
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return [
            'albrightlabs.appreadme.manage_readmes' => [
                'tab'   => 'App Readme',
                'label' => 'Create, update, and delete application documentation'
            ],
        ];
    }

    /**
     * Registers back-end settings for this plugin.
     *
     * @return array
     */
    public function registerSettings()
    {
        return [
            'appreadme' => [
                'label'       => 'About & Documentation',
                'description' => 'Read or manage documentation for this application.',
                'url'         => Backend::url('albrightlabs/appreadme/documents'),
                'icon'        => 'icon-file-text-o',
                'category'    => 'About',
                'keywords'    => 'app readme docs about usage ',
                'order'       => 100,
            ],
        ];
    }
}
