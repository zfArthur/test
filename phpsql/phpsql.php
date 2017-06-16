<?php
//栈演示
// $stack = new SplStack();

// $stack->push("data1\n");
// $stack->push("data2\n");


// echo $stack->pop();
// echo $stack->pop();
//
//队列演示

//$queue = new SplQueue();

//$queue -> enqueue("data1\n");
//$queue -> enqueue("data2\n");

//echo $queue->dequeue();
//echo $queue->dequeue();
//
//堆
//
//$heap = new Sql
//
//堆
//$heap = new SqlMinHeap();
//$heap->insert("data1\n");
//$heap->insert("data2\n");

//echo $heap->extract();
//echo $heap->extract();
//
//固定长度的数组
$array = new SplFixedArray(10);
$array[0]=123;
$array[9]=999;

var_dump($array);
