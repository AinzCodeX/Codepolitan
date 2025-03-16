<?php

class Student {

}

$classes = get_declared_classes();

echo "Classes: " . implode(', ', $classes) . "<br />";

$classNames = ['Product', 'Student', 'student'];

foreach ($classNames as $className) {
    if (class_exists($className)) {
        echo "Class $className exists.<br>";
        } else {
            echo "Class $className does not exist.<br>";
            }
            }