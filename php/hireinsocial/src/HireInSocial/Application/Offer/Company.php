<?php

declare(strict_types=1);

namespace HireInSocial\Application\Offer;

use HireInSocial\Application\Assertion;

final class Company
{
    private $name;
    private $url;
    private $description;

    public function __construct(string $name, string $url, string $description)
    {
        Assertion::betweenLength($name, 3, 255);
        Assertion::url($url);
        Assertion::betweenLength($url, 1, 2083);

        Assertion::betweenLength($description, 10, 512);

        $this->name = $name;
        $this->url = $url;
        $this->description = $description;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function url(): string
    {
        return $this->url;
    }

    public function description(): string
    {
        return $this->description;
    }
}
