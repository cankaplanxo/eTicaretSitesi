<?php

include "Ust.php";
//error_reporting(E_ALL ^ E_NOTICE);
//ini_set('error_reporting', E_ALL ^ E_NOTICE);

if(!isset($_GET['id']))
  $_GET['id']=0;

$Urun=$db->prepare("SELECT * FROM urun WHERE urun_id=?");
$Urun->execute(array(intval($_GET['id'])));

$Urun=$Urun->fetch();

?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>ÜRÜNLER</h3>
              </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Ürün Detay</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
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

                    <form action="urun_guncelle.php" method="POST" class="form-horizontal form-label-left" novalidate>
                     
                      <span class="section"><?php echo $Urun['urun_adi'] ?></span>

                      <input type="hidden" name="urun_id"value="<?php echo $Urun['urun_id'] ?>">

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="urun_adi">Ürünün Adı
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12"  id="urun_adi"  name="urun_adi" value="<?php echo $Urun
                          ['urun_adi'] ?>" placeholder="Buraya ürünün adını giriniz" type="text">
                        </div>
                      </div>


                                            <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="urun_aciklama">Ürünün Açıklaması
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12"  id="urun_aciklama"  name="urun_aciklama" value="<?php echo $Urun
                          ['urun_aciklama'] ?>" placeholder="Buraya ürünün açıklamasını giriniz" type="text">
                        </div>
                      </div>


                                            <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="urun_fiyat">Ürünün Fiyatı
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12"  id="urun_fiyat"  name="urun_fiyat" value="<?php echo $Urun
                          ['urun_fiyat'] ?>" placeholder="Buraya ürünün adını giriniz" type="text">
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="urun_indirim">Ürünün İndirim Oranı(%)
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12"  id="urun_indirim"  name="urun_indirim" value="<?php echo $Urun
                          ['urun_indirim'] ?>" placeholder="Buraya ürünün adını giriniz" type="text">
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="urun_stok">Ürünün Stok Adeti
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12"  id="urun_stok"  name="urun_stok" value="<?php echo $Urun
                          ['urun_stok'] ?>" placeholder="Buraya ürünün stok adedini giriniz" type="text">
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="urun_vitrin">Ürünün vitrin durumu
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12"  id="urun_vitrin"  name="urun_vitrin" value="<?php echo $Urun
                          ['urun_vitrin'] ?>" placeholder="Buraya ürünün vitrin durumunu giriniz" type="text">
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="urun_kategori_id">Ürünün Kategorisi
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12"  id="urun_kategori_id"  name="urun_kategori_id" value="<?php echo $Urun
                          ['urun_kategori_id'] ?>" placeholder="Buraya ürünün adını giriniz" type="text">
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="urun_renk">Ürün Renki
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12"  id="urun_renk"  name="urun_renk" value="<?php echo $Urun
                          ['urun_renk'] ?>" placeholder="Buraya ürünün renkini giriniz" type="text">
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="urun_beden">Ürünün Bedeni
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12"  id="urun_beden"  name="urun_beden" value="<?php echo $Urun
                          ['urun_beden'] ?>" placeholder="Buraya ürünün bedenini giriniz" type="text">
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="urun_marka">Ürünün Markası
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12"  id="urun_marka"  name="urun_marka" value="<?php echo $Urun
                          ['urun_marka'] ?>" placeholder="Buraya ürünün markasını giriniz" type="text">
                        </div>
                      </div>







                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button id="send" type="submit" class="btn btn-success"><?php echo ($_GET['id']>0?'Güncelle':'Ekle') ?></button>
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