<?php
namespace app\Tasks;

use Server\CoreBase\SwooleException;
use Server\CoreBase\Task;
use Server\DataBase\DbConnection;
use Server\DataBase\DbQueryBuilder;

/**
 * Created by PhpStorm.
 * User: tmtbe
 * Date: 16-7-15
 * Time: 下午1:06
 */
class AppTask extends Task
{
    public function testTask()
    {
        return "test task\n";
    }

}