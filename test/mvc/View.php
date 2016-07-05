<?php
/**
 * Created by IntelliJ IDEA.
 * User: wjr
 * Date: 16-6-14
 * Time: 下午4:08
 */
class View
{
    private $model;

    public function __construct(Model $model){
        $this->model = $model;
    }

    public function output() {
        return '<h1> ' . $this->model->text . '</h1>';
    }
}