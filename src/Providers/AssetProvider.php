<?php

namespace TheTurk\Pallet\Providers;

use Flarum\Foundation\AbstractServiceProvider;
use Flarum\Frontend\Assets;
use Flarum\Frontend\Compiler\Source\SourceCollector;

class AssetProvider extends AbstractServiceProvider
{
    public function boot()
    {
        $settings = $this->container['flarum.settings'];

        $this->container->resolving('flarum.assets.forum', function (Assets $assets) use ($settings) {
            $assets->css(function (SourceCollector $sources) use ($settings) {
                $sources->addString(function () use ($settings) {
                    $vars = [
                        'body-bg'                => $settings->get('theme_dark_mode') ? '#212938' : '#ffffff',
                        'text-color'             => $settings->get('theme_dark_mode') ? '#ffffff' : '#111111',
                        'config-primary-color'   => $settings->get('theme_dark_mode') ? '#4B93D1' : '#3B3F42',
                        'config-secondary-color' => $settings->get('theme_dark_mode') ? '#212938' : '#8f8f8f',
                    ];

                    return array_reduce(array_keys($vars), function ($string, $name) use ($vars) {
                        return $string."@$name: {$vars[$name]};";
                    }, '');
                });
            });
        });
    }
}