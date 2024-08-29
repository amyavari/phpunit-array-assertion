# PHPUnit arrays assertion full guid

In this repository you will find full datasets to test all conditions of arrays and the best solution for asserting them.

## Array cases:

- List (arrays with just values) like:

```php
['a','b','c']
```

- Associative array (key-value pairs) like:

```php
['key1'=>'a', 'key2'=>'b', 'key3'=>'c']
```

- list of associative arrays like:

```php
[
    ['key1'=>'a', 'key2'=>'b', 'key3'=>'c'],
    ['key1'=>'d', 'key2'=>'e', 'key3'=>'f'],
    ['key1'=>'g', 'key2'=>'h', 'key3'=>'i']
]
```

## Important Notes:

- In PHPUnit `asser*()` methods order of elements in arrays are important, so if we need to assert without considering of their order, we should use sort functions in PHP before asserting arrays. Please look at tests with `_order_not_matter` suffix.
- PHPUnit `assertEquals()` method asserts based on `==` operator. So if corresponding element in one array is `true` it considers it has passed since `true` is equal to everything except `null` or `0` or `false`. So we us `assertSame()` method to assert type and value together since it uses `====` operator.
- For associative arrays, order doesn't matter so we always sort these arrays.

## Directory structure:
- Tests are in `tests\Unit\ArrayTest.php`
- Datasets are in `tests\DataProvider\ArrayDataProvider.php`

## Running tests:
To run tests you have two options. With Docker or without Docker directly.

### With Docker:
Just run `Docker compose up` in your command line.

### Without Docker
- You need PHP v8.2 or above
- First run `composer install` in your command line to install all necessary dependencies.    
- Then run `vendor/bin/phpunit` to run all tests. Most of them should fail.   
- To filter and run one specific test you can add `--filter <test_function_name>` option.

If you have any problem to run tests, please check this link on PHPUnit documentation: [Official installation guid](https://docs.phpunit.de/en/11.3/installation.html) or try using Docker.