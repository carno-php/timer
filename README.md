# Timer - component of carno-php

# Installation

```bash
composer require carno-php/timer
```

# Usages

```php
$id = Timer::loop(10, function () {
    echo 'triggering every 10ms', PHP_EOL;
});
Timer::after(500, function () use ($id) {
    echo 'trigger once after 500ms', PHP_EOL;
    echo 'and clear previous created loop timer', PHP_EOL;
    Timer::clear($id);
});
```
