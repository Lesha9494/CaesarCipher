<?php

namespace Tests;

use Cipher\CaesarCipher;
use PHPUnit\Framework\TestCase;

class CaesarCipherTest extends TestCase
{
    public function testEncryptUppercase(): void
    {
        $cipher = new CaesarCipher(3);
        $result = $cipher->encrypt('HELLO');
        $this->assertEquals('KHOOR', $result);
    }

    public function testEncryptNumber(): void
    {
        $cipher = new CaesarCipher(2);
        $result = $cipher->encrypt('5638');
        $this->assertSame('5638', $result);
    }

    public function testEncryptNotEqual(): void
    {
        $cipher = new CaesarCipher(5);
        $result = $cipher->encrypt('goodbye');
        $this->assertNotEquals('hello', $result);
    }
}
