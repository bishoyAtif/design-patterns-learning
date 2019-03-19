<?php

namespace App;

use App\Commands\NoCommand;
use App\Interfaces\CommandInterface;

class Invoker
{
    protected $command;
    protected $prevCommand;

    public function __construct()
    {
        $this->command = new NoCommand();
        $this->prevCommand = new NoCommand();
    }

    public function setCommand(CommandInterface $command): void
    {
        $this->command = $command;
    }

    public function invokeCommand()
    {
        $this->prevCommand = $this->command;
        $this->command->execute();
    }

    public function undoLastCommand()
    {
        $this->prevCommand->undo();
    }

}