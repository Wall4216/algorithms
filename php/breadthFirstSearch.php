<?php
function bfs($adjList, $start, $end, $yes = false){
    $visited = [];
    $queue = [$start];
    while (!empty($queue)) {
        $v = array_shift($queue);
        $visited[$v] = 1;
        foreach ($adjList[$v] as $adj) {
            if (!array_key_exists($adj, $visited)) {
                array_push($queue, $adj);
            }
        }
    }
    // return array_key_exists($end, $visited);
    if (array_key_exists($end, $visited)) {
        $yes = true;
    }
    return $yes;
}