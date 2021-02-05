<?php 
function campoSelect($dados=array(),$campo='',$valor='',$selected=''){
  
  $option       = '<option value="">Selecione</option>'."\n";
  $att_selected = '';
  
  if(count($dados)>0 && $campo!='' && $valor!=''){
      for ($i = 0; $i < count($dados); $i++)
      {
          $dataRow =  $dados[$i];
          $opt_valor = $dataRow[$valor];
          $opt_campo = $dataRow[$campo];
          $att_selected = '';
          if($selected!='' && $selected==$opt_valor){$att_selected=' SELECTED';}
          $option = $option.'<option '.$att_selected.' value="'.$opt_valor.'">'.$opt_campo.'</option>'."\n";
      }
  }
  
  return $option;
}





?>
