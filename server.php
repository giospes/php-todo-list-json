<?php

    
    $task_json = file_get_contents('./todo.json');
    $tasks = json_decode($task_json, true);
    

    if(isset($_POST['newTask'])){
        $new_task= [
            'task' => "",
            'done' => false
        ];
        $new_task["task"] = $_POST["newTask"];
        array_push($tasks, $new_task);
        file_put_contents('./todo.json', json_encode($tasks));
    }
   


    header('Content-Type: application/json');

    echo json_encode($tasks);