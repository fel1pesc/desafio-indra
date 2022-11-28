<?php

class DistanciaHamming {
    /**
     * @var string
     */
    protected $fita1 = "";
    /**
     * @var string
     */
    protected $fita2 = "";
    /**
     * @var int
     */
    protected $count = 0;
    /**
     * @var string
     */
    protected $alertMessage = "";
    /**
     * @var string
     */
    protected $alertType = "success";
    /**
     * CorResistor constructor.
     */
    public function __construct()
    {

    }
    /**
     * @return string
     */
    public function getFita1()
    {
        return $this->fita1;
    }
    /**
     * @param $fita1
     * @return $this
     */
    public function setFita1($fita1)
    {
        $this->fita1 = $fita1;

        return $this;
    }
    /**
     * @return string
     */
    public function getFita2()
    {
        return $this->fita2;
    }
    /**
     * @param $fita1
     * @return $this
     */
    public function setFita2($fita2)
    {
        $this->fita2 = $fita2;

        return $this;
    }
    /**
     * @return string
     */
    public function getAlertMessage()
    {
        return $this->alertMessage;
    }
    /**
     * @return string
     */
    public function getAlertType()
    {
        return $this->alertType;
    }
    /**
     * @return bool
     */
    public function execute()
    {
        try {
            if (empty($this->fita1) || empty($this->fita2)) {
                throw new Exception("Todos os campos são obrigatórios!");
            }

            if (!empty(trim($this->fita1, 'GTAC')) || !empty(trim($this->fita2, 'GTAC'))) {
                throw new Exception("Apenas as letras G, T, A e C são válidas para as fitas de DNA");
            }

            if (strlen($this->fita1) !== strlen($this->fita2)) {
                throw new Exception("As fitas de DNA precisam ter o mesmo tamanho!");
            }

            // Divide a fita de DNA em um array para verificação da distância de Hammings
            $array1 = str_split($this->fita1);
            $array2 = str_split($this->fita2);

            // Realiza a contagem da distância de Hammings, verificando a igualdade das letras
            for ($i = 0; $i <= count($array1); $i++) {
                $array1[$i] === $array2[$i] ?: $count++;
            }

            $this->alertMessage = "A distância de Hamming é: {$count}";
            return true;
        } catch (\Exception $e) {
            $this->alertMessage = $e->getMessage();
            $this->alertType = "warning";
            return true;
        }
    }
}