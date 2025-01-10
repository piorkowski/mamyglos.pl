<?php
declare(strict_types=1);

use Doctrine\DBAL\Types\Type;
use Doctrine\DBAL\Platforms\AbstractPlatform;
use Enum\VoteType;

class VoteTypeType extends Type
{
    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform): string
    {
        return 'varchar(255)';
    }

    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        return VoteType::from($value);
    }

    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        return $value->value;
    }

    public function getName(): string
    {
        return 'voteType';
    }
}
