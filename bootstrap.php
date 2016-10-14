<?php
require_once 'vendor/autoload.php';
use Symfony\Component\Yaml\Yaml;
use Symfony\Component\Yaml\Exception\ParseException;
use Illuminate\Database\Capsule\Manager as Capsule;
try {
    $app['config'] = Yaml::parse(file_get_contents(__DIR__.'/config/app.yml'));
} catch (ParseException $e) {
    printf("Unable to parse the YAML string: %s", $e->getMessage());
}
$capsule = new Capsule;
$capsule->addConnection(
	$app['config']['database']['connections'][$app['config']['database']['connection']]
);
$capsule->setAsGlobal();
$capsule->bootEloquent();