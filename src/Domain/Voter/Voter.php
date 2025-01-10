<?php
declare(strict_types=1);


namespace Voter;


class Voter
{
    public function __construct(
        public string $id,
        public string $userId
    )
    {
    }
}
