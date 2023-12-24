<?php

namespace leetcode\g0401_0500\s0437_path_sum_iii;

// #Medium #Top_100_Liked_Questions #Depth_First_Search #Tree #Binary_Tree #Level_2_Day_7_Tree
// #Big_O_Time_O(n)_Space_O(n) #2023_12_24_Time_8_ms_(100.00%)_Space_20_MB_(56.25%)

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution {
    function countPaths($node, &$count, $prefixSum, $targetSum) {
        if ($node === null) {
            return 0;
        }
        $count[$prefixSum]++;
        $prefixSum += $node->val;
        $ans = $count[$prefixSum - $targetSum]
            + $this->countPaths($node->left, $count, $prefixSum, $targetSum)
            + $this->countPaths($node->right, $count, $prefixSum, $targetSum);
        $prefixSum -= $node->val;
        $count[$prefixSum]--;
        return $ans;
    }

    /**
     * @param TreeNode $root
     * @param Integer $targetSum
     * @return Integer
     */
    public function pathSum($root, $targetSum) {
        $count = [];
        return $this->countPaths($root, $count, 0, $targetSum);
    }
}
