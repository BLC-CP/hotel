<?php 

  if(isset($_POST['aumenta'])){

    $id_kliente = $_POST['id_kliente'];
    $nrn_kliente = $_POST['nrn_kliente'];
    $hela_fatin = $_POST['hela_fatin'];
    $id_aldeia = $_POST['id_aldeia'];
    $id_kuartu = $_POST['id_kuartu'];
    $data_checking = $_POST['data_checking'];
    $data_checkout = $_POST['data_checkout'];

    $insert = mq("INSERT INTO klientes VALUES('$id_kliente', '$nrn_kliente', '$hela_fatin', '$id_aldeia', '$id_kuartu', '$data_checking', '$data_checkout')");

    alert('aumenta', 'kliente', 'aumentaKliente');

  }

 ?>


            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><?= $title ?></h3>
              </div>
              
              <form role="form" action="" method="POST" enctype="multipart/form-data">
             <div class="container-fluid">
               <div class="row">
                  <div class="col-lg-6 col-md-12 mt-2">
                <div class="card-body">
                  <label for="idtpm">Id Kliente</label>
                    <input type="text" name="id_kliente" class="form-control form-control-sm" id="idtpm" readonly value="<?= uniqueId('KLIENTE-', 'klientes'); ?>">

                  <div class="form-group">
                    <label for="nrn">Naran</label>
                    <input type="text" name="nrn_kliente" class="form-control form-control-sm" id="nrn" placeholder="Naran Kliente..">
                  </div>
                  <div class="form-group">
                    <label for="hela_fatin">Hela Fatin</label>
                    <input type="text" name="hela_fatin" class="form-control form-control-sm" id="hela_fatin" placeholder="Hela Fatin..">
                  </div>
                         <div class="form-group">
                    <label >Aldeia</label>
                    <select class="form-control form-control-sm"  name="id_aldeia">
                      <option>Hili Aldeia</option>
                        <?php 
                        $query = mq("SELECT * FROM aldeias");
                        $no = 1;
                        while ($data = mfa($query)) {
                          ?>
                      <option value="<?= $data['id_aldeia'] ?>"><?= $data['nrn_aldeia'] ?></option>
                      <?php } ?>
                    </select>
                  </div>  
                 
                  
                  
                </div>
                
                </div>

                 <div class="col-lg-6 col-md-12 mt-2">
                  
                   <div class="form-group">
                    <label >Kuartu</label>
                    <select class="form-control form-control-sm"  name="id_kuartu">
                      <option>Hili Kuartu</option>
                        <?php 
                        $query = mq("SELECT * FROM kuartus");
                        $no = 1;
                        while ($data = mfa($query)) {
                          ?>
                      <option value="<?= $data['id_kuartu'] ?>"><?= $data['id_kuartu'] ?>&<?= $data['tipu_kuartu'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="data_checking">Data Checking</label>
                    <input type="date" name="data_checking" class="form-control form-control-sm" id="data_checking">
                  </div>
                  <div class="form-group">
                    <label for="data_checkout">Data Checkout</label>
                    <input type="date" name="data_checkout" class="form-control form-control-sm" id="data_checkout">
                  </div>
                  <div class="card-footer">
                  <button type="submit" name="aumenta" class="btn btn-primary btn-xs">Rai Dadus</button>
                  <button type="reset" name="reset" class="btn btn-warning btn-xs">Reset</button>
                  <a href="?page=kliente" class="btn btn-success btn-xs">Fila</a>
                </div>
                 </div>
               </div>
             </div>
              </form>
            </div>
            <!-- /.card -->


          