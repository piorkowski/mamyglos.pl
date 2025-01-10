<?php
declare(strict_types=1);

namespace Domain\Vote;
use DateTimeImmutable;

class VotingSession
{
    public function __construct(
        public string $id,
        public array $votes,
        public DateTimeImmutable $createdAt,
        public DateTimeImmutable $startTime,
        public DateTimeImmutable $endTime,
        public string $votingSessionResult,
    )
    {
    }
}
