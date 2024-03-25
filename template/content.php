
    <!-- Main content -->
    <section class="content">
     <div class="container-fluid mt-3">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header ">
                <h3 class="card-title">Dezenvolde Sistema Informasaun Hotel Resort Maliana Utiliza Php no Mysql</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-4">
                    <div class="position-relative p-3 bg-gray" style="height: 180px">
                      <div class="ribbon-wrapper">
                        <div class="ribbon bg-primary">
                          HOTEL
                        </div>
                      </div>
                       <small>Id User : <?= $dataUser['id_user'] ?> <br /></small>
                      <small>Naran : <?= $dataUser['nrn_user'] ?> <br /></small>
                      <small>Level : <?= $dataUser['level'] ?> <br /></small>
                      <img width="70px" src="imgUser/<?= $dataUser['foto'] ?>">
                    </div>
                  </div>
               
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
    </section>
    <!-- /.content -->