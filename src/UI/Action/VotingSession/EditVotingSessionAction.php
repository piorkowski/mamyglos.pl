<?php

declare(strict_types=1);

namespace App\UI\Action\VotingSession;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route(path: '/voting-session/{sessionId}', name: 'edit_voting_session', methods: ['PATCH'])]
class EditVotingSessionAction extends AbstractController
{

    public function __invoke(Request $request): Response
    {
        return $this->render('vote_in_session/index.html.twig');
    }
}
