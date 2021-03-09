<?php
namespace Alexeev;

class Line
{
    protected $X;

    public function line($a, $b)
    {
        if($a == 0) {
            throw new \Error('Не существует!');
        }
        return $this->X = array(-($b/$a));
    }
}