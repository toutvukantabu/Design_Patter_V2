<?php

namespace App\Interface;

interface FormaterInterface
{

    public function getData(): ?array;

    public function setData($data): self;
}
