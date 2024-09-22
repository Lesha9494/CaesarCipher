<?php

namespace Cipher;

class CaesarCipher
{
    private int $key;

    public function __construct(int $key)
    {
        $this->key = $key;
    }

    public function encrypt(string $text): string
    {
        $result = '';
        $upperAlphabet = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
        $lowerAlphabet = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];

        $upperAlphabetLength = count($upperAlphabet);
        $lowerAlphabetLength = count($lowerAlphabet);

        for ($i = 0; $i < strlen($text); $i++) {
            $char = $text[$i];

            if (in_array($char, $upperAlphabet)) {
                $index = array_search($char, $upperAlphabet);
                $newIndex = ($index + $this->key) % $upperAlphabetLength;
                $result .= $upperAlphabet[$newIndex];
            } elseif (in_array($char, $lowerAlphabet)) {
                $index = array_search($char, $lowerAlphabet);
                $newIndex = ($index + $this->key) % $lowerAlphabetLength;
                $result .= $lowerAlphabet[$newIndex];
            } else {
                $result .= $char;
            }
        }
        return $result;
    }
}
