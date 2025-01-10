<?php
declare(strict_types=1);


class PeselProvider
{
    public function hashPesel(string $pesel, string $password): string
    {
        $hashedPesel = hash('sha256', $pesel . $password);
        return password_hash($hashedPesel, PASSWORD_ARGON2ID);
    }

    public function verifyPesel(string $pesel, string $hash): bool
    {
        return password_verify($pesel, $hash);
    }
}
