<?php

namespace yellowheroes\test\root;

class ImNotInSrcDir
{
    public function __construct()
    {
        echo '<br /><hr />';
        echo 'greetings from ImNotInSrcDir - yep, you guessed it right, I am not located under the "src/" directory, but in ROOT' . '<br />';
        echo 'So a seperate entry in composer.json is necessary for Composer Autoloader to find me...' . '<br />';
        echo 'We added: "yellowheroes\\test\\root\\": "" to the PSR-4 paths' . '<br />';
        echo 'Where the "" indicates ROOT, as all paths are relative to ROOT, so do NOT USE "/" to indicate the file sits in ROOT, use "" in the PSR-4 path' . '<br />';

    }
}

