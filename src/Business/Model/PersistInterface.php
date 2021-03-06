<?php

declare(strict_types=1);

namespace App\Business\Model;


use App\Entity\Numbers;
use MessageInfo\NumberAPIDataProvider;
use MessageInfo\NumberChangeStateRequestAPIDataProvider;
use MessageInfo\NumberCreationRequestAPIDataProvider;

interface PersistInterface
{
    public function persistCreation(NumberCreationRequestAPIDataProvider $dataProvider): void;

    public function persistChange(NumberChangeStateRequestAPIDataProvider $dataProvider, NumberAPIDataProvider $numberAPIData): void;

}
