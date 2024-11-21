<?php

// A queue is a data structure where the first element added is the first one to be removed (First In, First Out - FIFO).

class Queue
{
    private $queue = [];

    // Enqueue an element to the end of the queue
    public function enqueue($value)
    {
        array_push($this->queue, $value); // O(1)
    }

    // Dequeue an element from the front of the queue
    public function dequeue()
    {
        if ($this->isEmpty()) {
            return null; // Queue is empty
        }
        return array_shift($this->queue); // O(n) due to re-indexing
    }

    // Peek at the front element without removing it
    public function peek()
    {
        return $this->queue[0] ?? null; // O(1)
    }

    // Check if the queue is empty
    public function isEmpty()
    {
        return empty($this->queue); // O(1)
    }
}

// Example usage:
$queue = new Queue();
$queue->enqueue(10);
$queue->enqueue(20);
echo $queue->peek(); // Output: 10
echo $queue->dequeue(); // Output: 10
echo $queue->isEmpty(); // Output: false
