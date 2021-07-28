<table border="1" id="example" class="table table-striped table-bordered" cellspacing="0"
                        style="width:50%">
                        <thead>
                           <!--  <tr>
                                <th scope="col">Document Type</th>
                                <th scope="col">Document Path</th>
                                <th scope="col">Action</th>
                            </tr> -->
                        </thead>
                        <tbody>
                            <?php
			 	$sqlrec = "SELECT * FROM customer_claim  WHERE customer_id='$_SESSION[customer_id]'";
				$qsqlrec = mysqli_query($con,$sqlrec);
				while($rs = mysqli_fetch_array($qsqlrec))
				{
                	echo " <tr>
						  <td>&nbsp;$rs[document_type]</td>
						  <td>&nbsp;<a href='docs/$rs[document_path]' download>Download</a></td>
						  <td>&nbsp; <a href='custdoc.php?delid=$rs[cust_doc_id]' onclick='return deleteconfirm()' class='btn btn-danger' >Delete</a></td>
						</tr>";
				}
				?>
                        </tbody>
                    </table>
                    <hr />
                    <table border="1" id="example" class="table table-striped table-bordered" cellspacing="0"
                        style="width:50%">
                        <thead>
                            <tr>
                                <th scope="col">Claim Status</th>
                        
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                $sqlrec = "SELECT * FROM customer_claim  WHERE customer_id='$_SESSION[customer_id]'";
                $qsqlrec = mysqli_query($con,$sqlrec);
                while($rs = mysqli_fetch_array($qsqlrec))
                {
                    echo " <tr>
                          <td>&nbsp;$rs[claim_status]</td>
                          
                        </tr>";
                }
                ?>
                        </tbody>
                    </table>