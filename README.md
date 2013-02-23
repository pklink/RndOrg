[![Flattr this git repo](http://api.flattr.com/button/flattr-badge-large.png)](https://flattr.com/submit/auto?user_id=pierre111&url=https://github.com/pklink/RndOrg&title=RndOrg&language=&tags=github&category=software)

# RndOrg

Client for http://random.org

See example.php for usage details

    @TODO add documentation

# Run Tests

You can use [PHPUnit] from the vendor-folder.

```bash
php composer.phar install --dev
php vendor/bin/phpunit tests/
```

or with code-coverage-report

```bash
php composer.phar install --dev
php vendor/bin/phpunit --coverage-html output tests/
```

[![Build Status](https://drone.io/github.com/pklink/file-router/status.png)](https://drone.io/github.com/pklink/file-router/latest)
[![Build Status](https://travis-ci.org/pklink/file-router.png?branch=master)](https://travis-ci.org/pklink/file-router)


[PHPUnit]: http://www.phpunit.de/