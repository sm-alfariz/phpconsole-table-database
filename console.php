#!/usr/bin/env php
<?php
require __DIR__ . '/bootstrap.php';
use Symfony\Component\Console\Application;
use Fendi\IndonesianDate\IndonesiaDate ;
$tgl = new IndonesiaDate;
$tgl->blogDate(date("Y-m-d"));
$console = new Application('Console App by. Fendi powered by Symfony console and php pysh');
$console->addCommands(array(
	new Cli\Command\DataCommand(),
	new Cli\Command\InteractiveCommand(),
));
$console->run();
