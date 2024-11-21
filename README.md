# Data Structures and Algorithms in PHP

This repository provides implementations of basic **Data Structures** and **Algorithms** in PHP. The folder structure is organized for better clarity and scalability, making it easy to find and run examples for specific topics.

## Table of Contents

- [Data Structures and Algorithms in PHP](#data-structures-and-algorithms-in-php)
  - [Table of Contents](#table-of-contents)
  - [Introduction](#introduction)
  - [Folder Structure](#folder-structure)
  - [Data Structures](#data-structures)
  - [Algorithms](#algorithms)
    - [Sorting](#sorting)
    - [Searching](#searching)
    - [Graph Algorithms](#graph-algorithms)
  - [Coming Soon](#coming-soon)
  - [How to Use](#how-to-use)
  - [Contributing](#contributing)
  - [License](#license)

## Introduction

Data Structures and Algorithms are essential for writing efficient, scalable, and optimized code. This repository demonstrates these concepts using **PHP**, showcasing how PHP can be used beyond web development for algorithmic and computational tasks.

## Folder Structure

```plaintext
.
├── data_structures/
│   ├── Stack.php
│   ├── Queue.php
│   ├── LinkedList.php
│
├── algorithms/
│   ├── Sorting/
│   │   ├── BubbleSort.php
│   │
│   ├── Searching/
│   │   ├── BinarySearch.php
│   │
│   ├── Graph/
│       ├── (Coming Soon)
```

- **`data_structures/`**: Contains implementations of foundational data structures.
- **`algorithms/`**: Contains categorized subdirectories for different types of algorithms:
  - **`Sorting/`**: Sorting algorithms like Bubble Sort.
  - **`Searching/`**: Searching algorithms like Binary Search.
  - **`Graph/`**: Graph-related algorithms (coming soon).

## Data Structures

1. **Stack (LIFO)**: A linear data structure where the last element added is the first one removed.
2. **Queue (FIFO)**: A linear data structure where the first element added is the first one removed.
3. **Linked List**: A dynamic structure made of nodes, where each node points to the next.

## Algorithms

### Sorting

1. **Bubble Sort**: A simple sorting algorithm that repeatedly compares adjacent elements and swaps them if needed.

### Searching

1. **Binary Search**: An efficient algorithm for finding a value in a sorted array.

### Graph Algorithms

Coming Soon: Algorithms like Depth-First Search (DFS) and Breadth-First Search (BFS) will be added here.

## Coming Soon

The repository will be expanded to include:

1. **Advanced Data Structures**:
   - Binary Search Trees
   - Hash Tables
   - Graphs
2. **More Algorithms**:
   - Quick Sort
   - Merge Sort
   - Depth-First Search (DFS)
   - Breadth-First Search (BFS)

## How to Use

1. Clone the repository:
   ```bash
   git clone https://github.com/kimmyxpow/php-dsa.git
   ```
2. Navigate to the project directory:
   ```bash
   cd php-dsa
   ```
3. Run the examples for a specific data structure or algorithm:
   ```bash
   php data_structures/Stack.php
   php algorithms/Sorting/BubbleSort.php
   php algorithms/Searching/BinarySearch.php
   ```

## Contributing

Contributions are welcome! If you'd like to add new algorithms, improve existing ones, or fix issues, feel free to:
1. Fork the repository.
2. Create a new branch.
3. Submit a pull request.

## License

This project is licensed under the MIT License. See the `LICENSE` file for details.
