<?php
declare(strict_types=1);


namespace Voter;


class VotingParticipation
{
    public function __construct(
        public string $id,
        public string $voterId,
        public string $votingSessionId,
        public bool $voted = false,
    )
    {
    }
}
