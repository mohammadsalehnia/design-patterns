<?php

namespace Src\DesignPatterns\Composite\ProjectManagement;

interface ProjectComponent
{
    public function done();

    public function delete();

    public function move();

    public function duplicate();
}
