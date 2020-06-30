<?php
include "Ust.php";
?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>YÖNETİM PANELİ</h3>
              </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel"></div>

                <?php 
                print_r($_SESSION);
                 ?>

              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

<?php

include "Alt.php";

?>