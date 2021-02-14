<?php 
  use \php\classes\DB\Sql;
  
  $estados = new Sql();

  if(getVar('cid')){
    $query      = 'SELECT id,nome FROM tb_cidades WHERE uf = :uf AND id = :id ORDER BY nome ASC';
    $query_bind = array(':uf'=>getVar('uf'),':id'=>getVar('cid'));
  }else{
    $query      = 'SELECT id,nome FROM tb_cidades WHERE uf = :uf ORDER BY nome ASC';
    $query_bind = array(':uf'=>getVar('uf'));
  }
  $res = $estados->select($query,$query_bind);

  if(getVar('form')=='select'){
    $_uf = strtoupper(getVar('uf'));
    $option='';
    for ($i = 0; $i < count($res); $i++)
    {
      $row     = $res[$i];
      $option .= "<option value=\"".$row['id']."\">".$row['nome']." / $_uf</option>\n";
    }
    
    echo "<option value=\"\">Selecione a Cidade</option>".$option;
    
  }else{
    
      echo json_encode($res);
      
  }
  exit;


?>
