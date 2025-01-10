<?php
declare(strict_types=1);

namespace UI\DTO\Vote;
use Enum\VoteType;
use Symfony\Component\Validator\Constraints\Type;

final readonly class VoteDTO
{
    public function __construct(
        public string $voteSessionId,
        #[Assert\Choice(choices: VoteType::cases())]
        public string $vote
    )
    {
    }
}
