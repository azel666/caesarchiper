<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaesarCipherController extends Controller
{
    public function encrypt(Request $request)
    {
        $text = $request->input('text');
        $shift = $request->input('shift');

        $result = $this->caesarCipher($text, $shift);

        return view('caesar-cipher.index', ['result' => $result]);
    }

    public function decrypt(Request $request)
    {
        $text = $request->input('text');
        $shift = $request->input('shift');

        $result = $this->caesarCipher($text, -$shift);

        return view('caesar-cipher.index', ['result' => $result]);
    }

    private function caesarCipher($text, $shift)
    {
        $result = "";

        $text = strtolower($text);

        for ($i = 0; $i < strlen($text); $i++) {
            if (ctype_alpha($text[$i])) {
                $result .= chr((ord($text[$i]) - 97 + $shift + 26) % 26 + 97);
            } else {
                $result .= $text[$i];
            }
        }

        return $result;
    }
}
