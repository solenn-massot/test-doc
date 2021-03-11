<?php 
declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use Artiste;


final class ArtisteTest extends TestCase
{
    public function testCanBeUsedAsString(): void
    {
        $this->assertArrayHasKey(
            Artiste::getArtisteById("1"),
            ['id']
        );
    }
}