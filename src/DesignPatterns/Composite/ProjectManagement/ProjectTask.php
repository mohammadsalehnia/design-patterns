<?php

namespace Src\DesignPatterns\Composite\ProjectManagement;

class ProjectTask implements ProjectComponent
{
    private $title;
    private $description;
    private $status;

    /**
     * @param $title
     * @param $description
     * @param $status
     */
    public function __construct($title, $description, $status)
    {
        $this->title = $title;
        $this->description = $description;
        $this->status = $status;
    }


    public function done()
    {
        // TODO: Implement done() method.
    }

    public function delete()
    {
        // TODO: Implement delete() method.
    }

    public function move()
    {
        // TODO: Implement move() method.
    }

    public function duplicate()
    {
        // TODO: Implement duplicate() method.
    }
}
