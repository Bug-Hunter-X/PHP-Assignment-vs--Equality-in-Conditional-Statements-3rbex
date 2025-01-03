The solution is simple: use the correct equality operator (==) or the identical operator (===) in the conditional statement.

```php
<?php
$a = 5;
if ($a == 10) { // Correct: Equality check
    echo "a is 10";
} else {
    echo "a is not 10";
}
?>
```

Using `==` checks for loose equality (value comparison), while `===` checks for strict equality (value and type comparison).  Choose the operator that best suits your comparison needs.  In most cases, `==` is sufficient, but `===` is often preferred for better clarity and to prevent unexpected type coercion.