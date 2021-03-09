<?php 
declare(strict_types=1);
use PHPUnit\Framework\TestCase;


final class UtilisateurTest extends TestCase
{
    public function testCanBeCreatedFromValidEmailAddress(): void
    {
        $this->assertInstanceOf(
            Email::class,
            Email::fromString('user@example.com')
        );
    }

    public function testCannotBeCreatedFromInvalidEmailAddress(): void
    {
        $this->expectException(InvalidArgumentException::class);

        Email::fromString('invalid');
    }

    public function testCanBeUsedAsString(): void
    {
        $this->assertEquals(
            'user@example.com',
            Email::fromString('user@example.com')
        );
    }

    public function testIndexReturnsDataInValidFormat() {
    
        $this->json('get', 'api/user')
             ->assertStatus(Response::HTTP_OK)
             ->assertJsonStructure(
                 [
                     'data' => [
                         '*' => [
                             'id',
                             'first_name',
                             'last_name',
                             'email',
                             'created_at',
                             'wallet' => [
                                 'id',
                                 'balance'
                             ]
                         ]
                     ]
                 ]
             );
      }
}
