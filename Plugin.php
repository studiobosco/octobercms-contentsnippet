<?php namespace StudioBosco\ContentSnippet;

use Backend;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{

    /**
     * @var array
     */
    public $require = ['RainLab.Pages'];

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'studiobosco.contentsnippet::lang.plugin.name',
            'description' => 'studiobosco.contentsnippet::lang.plugin.description',
            'author'      => 'Studio Bosco',
            'icon'        => 'icon-file-text-o'
        ];
    }

    public function registerPageSnippets()
    {
        return [
            'StudioBosco\ContentSnippet\Components\ContentSnippet' => 'contentSnippet',
        ];
    }
}
