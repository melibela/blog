<?php

// controller => PostsController

//Eloquent model => Post

//migration => create_posts_table


Route::get('/', 'PostsController@index');
Route::get('/posts/{post}', 'PostsController@show');
/*
#all tasks load here (get() with no parameters)
Route::get('/tasks', 'TaskController@index');

/*
replace with controller@index
Route::get('/tasks', function () {
    #$tasks = DB::table('tasks')->get();
    #use eloquent in a dedicated class (app>Task.php) instead of query builder
    $tasks = App\Task::all();
    return view('tasks.index', compact('tasks')) ;
});*/
/*
Route::get('/tasks/{task}', 'TaskController@show');

/*replace with controller@show
#to visit a single task by id number entered in the URL
Route::get('/tasks/{task}', function ($id) {

    #$task = DB::table('tasks')->find($id);
    $task = App\Task::find($id);
    return view('tasks.show', compact('task')) ;
});*/
