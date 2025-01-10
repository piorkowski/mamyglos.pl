<?php
declare(strict_types=1);

namespace Domain\Vote;
use DateTimeImmutable;

final readonly class VotingSessionResults
{
    public function __construct(
        public string $id,
        public string $votingSessionsId,
        public string $votesTotal,
        public string $yes,
        public string $no,
        public string $abstain,
        public string $notParticipating,
        public DateTimeImmutable $startTime,
        public DateTimeImmutable $endTime,
    )
    {
    }
}
