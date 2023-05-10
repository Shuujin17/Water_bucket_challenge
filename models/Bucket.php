<?php

class BucketModel {
	
	private $x;
	private $y;
	private $z;
	
	public function __construct($x_capacity, $y_capacity, $z) {
		$this->x_capacity = $x_capacity;
		$this->y_capacity = $y_capacity;
		$this->z = $z;
	}
	
	function solve($x, $y, $z) {
        // Initialize Bucket capacities and starting levels
        $max_x = $x;
        $max_y = $y;
        $level_x = 0;
        $level_y = 0;
    
        // Keep track of visited states to avoid infinite loops
        $visited = array();
    
        // Queue for breadth-first search
        $queue = new SplQueue();
        $queue->enqueue(array(0, 0, ''));
    
        while (!$queue->isEmpty()) {
            $current = $queue->dequeue();
            $level_x = $current[0];
            $level_y = $current[1];
            $action = $current[2];
    
            // Check if z state is reached
            if ($level_x == $z || $level_y == $z) {
                $steps = array();
                while ($action != '') {
                    $steps[] = array($level_x, $level_y, $action);
                    $hash = $level_x . ',' . $level_y;
                    if (isset($visited[$hash])) {
                        $level_x = $visited[$hash][0];
                        $level_y = $visited[$hash][1];
                        $action = $visited[$hash][2];
                    }
                }
                $steps[] = array($level_x, $level_y, '');
                return array('success' => true, 'steps' => array_reverse($steps));
            }
    
            // Generate all possible next states
            $next_states = array(
                array($max_x, $level_y, 'Fill Bucket 1'), // Fill Bucket 1
                array($level_x, $max_y, 'Fill Bucket 2'), // Fill Bucket 2
                array(0, $level_y, 'Empty Bucket 1'), // Empty Bucket 1
                array($level_x, 0, 'Empty Bucket 2'), // Empty Bucket 2
                array($level_x - min($level_x, $max_y - $level_y), $level_y + min($level_x, $max_y - $level_y), 'Pour Bucket 1 into Bucket 2'), // Transfer from Bucket 1 to Bucket 2
                array($level_x + min($level_y, $max_x - $level_x), $level_y - min($level_y, $max_x - $level_x), 'Pour Bucket 2 into Bucket 1') // Transfer from Bucket 2 to Bucket 1
            );
    
            // Add next states to queue if they haven't been visited before
            foreach ($next_states as $state) {
                $hash = $state[0] . ',' . $state[1];
                if (!isset($visited[$hash])) {
                    $queue->enqueue($state);
                    $visited[$hash] = array($level_x, $level_y, $action);
                }
            }
        }
    
        // No solution found
        return array('success' => false);
    }
    
}

?>
