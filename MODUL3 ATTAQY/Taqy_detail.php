<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./assets/style/styles.css">

</head>
<body>

    <style>
    .fax {
        color: orange;
      margin-right: 12px;
    }

    .Poto-pos {
      object-fit: cover;
       height: 50em;
      display: block;

        box-shadow: 0 0 25px #3d2173a1;
      transition: all ease 1s;
            position: relative;
      overflow: hidden;
           border-radius: 20px;
    }

    .card-home {
      margin: 20px;
    }

        .MOD {
            padding: 10px !important;
        }

        .MOD .MOD-dialog {
            width: 100%;
                        max-width: none;
                        height: 100%;
                        margin: 0;
                    }

        .MOD .MOD-content {
            height: 100%;
            border: 0;
            border-radius: 0;
        }

        .MOD .MOD-body {
            overflow-y: auto;
        }
  </style>

  <section id="home">

    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-fixed-top navbar-dark bg-dark">
 
      <div class="container-fluid">
 


        <a class="navbar-brand" href="Taqy_home.php"><img src="https://hmsitel-u.id/wp-content/uploads/2021/01/logo-ead-1.png" class="w-100" 
            alt="" style="height:5em;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  
          <span class="navbar-toggler-icon"></span>
        </button>
  


<div class="nav navbar-right">
      <li class="nav-item dropdown">
                         <a class="nav-link text-light" href="Taqy_TambahBuku.php"> <button type="button" class="btn btn-info">Tambah_buku</button></a>
                          </li>   
                        </div>
                      </div>


    </nav>

    <div class="container">
        <?php
         include './pengaturan/connect.php';include './pengaturan/create.php';include './pengaturan/delete.php';include './pengaturan/update.php';

                ini_set('display_errors', '1');ini_set('display_startup_errors', '1');error_reporting(E_ALL);ini_set('error_reporting', E_ALL);$IDBO = $_GET['id_buku'];
                $KUER = "SELECT * FROM buku_table where id_buku=$IDBO;";
                $CQL = mysqli_query($sambung, $KUER);
                ?>

        <div class="row">

          
            <?php if ($row = mysqli_fetch_array($CQL)) {  ?>
               
                <div class="col-md-10 col-lg-offset-10 " style="margin-left: 8em">
                


                    <div class="card card-home">
             
                    

            
                   

                                    <img class="card-img-top Poto-pos" src="<?php echo $row['gambar'] ?>" alt="Card image cap">
                               

                                    <div class="card-body">
                                        <h3><?php echo $row['judul_buku'] ?></h3>
                    

                            <p class="card-text">
                                       
                                         <p> <strong> Deskripsi : </strong></p>


                                <p><?php echo $row['deskripsi'] ?></p>
                                        
                                              <div class="row">
                                    <div class="col-md-8">
                                       

                               <p> <strong> Judul: </strong></p>
                                       <p><i ></i><?php echo $row['judul_buku'] ?></p>
                                       
                              <p> <strong> Penulis: </strong></p>
                                       
                           <p><i ></i><?php echo $row['penulis_buku'] ?></p>
                                               
                                                <p> <strong> Tahun Terbit: </strong></p>
                                     
                                         <p><i ></i><?php echo $row['tahun_terbit'] ?></p>
                                               
                                 <p> <strong> Deskripsi: </strong></p>
                                               
                                                <p><i ></i><?php echo $row['deskripsi'] ?></p>
                                               
                                                <p> <strong> Bahasa: </strong></p>
                                        <p><i></i><?php echo $row['bahasa'] ?></p>
                                       
                                        <p> <strong> Tag: </strong></p>



 <?php
                 
                                       $fwv = json_decode($row['tag']);
                 
                                        $isBenefitEmpty = true;
                 

                 
                                        if (!empty($fwv)) {
                 
                                            $isBenefitEmpty = false;
                 
                                            echo '<ul>';
                 
                                            echo '<li>' . implode('</li><li>', $fwv) . '</li>';
                                            echo '</ul>';
                 

                                        } else {
                                            $isBenefitEmpty = true;

                                            echo '<ul>';
                 
                                            echo '<li>' . 'Tidak Ada Tag.' . '</li>';
                 
                                            echo '</ul>';
                 
                                        }
                                        ?>
                                      
                                    </div>
                                    
                                </div>
                         

                        </div>

                        <form action="Taqy_detail.php?id_buku=<?php echo $row['id_buku'] ?>" method="post">
                            <div class="card-footer bg-transparent">
                                <p style="text-align: center;">
                                    <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModalLong">
                                                    Edit
                                                </button>
                                    <button type="submit" value="<?php echo $row['id_buku'] ?>" name="APUGAN" class="btn btn-danger">Hapus</button>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                     
                            <div class="modal-header">
                    
                                <h5 class="modal-title" id="exampleModalLongTitle">Update Data</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="container mx-auto my-1">
                                    <form action="Taqy_detail.php?id_buku=<?php echo $row['id_buku'] ?>" method="post" enctype="multipart/
                                        form-data">
                                        <div class="row">
                                            <div class="col-lg-12 col-lg-offset-12  ">
                          


                                                <div class="card h-100">
                                                    <div class="card-header bg-info"></div>
                              
                                                    <div class="card-body">

              <input type="hidden" name="id_buku" value=<?php echo $row['id_buku'] ?>>
           

              <div class="form-group">
                        <h6>Judul Buku</h6>
                        <input required type="text" name="Back1" id="" class="form-control" value="<?php echo $row['judul_buku'] ?>" placeholder="" aria-describedby="helpId">

              </div>

                      <div class="form-group">
                        <h6 style="margin-top:5px;"> Penulis</h6>
                        <input required type="text" name="Back2" id="" class="form-control" placeholder="" value="<?php echo $row['penulis_buku'] ?>" aria-describedby="helpId">
                      </div>

               <div class="form-group">
                <h6 style="margin-top:5px;">Tahun Terbit</h6>
               <input required type="text" name="Back3" id="" class="form-control" placeholder="" value="<?php echo $row['tahun_terbit'] ?>"aria-describedby="helpId">
              </div>

                                      <div class="form-group">
                                        <h6 style="margin-top:5px;">Deskripsi</h6>
                                         <textarea required class="form-control" name="Back4" id="" rows="3" value=""><?php echo $row['deskripsi'] ?></textarea>
                                      </div>


              <div class="">
                <h6 style="margin-top:5px;">Bahasa</h6>
                                                                <label class="col-md-6 form-check">
                                                  <div class="row">
                                                                        <div class="form-check col-md-6">
                                                      <input class="form-check-input" name="Blas" value="Indonesia" type="radio" <?php echo ($row['bahasa'] == 'Indonesia') ? 'checked' : '' ?>>
                                                                            <label class="form-check-label" for="gridRadios2">
                                                             Indonesia
                                               </label>
                                                                        </div>
                                                                        <div class="form-check col-md-6">
                                                                                    <input class="form-check-input" value="Lainnya" type="radio" name="Blas" <?php echo ($row['bahasa'] == 'Lainnya') ? 'checked' : '' ?>>
                                                                                    <label class="form-check-label" for="gridRadios3">
                                                                                        Lainnya
                                                                                    </label>
                                                                                </div>
                                                                            </div>

                                                                </label>
                </div>


 <?php
                                                        $arrayBenefit = null;
                                                        $DAG1= false;$DAG2 = false;$DAG3 = false;$DAG4= false;$DAG5 = false;$DAG6 = false;$DAG7 = false;

                                                        if ($isBenefitEmpty) {
                                                            $snack = false;
                                                        } else {
                                                                $arrayBenefit = json_decode($row['tag']);
                                                                if (in_array("Pemrograman", $arrayBenefit)) {
                                                                    $DAG1 = true;
                                                                }
                                                                if (in_array("Website", $arrayBenefit)) {
                                                                            $DAG2 = true;
                                                                        }
                                                                        if (in_array("Java", $arrayBenefit)) {
                                                                                $DAG3 = true;
                                                                            }
                                                                            if (in_array("OOP", $arrayBenefit)) {
                                                                                $DAG4 = true;
                                                                            }
                                                                                        if (in_array("MVC", $arrayBenefit)) {
                                                                                            $DAG5 = true;
                                                                                        }
                                                                            if (in_array("Kalkulus", $arrayBenefit)) {
                                                                                $DAG6 = true;
                                                                            }
                                                                           if (in_array("Lainnya", $arrayBenefit)) {
                                                                                $DAG7 = true;
                                                                    }
                                                        }
                                                        ?>

                                                        <div class="form-group">

                                                      <h6 style="margin-top:5px;">Tag</h6>
                                                            <div class="form-check">
                                                                <div class="row col-md-12">

                                                                    <div class="col-md-6">
                                                                        <label class="form-check-label">
                                                                            <input <?php echo ($DAG1) ? 'checked' : ''; ?> type="checkbox" class="form-check-input" name="DAG[]" id="" value="Pemograman">
                                                                            Pemrograman
                                                                        </label>
                                                                    </div>

                                                                    <div class="col-md-4">
                                                                        <label class="form-check-label">
                                                                            <input <?php echo ($DAG2) ? 'checked' : ''; ?> type="checkbox" class="form-check-input" name="DAG[]" id="" value="Website">
                                                                            Website
                                                                        </label>
                                                                    </div>

                                                                                <div class="col-md-4">
                                                                                    <label class="form-check-label">
                                                                                        <input <?php echo ($DAG3) ? 'checked' : ''; ?> type="checkbox" class="form-check-input" name="DAG[]" id="" value="Java">
                                                                                        Java
                                  </label>
                                                                    </div>


                                                                    <div class="col-md-4">
                                                                        <label class="form-check-label">
                                            <input <?php echo ($DAG4) ? 'checked' : ''; ?> type="checkbox" class="form-check-input" name="DAG[]" id="" value="OOP">
                                                                            OOP
                                                                        </label>
                                                                    </div>

                              <div class="col-md-4">
                                                                        <label class="form-check-label">
                                                                            <input <?php echo ($DAG5) ? 'checked' : ''; ?> type="checkbox" class="form-check-input" name="DAG[]" id="" value="MVC">
                                                                            MVC
                                      </label>
                                                                    </div>

                                                                    <div class="col-md-4">
                                                                        <label class="form-check-label">
                                                  <input <?php echo ($DAG6) ? 'checked' : ''; ?> type="checkbox" class="form-check-input" name="DAG[]" id="" value="Kalkulus">
                                                                            Kalkulus
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label class="form-check-label">
                                                                            <input <?php echo ($DAG7) ? 'checked' : ''; ?> type="checkbox" class="form-check-input" name="DAG[]" id="" value="Lainnya">
                                                                            Lainnya
                                                                        </label>
                                                                    </div>


                                                        
                                        

                                                    </div>
                                           

                                                </div>
                                      


                                            </div>

                                        
                                        </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                               
                                    <button type="submit" name="updateEvent" class="btn btn-info">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>




    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>