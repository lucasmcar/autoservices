<?php

namespace Lukas\Autoservices\Bot;


class Message
{

    /**
     * Método que configura uma mensagem padrão para ser enviada ao cliente para acompanhar andamento do serviço
     * com dados vindo da base
     * @param $nomeCliente
     * @param $ordemServico
     * @param $veiculo
     * @param $etapa
     * @param $dataAtual
     * @return string
     */
    public static function setMessage($nomeCliente, $ordemServico, $veiculo, $etapa, $dataAtual)
    {
        return sprintf("Acompanhamento de serviço: \nOS: %s\n\nOlá Sr/Sra %s. \n\nSeu veículo %s, se encontra na etapa %s. Aguarde para novas atualizações\nMensagem enviada em %s", $ordemServico, $nomeCliente, $veiculo, $etapa, $dataAtual);
    }

}