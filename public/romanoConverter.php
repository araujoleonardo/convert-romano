<?php

class romanoConverter
{
    private array $romanToInt = [
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1
    ];

    public function romanToInt(string $roman): int
    {
        $num = 0;
        $i = 0;
        $length = strlen($roman);

        while ($i < $length) {
            if ($i + 1 < $length && isset($this->romanToInt[$roman[$i] . $roman[$i + 1]])) {
                $num += $this->romanToInt[$roman[$i] . $roman[$i + 1]];
                $i += 2;
            } else {
                $num += $this->romanToInt[$roman[$i]];
                $i++;
            }
        }

        return $num;
    }
}