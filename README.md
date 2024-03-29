# composer-autoload-demo

## Namespace to directory mapping
Composer mapping is always relative to ROOT directory, i.e.: ```"/"```.

## src folder (your project)
To correctly map Composer autoloader to the class files under the ```src``` directory (our project),
we use the following in composer.json autoload / psr-4 block:

```"yellowheroes\\test\\": "src/"```

This will successfully autoload any classes in base-namespace* ```"yellowheroes\test"``` located in ```src``` or subdirectories of ```src``` folder.

**note:** *base-namespace here means that the autoloader will also autoload classes in e.g. namespace ```"yellowheroes\test\config"```, we just need to import them into our base namespace. For example class ```Config``` in folder ```src/config``` which sits in namespace ```"yellowheroes\test\config"```, is successfully imported ('use' statement) in class ```Mother``` and successfully autoloaded (see how this works in file ```Mother.php``` in folder ```src```)*

## other folders (ROOT == ```""```)
To map to classes in directories that are not under ```src``` we need to set another psr-4 path
in the composer.json psr-4 / autoload block.

For example, to correctly map to class ```ImNotInSrcDir```, which sits in namespace ```"yellowheroes\test\root"```,
located in the ROOT of the project (i.e. not under ```src```), we use mapping to ```""```,
and save the following path in the composer.json psr-4 / autoload block:

```"yellowheroes\\test\\root\\": ""```

This maps namespace ```"yellowheroes\\test\\root\\"``` to directory under ```/``` (i.e. ROOT)

So: **DO NOT USE ```"/"```** to set ROOT, as it would resolve to ```//``` for Composer autoloader, because it always starts at ```/```

For any other directories not under ```src``` do the same, just add another line to the composer.json psr-4 / autoload block,
mapping the namespace to the correct folder location to allow Composer autoloader to successfully include classes located there.
