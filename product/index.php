
<?php
include_once ("../header.php");
include_once("../db.php");

?>


<div class="content-wrapper">
          <div class="row purchace-popup">
           
          </div>
          
          <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Tabela dos Usuarios</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="table table-bordered" style="min-width: 845px">
                                                    <thead>
                                        <tr>
                                        <th> ID </th>
                                        <th> Codigo</th>
                                        <th> Nome </th>
                                        <th> Preço</th>
                                                    <th> Acção </th>
                                        </tr> 
                                    </thead>
                    <?php 
							 // faz a seleção do dados na Tabela	
								$data = mysqli_query($conectar, "SELECT * FROM products");
							 // lista os dados
								while($value = mysqli_fetch_array($data)){
									
									
							?>	
					  
                      <tbody>
                        <tr class="table-info">
                          <td> <?php echo $value['id'] ?></td>
                          <td> <?php echo $value['cod'] ?> </td>
                          <td> <?php echo $value['name'] ?> </td>
                          <td> <?php echo $value['price'] ?></td>
						  
						  <!--  redireciona o botao editar e apagar para os repectivos ficheiros  -->
						  <td>
							<a class="btn btn-sm btn-info " href="edit.php?id=<?php echo $value['id']; ?>"> Editar </a> - 
							<a class="btn btn-sm btn-danger " href="product/deleteQuery.php?id=<?php echo $value['id']; ?>">Apagar</a>
						  </td>
                        </tr>
						<?php  }?>		
                      </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
          
          
          
 </div>


                      
                    </div> 




</div>
       





<?php
include_once("../footer.php");
?>