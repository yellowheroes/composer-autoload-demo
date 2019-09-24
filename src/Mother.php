<?php

namespace yellowheroes\test;
use yellowheroes\test\config as config; // create an alias for the config namespace
use yellowheroes\test\root as root; // create an alias for the php file that does not sit under 'src/' directory, but in ROOT

require dirname(__DIR__, 1) . "/vendor/autoload.php";

class Mother
{
    public function __construct()
    {
        echo 'We are all located under the "src/" directory';
        echo '<br />';

        echo 'greetings from Mother' . '<br />';

        $daughter = new Daughter(); // echo msg from daughter - class is autoloaded by Composer - we do not need to include or require

        $config = new config\Config(); // echo msg from Config class - also autoloaded - this sits in a different directory, so we use 'use' (line 4) and an 'alias' (i.e. 'config')

        $root = new root\ImNotInSrcDir(); // we have set a second namespace-to-directory path in composer.json psr-4 block to allow Composer autoloader to find this class in ROOT
    }
}

$mother = new Mother();