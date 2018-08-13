<?php namespace StudioBosco\ContentSnippet\Components;

use Cms\Classes\ComponentBase;
use Cms\Classes\Theme;
use RainLab\Pages\Classes\Content;

class ContentSnippet extends ComponentBase
{
    public $content;

    public function componentDetails()
    {
        return [
            'name'        => 'studiobosco.contentsnippet::lang.contentsnippet.name',
            'description' => 'studiobosco.contentsnippet::lang.contentsnippet.description',
        ];
    }

    public function defineProperties()
    {
        return [
            'content' => [
                'title' => 'studiobosco.contentsnippet::lang.contentsnippet.content_title',
                'description' => 'studiobosco.contentsnippet::lang.contentsnippet.content_description',
                'default' => '',
                'type' => 'dropdown',
            ],
        ];
    }

    public function getContentOptions()
    {
        $theme = Theme::getActiveTheme();
        $contents = Content::listInTheme($theme);

        $options = [];

        foreach($contents as $content) {
            if (!starts_with($content->fileName, 'static-pages/')) {
                $options[$content->fileName] = $content->fileName;
            }
        }

        return $options;
    }

    public function onRun()
    {
        $this->prepareVars();
    }

    protected function prepareVars()
    {
        $this->content = $this->property('content', null);
    }
}
