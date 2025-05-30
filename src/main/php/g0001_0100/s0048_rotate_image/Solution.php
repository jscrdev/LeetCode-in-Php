<?php

namespace leetcode\g0001_0100\s0048_rotate_image;

// #Medium #Top_100_Liked_Questions #Top_Interview_Questions #Array #Math #Matrix
// #Data_Structure_II_Day_3_Array #Programming_Skills_II_Day_7 #Udemy_2D_Arrays/Matrix
// #Top_Interview_150_Matrix #Big_O_Time_O(n^2)_Space_O(1)
// #2023_12_10_Time_4_ms_(81.58%)_Space_19.4_MB_(10.53%)

class Solution {
    /**
     * @param Integer[][] $matrix
     * @return NULL
     */
    public function rotate(&$matrix) {
        $n = count($matrix);
        for ($i = 0; $i < $n / 2; $i++) {
            for ($j = $i; $j < $n - $i - 1; $j++) {
                $pos = array(
                    array($i, $j),
                    array($j, $n - 1 - $i),
                    array($n - 1 - $i, $n - 1 - $j),
                    array($n - 1 - $j, $i)
                );
                $t = $matrix[$pos[0][0]][$pos[0][1]];
                for ($k = 1; $k < count($pos); $k++) {
                    $temp = $matrix[$pos[$k][0]][$pos[$k][1]];
                    $matrix[$pos[$k][0]][$pos[$k][1]] = $t;
                    $t = $temp;
                }
                $matrix[$pos[0][0]][$pos[0][1]] = $t;
            }
        }
    }
}
