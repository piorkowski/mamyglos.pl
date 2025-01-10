<?php
declare(strict_types=1);


namespace App\Repository;


use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Exception\ORMException;
use Voter\Voter;

class VotingSessionRepository
{
    public function __construct(private readonly EntityManagerInterface $entityManager)
    {

    }

    public function getVoter(string $id): ?Voter
    {
        try {
            return $this->entityManager->find(Voter::class, $id);
        } catch (\Exception|ORMException $e) {
            return null;
        }
    }
}
