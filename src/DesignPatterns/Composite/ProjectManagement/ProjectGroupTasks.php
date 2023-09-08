<?php

namespace Src\DesignPatterns\Composite\ProjectManagement;

class ProjectGroupTasks implements ProjectComponent
{
    private $tasks;

    public function add(ProjectTask $projectTask)
    {
        $this->tasks[] = $projectTask;
    }

    public function done()
    {
        foreach ($this->tasks as $task) {
            $task->done();
        }
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
