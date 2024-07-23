<?php
namespace MyApp;

class Counter
{
    private $count;

    public function __construct()
    {
        $this->count = isset($_SESSION['count']) ? $_SESSION['count'] : 0;
    }

    public function increment()
    {
        $this->count++;
        $this->saveCount();
    }

    public function decrement()
    {
        $this->count--;
        $this->saveCount();
    }

    public function getCount()
    {
        return $this->count;
    }

    private function saveCount()
    {
        $_SESSION['count'] = $this->count;
    }
}