<?php

include "Ust.php";

?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>AYARLAR</h3>
              </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>AYARLAR</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <?php 

                    if(isset($_GET['Durum']))

                      {
                        if ($_GET['Durum'])
                    {

                    ?>

      <div class="alert alert-success alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong>Bilgiler Güncellendi!</strong> 
                  </div>

                     <?php 
                    }


                    else
                    {
                    ?>

      <div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong>Bilgiler GÜNCELLENMEDİ!!!</strong> 
                  </div>

                     <?php 

                  }
                    }
                    
                    ?>
                  <!--   Veriler URL de açık bi şekilde gitmesin diye post kullandık.. -->

                    <form action="ayar_guncelle.php" method="POST" class="form-horizontal form-label-left" novalidate>
                      <p>Web sayfası ayar düzenleme sayfasıdır.
                      </p>
                      <span class="section">Genel Ayarlar</span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_baslik">Sitenizin Başlığı 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="ayar_baslik" class="form-control col-md-7 col-xs-12" data-validate-length-range="10" data-validate-words="2" name="ayar_baslik" value="<?php echo $Ayar ["ayar_baslik"];  ?>" placeholder="Buraya sitenizin başlığını yazınız..." type="text">
                        </div>
                      </div>

                        <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_description">Sitenizin Açıklaması
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="ayar_description" class="form-control col-md-7 col-xs-12" data-validate-length-range="10" data-validate-words="2" name="ayar_description" value="<?php echo $Ayar ["ayar_description"];  ?>" placeholder="Buraya sitenizin açıklamasını yazınız..."type="text">
                        </div>
                      </div>

                        <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_keywords">Anahtar kelimeler 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="ayar_keywords" class="form-control col-md-7 col-xs-12" data-validate-length-range="10" data-validate-words="2" name="ayar_keywords"value="<?php echo $Ayar ["ayar_keywords"];  ?>" placeholder="Buraya sitenizin anahtar kelimelerini yazınız..." type="text">
                        </div>
                      </div>


                 <span class="section">Sosyal Medya Ayarlar</span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_instagram">İnstagram
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="ayar_instagram" class="form-control col-md-7 col-xs-12" data-validate-length-range="10" data-validate-words="2" name="ayar_instagram" value="<?php echo $Ayar ["ayar_instagram"];  ?>" placeholder="" type="text">
                        </div>
                      </div>

                        <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_twitter">Twitter
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="ayar_twitter" class="form-control col-md-7 col-xs-12" data-validate-length-range="10" data-validate-words="2" name="ayar_twitter" value="<?php echo $Ayar ["ayar_twitter"];  ?>"placeholder=""  type="text">
                        </div>
                      </div>

                        <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_facebook">Facebook 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="ayar_facebook" class="form-control col-md-7 col-xs-12" data-validate-length-range="10" data-validate-words="2" name="ayar_facebook" value="<?php echo $Ayar ["ayar_facebook"];  ?>"placeholder=""  type="text">
                        </div>
                      </div>

                        <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_youtube">Youtube 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="ayar_youtube" class="form-control col-md-7 col-xs-12" data-validate-length-range="10" data-validate-words="2" name="ayar_youtube" value="<?php echo $Ayar ["ayar_youtube"];  ?>"placeholder="" type="text">
                        </div>
                      </div>





                 <span class="section">Mail Ayarlar</span>


                        <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_msunucu">Mail Sunucu
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="ayar_msunucu" class="form-control col-md-7 col-xs-12" data-validate-length-range="10" data-validate-words="2" name="ayar_msunucu"value="<?php echo $Ayar ["ayar_msunucu"];  ?>" placeholder=""  type="text">
                        </div>
                      </div>

                        <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_mport">Port no 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="ayar_mport" class="form-control col-md-7 col-xs-12" data-validate-length-range="10" data-validate-words="2" name="ayar_mport"value="<?php echo $Ayar ["ayar_mport"];  ?>" placeholder="" type="text">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_mkadi">Mail Adresi 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="ayar_mkadi" class="form-control col-md-7 col-xs-12" data-validate-length-range="10" data-validate-words="2" name="ayar_mkadi"value="<?php echo $Ayar ["ayar_mkadi"];  ?>" placeholder=""  type="text">
                        </div>
                      </div>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_msifre">Mail Şifre 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="ayar_msifre" class="form-control col-md-7 col-xs-12" data-validate-length-range="10" data-validate-words="2" name="ayar_msifre" value="<?php echo $Ayar ["ayar_msifre"];  ?>"placeholder=""  type="password">
                        </div>
                      </div>



                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button id="send" type="submit" class="btn btn-success">Kaydet</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

<?php

include "Alt.php";

?>