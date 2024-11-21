<?php

// A stack is a data structure where the last element added is the first one to be removed (Last In, First Out - LIFO).

class Stack
{
    private $stack = [];

    // Push an element onto the stack
    public function push($value)
    {
        array_push($this->stack, $value); // O(1)
    }

    // Pop the top element off the stack
    public function pop()
    {
        if ($this->isEmpty()) {
            return null; // Stack is empty
        }
        return array_pop($this->stack); // O(1)
    }

    // Peek at the top element without removing it
    public function peek()
    {
        return end($this->stack); // O(1)
    }

    // Check if the stack is empty
    public function isEmpty()
    {
        return empty($this->stack); // O(1)
    }
}

// Example usage:
$stack = new Stack();
$stack->push(10);
$stack->push(20);
echo $stack->peek(); // Output: 20
echo $stack->pop();  // Output: 20
echo $stack->isEmpty(); // Output: false
