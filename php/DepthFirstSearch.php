<?php
function dfs($adjList, $start)
{
    $visited = [];
    $stack = [$start];
    while (!empty($stack)) {
        // Removes the ending element from the stack and mark as visited
        $v = array_pop($stack);
        $visited[$v] = 1;

        // Checks each adjacent vertex of $v and add to the stack if not visited
        foreach (array_reverse($adjList[$v]) as $adj) {
            if (!array_key_exists($adj, $visited))
                array_push($stack, $adj);
        }
    }
    return array_keys($visited);
}