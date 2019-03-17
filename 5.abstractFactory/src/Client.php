<?php

namespace App;

use App\Interfaces\BaseFactoryInterface;

class Client
{
    protected $workshopFactory;

    public function __construct(BaseFactoryInterface $workshopFactory)
    {
        $this->workshopFactory = $workshopFactory;
    }

    public function setWorkshopFactory(BaseFactoryInterface $workshopFactory)
    {
        $this->workshopFactory = $workshopFactory;
    }

    public function makeNewRoom()
    {
        $this->workshopFactory->createChair();
        $this->workshopFactory->createTable();
        $this->workshopFactory->createChair();
    }

}
