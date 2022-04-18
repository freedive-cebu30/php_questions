<?php


function test(string ...$value)
{
  print_r($value);
}

test('a', 'b', 'c');
test('a', 'b', 'c', 'd');
