<?php 
class TreeNode {
    public $value;
    public $children = [];

    public function __construct($value) {
        $this->value = $value;
    }

    public function addChild($value) {
        $child = new TreeNode($value);
        $this->children[] = $child;
        return $child;
    }
}

// Membangun pohon
$tree = new TreeNode('A');
$nodeB = $tree->addChild('B');
$nodeC = $tree->addChild('C');
$nodeD = $nodeB->addChild('D');
$nodeE = $nodeB->addChild('E');
$nodeF = $nodeC->addChild('F');

// Menampilkan isi pohon secara rekursif
function displayTree($node, $level = 0) {
    echo str_repeat('-', $level) . $node->value . "\n";
    foreach ($node->children as $child) {
        displayTree($child, $level + 1);
    }
}

displayTree($tree);
