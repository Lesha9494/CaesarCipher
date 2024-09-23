<?php

namespace Tests;

require_once 'vendor/autoload.php';

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
}
