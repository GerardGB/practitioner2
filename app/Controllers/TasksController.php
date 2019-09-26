<?php
class TasksController {
    //GESTIONARA TOTES LES URLS QUE COMENCIN PER /tasks

    //CRUD -> CREATE RETRIEVE/LLISTAR UPDATE DELETE
    
    // /tasks -> Mostrarà la llista completa de tasques

    // /task/{id}

    // /task/create TEMPORAL HTTP

    // /task/delete/{id}

    // /task/update/{id}

    public function create() {
        //TODO
    }

    public function list() {
        //TODO LIST TASKS
        //TOTS ELS TEMES COMUNS VAN FORA
        $tasks = Task__all();
        return view('tasks',$tasks);
    }

    public function show() {
        //TODO LIST ONE TAKS
        $task = Task::find($id);
        return view('task',$task);
    }

    public function update() {
        //TODO
    }

    public function delete() {

    }
}