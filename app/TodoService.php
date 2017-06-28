<?php
namespace App;

function guard($parameters, $type = null) {
    $stack = debug_backtrace();
    $s = array_pop($stack);
    
    if(isset($s['class'])) {
        $calledFrom = $s['file'] . ':' . $s['line'] . ' ' . $s['class'] . $s['type'] . $s['function'] . '()';
    } else {
        $calledFrom = $s['file'] . ':' . $s['line'] . ' ' . $s['function'] . '()';
    }

    foreach($parameters as $parameter => $value) {
        if(!$type && !$value || $type && gettype($value) != $type) die('ERROR: ' . $calledFrom . ' parameter $' . $parameter . ' cannot be empty' . PHP_EOL);
    }
}

class TodoService
{
    protected static $base = [
        [
            'id' => 4,
            'createdAt' => 1498638933,
            'title' => 'Jogar PingPong',
            'tasks' => [
                ['title' => '#Task 1', 'done' => false, 'createdAt' =>  1498638940],
                ['title' => '#Task 2', 'done' => false, 'createdAt' =>  1498638941],
                ['title' => '#Task 3', 'done' => false, 'createdAt' =>  1498638943],
            ],
        ],
        [
            'id' => 7,
            'createdAt' => 1498643923,
            'title' => 'Reclamar dos ternarios do pavão',
            'tasks' => [
                ['title' => '#Task 1', 'done' => false, 'createdAt' =>  1498643925],
                ['title' => '#Task 2', 'done' => false, 'createdAt' =>  1498643929],
                ['title' => '#Task 3', 'done' => true,  'createdAt' =>  1498643932],
            ],
        ],
        [
            'id' => 11,
            'createdAt' => 1498653923,
            'title' => 'Tomar cerveja durante sessão de debugging',
            'tasks' => [
                ['title' => '#Task 1', 'done' => false, 'createdAt' =>  1498653928],
                ['title' => '#Task 2', 'done' => true,  'createdAt' =>  1498653934],
                ['title' => '#Task 3', 'done' => false, 'createdAt' =>  1498653939],
            ],
        ],
        [
            'id' => 17,
            'createdAt' => 1498663923,
            'title' => 'Explicar porque Linux é melhor que Windows para Tonioli',
            'tasks' => [
                ['title' => '#Task 1', 'done' => true, 'createdAt' =>  1498663926],
                ['title' => '#Task 2', 'done' => true, 'createdAt' =>  1498663929],
                ['title' => '#Task 3', 'done' => true, 'createdAt' =>  1498663932],
            ],
        ],
    ];

    public static function getAll() {
        sleep(1);
        return self::$base;
    }

    public static function find($title = null) {
        guard(compact('title'));

        sleep(2);
        
        $filteredItems = [];

        //Implemente aqui

        return $filteredItems;
    }
}