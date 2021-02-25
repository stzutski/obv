<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
      @import url('https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900');
      @import url('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i');
      @import url('https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i');
      *{padding:0px;marigin:0px;word-spacing:0px;}
      body{font-family: work-Sans, sans-serif;background-color: #f6f7fb;display: block;}
      a{text-decoration: none;}
      .btnLnk{color:#fff;}
      span {font-size: 14px;}
      p {font-size: 13px;line-height: 1.7;letter-spacing: 0.7px;margin-top: 0;}
      .text-center{text-align: center}
      h6 {font-size: 16px;margin: 0 0 18px 0;}
      .main{background-color: #f6f7fb; width: 100%;}
      div{margin-bottom:50px;}
      h2{font-weight: 600}
      .userName{color:blue;font-size:12px;}
      .mailHeader{text-align:center;}
      .bodyContent{text-align:center;padding:0px 20px;margin:10px;padding:10px;background-color: #fff; border-radius: 8px}
      .mailFooter > p{text-align:center;font-weight:bold;}
      .btn{padding: 10px; background-color: #0866E2; color: #fff; display: inline-block; border-radius: 4px}
      .altLnk{font-size:10px;font-weight:500;}
      .logo{text-align:center;padding-top:30px;}
      .footerNotes{text-align:justify;padding:0px 5px;}
    </style>
  </head>
  <body style="margin: 30px auto;">
    
    <div class="main" style="margin:30px auto;max-width: 650px;">
    
        <div class="logo"><img src="{%logoMail%}" alt="Logo E-mail ObaVisto" width="200" height="59"></div>
        
        <div class="bodyContent">
        
            <div class="mailHeader">
              <h2>Recuperação de Senha de Acesso!</h2>
              <p><strong class="userName">Olá, {%emailUsuario%}.</strong></p>
            </div>
            
            <div class="mailBody">
              <p>
              Recebemos um pedido para recuperação da senha da acesso<br />para o usuario acima:
              <br />
              <br />
              Clique no botão abaixo para recuperar sua senha de acesso!
              <br />
              <br />
              <a href="{%linkRecuperacao%}" class="btn" style="color:#ffffff;">RECUPERAR MEU ACESSO!</a>
              </p>
              <p class="altLnk">Se tiver problemas, copie e cole o link abaixo<br />na barra de endereços do seu navegador:<br />
              <a href="{%linkRecuperacao%}" title="Clique aqui recuperar a senha de acesso">{%linkRecuperacao%}</a></small>
              <br />
              <br />
              <small><span style="padding:5px;color:#fff;display:inline-block;border:1px #ccc solid;background:#AC0000;">Este link estará ativo até: {%horarioLimite%}</span></small>
              <br />
              <br />
              </p>
              <p  class="footerNotes">
                <small>
                  <b>NOTAS:</b> Se não quiser alterar a senha ou não tiver feito essa solicitação, basta ignorar e excluir esta mensagem. - 
                  Caso você desconfie desta solicitação nos comunique. Por favor não responda este email, esta é uma mensagem automática e não será respondida. Para falar com nosso atendimento envie sua mensagem para o email <a href="mailto:{%mailSuporte%}">{%mailSuporte%}</a></small></p>
            </div>
            
            <div class="mailFooter"><p>EQUIPE OBAVISTO</p></div>
          
        </div>
    
    </div>
    
  </body>
</html>
