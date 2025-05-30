<?php

namespace leetcode\g0001_0100\s0070_climbing_stairs;

// #Easy #Top_100_Liked_Questions #Top_Interview_Questions #Dynamic_Programming #Math #Memoization
// #Algorithm_I_Day_12_Dynamic_Programming #Dynamic_Programming_I_Day_2
// #Level_1_Day_10_Dynamic_Programming #Udemy_Dynamic_Programming #Top_Interview_150_1D_DP
// #Big_O_Time_O(n)_Space_O(n) #2023_12_10_Time_3_ms_(82.81%)_Space_19.1_MB_(38.54%)

class Solution {
    /**
     * @param Integer $n
     * @return Integer
     */
    public function climbStairs($n) {
        if ($n < 2) {
            return $n;
        }
        $cache = array_fill(0, $n, 0);
        // creating a cache or DP to store the result
        // so that we dont have to iterate multiple times
        // for the same values;
        // for 0 and 1 the result array i.e cache values would be 1 and 2
        // in loop we are just getting ith values i.e 5th step values from
        // i-1 and i-2 which are 4th step and 3rd step values.
        $cache[0] = 1;
        $cache[1] = 2;
        for ($i = 2; $i < $n; $i++) {
            $cache[$i] = $cache[$i - 1] + $cache[$i - 2];
        }
        return $cache[$n - 1];
    }
}
