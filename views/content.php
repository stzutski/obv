<div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-lg-6">
                  <h3>Layout Light</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../ltr/index.html">Home</a></li>
                    <li class="breadcrumb-item">Color Version</li>
                  </ol>
                </div>
                <div class="col-lg-6">
                  <!-- Bookmark Start-->
                  <div class="bookmark pull-right">
                    <ul>
                      <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                      <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Icons"><i data-feather="command"></i></a></li>
                      <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Learning"><i data-feather="layers"></i></a></li>
                      <li><a href="#"><i class="bookmark-search" data-feather="star"></i></a>
                        <form class="form-inline search-form" action="#" method="get">
                          <div class="form-group form-control-search">
                            <div class="Typeahead Typeahead--twitterUsers">
                              <div class="u-posRelative">
                                <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search.." name="q" title="" autofocus>
                                <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div>
                              </div>
                              <div class="Typeahead-menu"></div>
                              <script id="result-template" type="text/x-handlebars-template">
                                <div class="ProfileCard u-cf">                        
                                <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
                                <div class="ProfileCard-details">
                                <div class="ProfileCard-realName">{{name}}</div>
                                </div>
                                </div>
                              </script>
                              <script id="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
                            </div>
                          </div>
                        </form>
                      </li>
                    </ul>
                  </div>
                  <!-- Bookmark Ends-->
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
