<?php
            
            /*EJERCICIO 7*/

             
            /*
                * By adding type hints and enabling strict type checking, code can become
                * easier to read, self-documenting and reduce the number of potential bugs.
                * By default, type declarations are non-strict, which means they will attempt
                * to change the original type to match the type specified by the
                * type-declaration.
                *
                * In other words, if you pass a string to a function requiring a float,
                * it will attempt to convert the string value to a float.
                *
                * To enable strict mode, a single declare directive must be placed at the top
                * of the file.
                * This means that the strictness of typing is configured on a per-file basis.
                * This directive not only affects the type declarations of parameters, but also
                * a function's return type.
                *
                * For more info review the Concept on strict type checking in the PHP track
                * <link>.
                *
                * To disable strict typing, comment out the directive below.
            */


            /*

                declare(strict_types=1);
                class SimpleCipher {
                    public string $key;
                    private const ALPHABETS = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k','l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];

                    public function __construct(string $key = 'hallohallo')
                    {
                        if (is_null($key)) {
                            $key = $this->generateRandomString();
                        }
                        if (strtolower($key) !== $key || !ctype_alpha($key) || $key === '') {
                            throw new \InvalidArgumentException('hallo');
                        }
                        $this->key = $key;
                    }
                    private function generateRandomString(): string {
                        $characters = 'abcdefghijklmnopqrstuvwxyz';
                        $randomString = '';
                        for ($i = 0; $i < 100; $i++) {
                            $randomString .= $characters[rand(0, 25)];
                        }
                        return $randomString;
                    }
                    public function encode(string $plainText): string
                    {
                        $plainArray = [];
                        $position = 0;
                        while(count($plainArray) < strlen($plainText)) {
                            $plainArray[] = substr($plainText, $position, 1);
                            $position++;
                        }
                        $encoderArray = [];
                        foreach ($plainArray as $position => $plainChar) {
                            $encodedArray[] = $this->getEncodedChar($plainChar, $position);
                        }
                        return implode('', $encodedArray);
                    }
                    private function getEncodedChar(string $plainChar, int $position): string
                    {
                        if (!ctype_alpha($plainChar)) {
                            return $plainChar;
                        }
                        while ($position >= strlen($this->key)) {
                            $position -= strlen($this->key);
                        }
                        $cipherLetter = substr($this->key, $position, 1);
                        $letterKeys = array_flip(self::ALPHABETS);
                        $plainCharIsUpperCase = strtoupper($plainChar) === $plainChar;
                        $lowerChar = strtolower($plainChar);
                        $cipherLetterKey = $letterKeys[$cipherLetter];
                        $charKey = $letterKeys[$lowerChar];
                        $encodedChar = self::ALPHABETS[($cipherLetterKey + $charKey) % 26];
                        return $plainCharIsUpperCase ? strtoupper($encodedChar) : $encodedChar;
                    }
                    private function getDecodedChar(string $encodedChar, int $position): string
                    {
                        if (!ctype_alpha($encodedChar)) {
                            return $encodedChar;
                        }
                        while ($position >= strlen($this->key)) {
                            $position -= strlen($this->key);
                        }
                        $cipherLetter = substr($this->key, $position, 1);
                        $letterKeys = array_flip(self::ALPHABETS);
                        $encodedCharIsUpperCase = strtoupper($encodedChar) === $encodedChar;
                        $lowerChar = strtolower($encodedChar);
                        $cipherLetterKey = $letterKeys[$cipherLetter];
                        $charKey = $letterKeys[$lowerChar];
                        $dencodedChar = self::ALPHABETS[($charKey - $cipherLetterKey) % 26];

                        return $encodedCharIsUpperCase ? strtoupper($dencodedChar) : $dencodedChar;
                    }
                    public function decode(string $cipherText): string
                    {
                        $cipherArray = [];
                        $position = 0;
                        while(count($cipherArray) < strlen($cipherText)) {
                            $cipherArray[] = substr($cipherText, $position, 1);
                            $position++;
                        }
                        $decoderArray = [];
                        foreach ($cipherArray as $position => $cipherChar) {
                            $decodedArray[] = $this->getDecodedChar($cipherChar, $position);
                        }
                        return implode('', $decodedArray);
                    }
                }

            */
                

?>