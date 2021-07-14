<?php

/**
   * função que devolve em formato JSON os dados do cliente
   */
  function retornaProcedimento( $cod, $conn )
  {


    $sql = "select descricao, preco_compra from produtos where id_produto = '$cod'";

    $query = $conn->prepare( $sql );
    $query->execute();
    $data = $query->fetchAll();

    $count = count($data);

    //echo $count; exit();

    $arr = Array();
    if( $count > 0 )
    {
      //while( $dados = $query->fetch_object() )
        foreach ($data as $dados) {
            $dados = (object) $dados;
        
        $arr['desc'] = $dados->descricao;
        $arr['valor'] = $dados->preco_compra;
        
      }
    }
    else
      $arr['desc'] = 'não encontrado';
      //$arr['guia_operadora'] = 'não encontrado';

    return json_encode( $arr );
  }

/* só se for enviado o parâmetro, que devolve os dados */
if( isset($_GET['cod']) )
{
  
  echo retornaProcedimento( filter ( $_GET['cod'] ), $conn );
}

function filter( $arr ){
  return $arr;
}