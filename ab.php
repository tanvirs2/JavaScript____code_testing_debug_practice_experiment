<?php
/**
 * Created by PhpStorm.
 * User: Tanvir
 * Date: 12-Feb-18
 * Time: 5:13 PM
 */

class ab
{
    public $x = 'amr';
    protected $y = 'protect';
}

class bc extends ab
{
    public function hello()
    {
        //echo $this->x;
    }
}

class cd extends bc
{
    public function world()
    {
        echo $this->y;
    }
}

class gg
{
    public function mm()
    {
        $jj = new cd();

        $jj->x;
    }
}

$vb = new cd();

$vb->world();