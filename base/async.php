<?php

interface Async{

    /**
     * 开启异步任务，完成是执行回调，任务结果或异常通过回调参数传递
     * @param callable $callback
     *      continuation :: (mixed $result = null, \Exception|null $ex = null)
     * @return void 
     */
    function begin(callable $callback){
        
    }
}