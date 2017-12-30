
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
<?php interface TextWrapExerciseInterface {
  public function textWrap($text, $length);}

class Text implements TextWrapExerciseInterface {
  public function textWrap($text, $length) {
   $array_res =''; $text_tranf =array();$conf_text='';$max_li=0;
   for($j=0; $j <= strlen($text)-1;){ $s=0;$q=0;                       
    if($text[$j] == ' '){
      for($cont=0;$cont+$j<=strlen($text)-5;$cont++ ){
        if($s != 1){
          if($text[$j+$cont+1] != ' '){
           $q++;
          }else{
                $s=1; break;}}}
        if(strlen($array_res) > $length){
          echo  $text_tranf[$j]  = "</br>";
          $array_res =0;
        }else{   
              if($conf_text + strlen($array_res) + $q > $length){ 
               $text_tranf[$j] = "</br>";
               $conf_text= 0;   
               $array_res = " ";  
              }else{ 
                 $conf_text = $conf_text + strlen($array_res);   
                 $array_res = " ";
                 $text_tranf[$j]  = " ";   
               }}}else{
                       if(strlen($array_res) > $length){
                           $text_tranf[$j]  = "</br>";
                           $array_res =0;
                       }else{
                             $array_res = $array_res.$text[$j];
                             $text_tranf[$j] = str_replace("", $array_res, $text[$j]);
                       }
                }
      
         $j++;  
         } 
      
    return ($text_tranf );   
    }
    
}



$p1 =  new Text;
$array_mos = $p1-> textWrap("O
website é gratuito para os usuários gera receita proveniente de publicidade, incluindo banners, destaques patrocinados no feed de notícias[66] e grupos patrocinados (cujas cotas seriam de mais de 1,7 milhão de dólares por semana em abril de 2006, segundo rumores).[67] Usuários criam perfis que contêm fotos e listas de interesses pessoais, trocando mensagens privadas e públicas entre si e participantes de grupos de amigos. A visualização de dados detalhados dos membros é restrita para membros de uma mesma rede ou amigos confirmados. De acordo com o TechCrunch, 85% dos membros dos colégios suportados têm um perfil cadastrado no website e, dentre eles, 60% fazem login diariamente no sistema, 85% o faz pelo menos uma vez por semana e 93% o faz pelo menos uma vez por mês. De acordo com Chris Hughes, porta-voz do Facebook, as pessoas gastam em média 19 minutos por dia no Facebook.[67] Em um estudo conduzido em 2006 pela Student Monitor, uma empresa especializada em pesquisas de mercado relacionadas a estudantes universitários de Nova Jérsei, concluiu que o Facebook foi o segundo nome mais in entre os estudantes, empatado com cerveja e sexo e perdendo apenas para iPod.[68]

Mural O Mural é um espaço na página de perfil do usuário que permite aos amigos postar mensagens para os outros verem. Ele é visível para qualquer pessoa com permissão para ver o perfil completo, e posts diferentes no mural aparecem separados no Feed de Notícias. Muitos usuários usam os murais de seus amigos para deixar avisos e recados temporários. Mensagens privadas são salvas em Mensagens, que são enviadas à caixa de entrada do usuário e são visíveis apenas ao remetente e ao destinatário, bem como num e-mail. Em julho de 2007 o Facebook, que só permitia posts de textos, passou a permitir postagem de anexos no mural.[69] 
eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee ooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo lllllllllllllllllllllllllllleeeeeeqqqqqererw trttttttttttrrtrettrtrtrrter
",30);

foreach($array_mos as $array_result ){
       echo  $cont_n = $array_result;
    } 