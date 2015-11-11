<?php
/**
 * Created by PhpStorm.
 * User: pane
 * Date: 11/11/15
 * Time: 23:57
 */

class Orang
{
    protected $nama;

    protected $jk;

    protected $agama;

    protected $tl;

    /**
     * @return mixed
     */
    public function getAgama()
    {
        return $this->agama;
    }

    /**
     * @param mixed $agama
     */
    public function setAgama($agama)
    {
        $this->agama = $agama;
    }

    /**
     * @return mixed
     */
    public function getJk()
    {
        return $this->jk;
    }

    /**
     * @param mixed $jk
     */
    public function setJk($jk)
    {
        $this->jk = $jk;
    }

    /**
     * @return mixed
     */
    public function getNama()
    {
        return $this->nama;
    }

    /**
     * @param mixed $nama
     */
    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    /**
     * @return mixed
     */
    public function getTl()
    {
        return $this->tl;
    }

    /**
     * @param mixed $tl
     */
    public function setTl($tl)
    {
        $this->tl = $tl;
    }
}