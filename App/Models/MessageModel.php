<?php

namespace Lukas\Autoservices\Models;


class MessageModel
{
    private $idMessage;
    private $nomeCliente;
    private $veiculo;
    private $etapa;
    private $dataAtual;

    public function __construct()
    {
        $this->dataAtual = date('Y-m-d H:i');
    }

    public function setNomeCliente($nomeCliente)
    {
        $this->nomeCliente = $nomeCliente;
    }

    public function getNomeCliente()
    {
        return $this->nomeCliente;
    }
    
    public function setVeiculo($veiculo)
    {
        $this->veiculo = $veiculo;
    }

    public function getVeiculo()
    {
        return $this->veiculo;
    }

    public function setEtapa($etapa)
    {
        $this->etapa = $etapa;
    }

    public function getEtapa()
    {
        return $this->etapa;
    }

    public function getDataAtual()
    {
        return $this->dataAtual;
    }

    public function setIdMessage($idMessage)
    {
        $this->idMessage = $idMessage;
    } 

    public function getIdMessate()
    {
        return $this->idMessage;
    }
   
}