<?php
use Symfony\Component\Yaml\Yaml;
//Loading the configuration file
$app['config'] = $app->share(function () {
    return Yaml::parse(file_get_contents(__DIR__.'/config/app.yml'));
});
