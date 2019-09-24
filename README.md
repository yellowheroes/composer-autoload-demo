# composer-autoload-demo

##Namespace to directory mapping
Note: Composer mapping is always relative to ROOT, i.e. "/".

## src folder (your project)
To correctly map Composer autoloader to the class files under the 'src' directory (say our project) we use in composer.json autoload / psr-4 block:
"yellowheroes\\test\\": "src/"
This maps to directories under "/src/"

## other folders (ROOT == "")
To correctly map to class ImNotInSrcDir in ROOT, we use mapping to "":
"yellowheroes\\test\\root\\": ""
This maps to directory under "/" (i.e. ROOT)
