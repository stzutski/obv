<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Obavisto Descricao">
    <meta name="keywords" content="Obavisto Keywords">
    <meta name="author" content="obavisto">
    <link rel="icon" href="{%URLAPP%}assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="{%URLAPP%}/cdn/images/favicon.png" type="image/x-icon">
    <title>ObaVisto</title>
    <style type="text/css">
      @import url('https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900');
      @import url('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i');
      @import url('https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i');
      body{
      width: 650px;
      font-family: work-Sans, sans-serif;
      background-color: #f6f7fb;
      display: block;
      }
      a{
      text-decoration: none;
      }
      span {
      font-size: 14px;
      }
      p {
          font-size: 13px;
         line-height: 1.7;
         letter-spacing: 0.7px;
         margin-top: 0;
      }
      .text-center{
      text-align: center
      }
      h6 {
      font-size: 16px;
      margin: 0 0 18px 0;
      }
    </style>
  </head>
  <body style="margin: 30px auto;">
    <table style="width: 100%">
      <tbody>
        <tr>
          <td>
            <table style="background-color: #f6f7fb; width: 100%">
              <tbody>
                <tr>
                  <td>
                    <table style="width: 650px; margin: 0 auto; margin-bottom: 30px">
                      <tbody>
                        <tr>
                          <td><img src="{%URLAPP%}cdn/images/logo-mail.png" alt="Logo E-mail ObaVisto" width="200" height="59"></td>
                          <td style="text-align: right; color:#999"><span>Recuperação de Senha</span></td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <table style="width: 650px; margin: 0 auto; background-color: #fff; border-radius: 8px">
              <tbody>
                <tr>
                  <td style="padding: 30px"> 
                    <center>
                    <h6 style="font-weight: 600">Recuperação de Senha de Acesso</h6>
                    <p style="font-size:10pt;">
                    Ola, recebemos um pedido para recuperação<br /> de senha da acesso para o usuario abaixo:
                    <br />
                    <br />
                    <b>{%emailUsuario%}</b>
                    <br />
                    <br />
                    Para receber uma nova senha
                    <br />
                    <br />
                    Clique no botão abaixo
                    <br />
                    <br />
                    <small>Caso não tenha feito esta solicitação<br />basta ignorá-la, sua senha não será alterada.</small>
                    </p>
                    <br />
                    <p style="text-align: center"><a href="#" style="padding: 10px; background-color: #0866E2; color: #fff; display: inline-block; border-radius: 4px">RECUPERAR MINHA SENHA DE ACESSO!</a>
                    </p>
                    <br />
                    <br />
                    <p style="font-size:10px;font-weight:500;"><b>Se tiver problemas, copie e cole o link abaixo em outra janela do seu navegador:</b><br />
                    <a href="{%linkRecuperacao%}" title="Clique aqui recuperar a senha de acesso">{%linkRecuperacao%}</a></small></p>
                    <hr />
                    <p>
                    <small>Caso você desconfie desta solicitação nos comunique. - Por favor não responda este email, esta é uma mensagem automática e nenhum atendente irá retornar, para falar com nosso atendimento envie sua mensagem para o email <a href="mailto:{%mailSuporte%}">{%mailSuporte%}</a></small>
                    </p>
                    <hr />
                    <p style="margin-bottom: 0">
                      EQUIPE OBAVISTO
                    </p>
                    </center>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table>
  </body>
</html>
