
# phpcs Standard Rules

A brief description of what this project does and who it's for


## How to install

Require this package

```bash
  composer require victorsabido/phpcs-config "*"  --dev
```

Publish the rules.xml

```
php artisan vendor:publish --tag=vsabido-phpcs --force
```

Add at the end the sentence for each update in composer.json
```
"scripts":{
  "post-update-cmd": [
      ... ,
      "@php artisan vendor:publish --tag=vsabido-phpcs --force"
  ]
}
```