<?php
declare(strict_types=1);


namespace App\Repository;


use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Vote;

class VoteRepository extends ServiceEntityRepository
{
    public function save(Vote $vote): void
    {

    }

    public function calculateVotingSessionVotes(string $votingSessionId): array
    {
        $votesCount = ['yes' => 0, 'no' => 0, 'hold' => 0];


    }
}
