<?php
include_once("../header.php");
?>


<div class="content-wrapper">
          <div class="row purchace-popup">
           
          </div>
          
          <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Striped Table</h4>
                  <p class="card-description">
                    Add class <code>.table-striped</code>
                  </p>
                  <table class="table table-striped">
                    <thead>
                      <tr> <th> # </th>
                          <th> Nome </th>
                          <th> Contacto </th>
                          <th> E-mail</th>
                          <th> Username </th>
						  <th> Acção </th>
                      </tr>
                    </thead>
                    <?php 
							 // faz a seleção do dados na Tabela	
								$data = mysqli_query ($conectar, "SELECT * FROM products");
							 // lista os dados
								while($value = mysqli_fetch_array($data)){
									
									
							?>	
					  
                      <tbody>
                        <tr class="table-info">
                          <td> <?php echo $value['id'] ?></td>
                          <td> <?php echo $value['contacto'] ?> </td>
                          <td> <?php echo $value['E-mail'] ?> </td>
                          <td> <?php echo $value['username'] ?></td>
						  
						  <!--  redireciona o botao editar e apagar para os repectivos ficheiros  -->
						  <td>
							<a class="btn btn-sm btn-info " href="edit.php?id=<?php echo $value['id']; ?>"> Editar </a> - 
							<a class="btn btn-sm btn-danger " href="product/deleteQuery.php?id=<?php echo $value['id']; ?>">Apagar</a>
						  </td>
                        </tr>
						<?php  }?>	

                  </table>
                </div>
              </div>
            </div>
         
          
          
 </div>
 <?php
include_once("../footer.php");
?>