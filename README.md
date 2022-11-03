# LKT Commander

This lib was designed for apps with multiple packages in a way to register Symfony console commands in an easy way.

## Usage

### Command registration

```php
$command = new YourSymfonyCommand(); 
\Lkt\Commander\Commander::register($command);
```

### Usage

In your cli.php:

```php
\Lkt\Commander\Commander::run();
```

Alternatively, if not all console commands uses LKT Commander, you can get the Symfony application this way:

```php
$application = \Lkt\Commander\Commander::getApplication();

// Your stuff...

$application->run();
```