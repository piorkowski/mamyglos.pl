<?php
declare(strict_types=1);


namespace Enum;


enum VoteType: string
{
    case YES = 'yes';
    case NO = 'no';
    case ABSTAIN = 'abstain';
}
