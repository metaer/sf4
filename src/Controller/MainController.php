<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 01.12.2017
 * Time: 2:47
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;

class MainController
{
    public function test()
    {
        return new Response('test12');
    }
}