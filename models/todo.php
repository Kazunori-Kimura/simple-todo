<?php
// Todo.php

class Todo {

    //id (integer, primary key)
    private $id = 0;
    //content (text)
    private $content = "";
    //period (date)
    private $period = new DateTime();
    //status (boolean)
    private $status = false;


    //コンストラクタ
    //$todo_periodが日付形式でなければ例外発生
    function __construct($todo_id, $todo_content, $todo_period) {
        $this->id = $todo_id;
        $this->content = $todo_content;
        $this->period = new DateTime($todo_period);
    }

    function getId(){
        return $this->id;
    }

    function setId($todo_id){
        $this->id = $todo_id;
    }

    function getContent(){
        return $this->content;
    }

    function setContent($todo_content){
        $this->content = $todo_content;
    }

    function getPeriod(){
        return $this->period;
    }

    function setPeriod($todo_period){
        //todo: 引数の型チェック
        $this->period = new DateTime($todo_period);
    }
}
