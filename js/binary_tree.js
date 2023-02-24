class BinaryTreeNode {
    constructor(value) {
        this.left = null;
        this.right = null;
        this.parent = parent;
        this.value = value;
    }

    get height() {
        let leftHeight = this.left ? this.left.height + 1 : 0;
        let rightHeight = this.right ? this.right.height + 1 : 0;
        return Math.max(leftHeight, rightHeight);
    }
}

let tree = new BinaryTreeNode('a');