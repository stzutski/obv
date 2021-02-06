<div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-lg-6">
                  <h3>PAINEL DO CLIENTE</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../ltr/index.html">Home</a></li>
                    <li class="breadcrumb-item">Color Version</li>
                  </ol>
                </div>
                <div class="col-lg-6">


bookmarks


                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row starter-main">
             
             <div class="col-sm-12">
             <h1>conteudo vai aqui</h1>
             
 
             
             <form>
               
             <select name="osta" id="osta" class="form-control" autocomplete="off">
               <option value="000">bbbbbbbbb</option>
               <option value="003" selected>01010203</option>
               <option value="002">0222222</option>
               <option value="001">aaaaaaaaaa</option>
             </select>
             
             
             <br />
             <br />
             <input type="checkbox" id="c1" id="c1" value="teste" />
             <br />
             <br />
             
             
             
             
             <select name="erda" id="erda" class="form-control" autocomplete="off">
               <option value="000">01010203</option>
              <?php 
            $dd[] = array('idTeste'=>'x1','nome'=>'nomeTESTE1','tel'=>'telTESTE1');
            $dd[] = array('idTeste'=>'x2','nome'=>'nomeTESTE2','tel'=>'telTESTE2');
            $dd[] = array('idTeste'=>'x3','nome'=>'nomeTESTE3','tel'=>'telTESTE3');
            $dd[] = array('idTeste'=>'x4','nome'=>'nomeTESTE4','tel'=>'telTESTE4');
            $tag = campoSelect($dd,'nome','idTeste','x4');
            echo $tag."\n";
              ?>
             </select>
             </form>
             
             </div>
             
             
             
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
