<?php

namespace App;

class Cups
{

    protected $id;

    public function generate()
    {
        $reeId = $this->_generateReeId();
        $distId = $this->_generateDistId();

        $control = ($reeId . $distId) % 529;
        $division = $control / 23;
        $resto = $control % 23;

        $this->id = $this->_getCountry()
            . $reeId
            . $distId
            . $this->_getControlNumbersBy($division)
            . $this->_getControlNumbersBy($resto);

        return $this->id;
    }

    /**
     * Genera los 4 numeros dados por la Red electrica de España
     *
     * @return string
     */
    protected function _generateReeId()
    {
        $id = mt_rand(0, 9999);

        for ($idLength = strlen($id); $idLength < 4; $idLength++) {
            $id = '0' . $id;
        }

        return $id;
    }

    /**
     * Genera los 12 numeros Id del distribuidor
     *
     * @return string
     */
    protected function _generateDistId()
    {
        $id = mt_rand(0, 999999999999);

        for ($distLength = strlen($id); $distLength < 12; $distLength++) {
            $id = '0' . $id;
        }

        return $id;
    }

    /**
     * Retorna ISO pais
     *
     * @return string
     */
    protected function _getCountry()
    {
        return 'ES';
    }

    /**
     * Retorna array with control
     *
     * @return string
     */
    protected function _getControlNumbers()
    {
        return array(
            0 => 'T',
            1 => 'R',
            2 => 'W',
            3 => 'A',
            4 => 'G',
            5 => 'M',
            6 => 'Y',
            7 => 'F',
            8 => 'P',
            9 => 'D',
            10 => 'X',
            11 => 'B',
            12 => 'N',
            13 => 'J',
            14 => 'Z',
            15 => 'S',
            16 => 'Q',
            17 => 'V',
            18 => 'H',
            19 => 'L',
            20 => 'C',
            21 => 'K',
            22 => 'E',
        );
    }

    /**
     * Retorna array with control
     *
     * @return string
     */
    protected function _getControlNumbersBy($id)
    {
        $controlNumber = $this->_getControlNumbers();

        return $controlNumber[(int) $id];
    }

}
