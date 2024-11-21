<?php

// A linked list consists of nodes where each node contains data and a reference to the next node.

class Node
{
    public $data;
    public $next;

    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }
}

class LinkedList
{
    private $head;

    public function __construct()
    {
        $this->head = null;
    }

    // Add a new node at the end
    public function append($data)
    {
        $newNode = new Node($data);
        if ($this->head === null) {
            $this->head = $newNode;
        } else {
            $current = $this->head;
            while ($current->next !== null) {
                $current = $current->next;
            }
            $current->next = $newNode;
        }
    }

    // Display the list
    public function display()
    {
        $current = $this->head;
        while ($current !== null) {
            echo $current->data . " -> ";
            $current = $current->next;
        }
        echo "NULL\n";
    }
}

// Example usage:
$list = new LinkedList();
$list->append(10);
$list->append(20);
$list->append(30);
$list->display(); // Output: 10 -> 20 -> 30 -> NULL
