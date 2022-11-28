<?php

class CorResistor {
    /**
     * @var string
     */
    protected $color = "";
    /**
     * @var string
     */
    protected $alertMessage = "";
    /**
     * @var string
     */
    protected $alertType = "success";
    /**
     * @var string[]
     */
    protected $arrayColors = [
        "preto" => "0",
        "marrom" => "1",
        "vermelho" => "2",
        "laranja" => "3",
        "amarelo" => "4",
        "verde" => "5",
        "azul" => "6",
        "violeta" => "7",
        "cinza" => "8",
        "branco" => "9"
    ];
    /**
     * CorResistor constructor.
     */
    public function __construct()
    {

    }
    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }
    /**
     * @param $color
     * @return $this
     */
    public function setColor($color)
    {
        $this->color = $color;

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
            if (empty($this->color)) {
                throw new Exception("Cor é obrigatória!");
            }

            if (!isset($this->arrayColors[$this->color])) {
                throw new Exception("Cor informada não existe na lista!");
            }

            $this->alertMessage = "O número da cor '{$this->color}' é {$this->arrayColors[$this->color]}";
            return true;
        } catch (\Exception $e) {
            $this->alertMessage = $e->getMessage();
            $this->alertType = "warning";
            return true;
        }
    }
}