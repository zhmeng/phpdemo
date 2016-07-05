<?php
/**
 * Created by IntelliJ IDEA.
 * User: wjr
 * Date: 16-6-14
 * Time: 下午4:10
 */
class Controller
{
    private $model;
    public function __construct(Model $model){
        $this->model = $model;
    }
}