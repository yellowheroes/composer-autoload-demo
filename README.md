# composer-autoload-demo

## Namespace to directory mapping
Composer mapping is always relative to ROOT, i.e.: ```"/"```.

## src folder (your project)
To correctly map Composer autoloader to the class files under the ```src``` directory (our project),
we use the following in composer.json autoload / psr-4 block:

```"yellowheroes\\test\\": "src/"```

This maps to directories under ```/src/```

## other folders (ROOT == ```""```)
To correctly map to class ```ImNotInSrcDir``` located in ROOT, we use mapping to ```""```:

```"yellowheroes\\test\\root\\": ""```

This maps to directory under ```/``` (i.e. ROOT)

So: DO NOT USE ```"/"``` to set ROOT, as it would resolve to ```//``` for Composer autoloader, because it always starts at ```/```
