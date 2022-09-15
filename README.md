# docker-php-stringifier
A Docker container to convert a JSON string to a PHP readable array config file string.

## How To

The following command:
`docker run --rm e7db/php-stringifier:latest '{"name": "John Doe", "age": 37, "alive": true, "colors": ["orange", "yellow", "dark-grey"], "description":{"food": "pizza", "computers": 3, "car": true, "animals": ["dog", "cat"], "children": [{"name": "peter", "age": 9}, {"name": "alicia", "age": 5}], "hobbies": {"sports": ["baseball", "curling"], "video-games": "sim racing"}}}'`

Will produce the following output:
```php
<?php
return array(
    'name' => 'John Doe',
    'age' => 37,
    'alive' => true,
    'colors' => array(
        0 => 'orange',
        1 => 'yellow',
        2 => 'dark-grey',
    ),
    'description' => array(
        'food' => 'pizza',
        'computers' => 3,
        'car' => true,
        'animals' => array(
            0 => 'dog',
            1 => 'cat',
        ),
        'children' => array(
            0 => array(
                'name' => 'peter',
                'age' => 9,
            ),
            1 => array(
                'name' => 'alicia',
                'age' => 5,
            ),
        ),
        'hobbies' => array(
            'sports' => array(
                0 => 'baseball',
                1 => 'curling',
            ),
            'video-games' => 'sim racing',
        ),
    ),
);
```
