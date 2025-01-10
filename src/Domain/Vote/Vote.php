<?php
declare(strict_types=1);


use Enum\VoteType;

final readonly class Vote
{
    public function __construct(
        public string $id,
        public VoteType $type,
        public DateTimeImmutable $votedAt,
        public string $votingSessionId,
    )
    {
    }
}
