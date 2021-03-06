<?php

declare(strict_types=1);

namespace HireInSocial\Application\Command\Offer;

final class Offer
{
    private $company;
    private $position;
    private $location;
    private $salary;
    private $contract;
    private $description;
    private $contact;

    public function __construct(
        Company $company,
        Position $position,
        Location $location,
        Salary $salary,
        Contract $contract,
        Description $description,
        Contact $contact
    ) {
        $this->company = $company;
        $this->position = $position;
        $this->location = $location;
        $this->salary = $salary;
        $this->contract = $contract;
        $this->description = $description;
        $this->contact = $contact;
    }

    public function company(): Company
    {
        return $this->company;
    }

    public function position(): Position
    {
        return $this->position;
    }

    public function location(): Location
    {
        return $this->location;
    }

    public function salary(): Salary
    {
        return $this->salary;
    }

    public function contract(): Contract
    {
        return $this->contract;
    }

    public function description(): Description
    {
        return $this->description;
    }

    public function contact(): Contact
    {
        return $this->contact;
    }
}
