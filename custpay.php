<style>
    table, th, td{
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
    }
    
    tr:hover{
        background-color: LightSalmon;
    }
</style>


<?php
    session_start();

    if(isset($_SESSION['empemail']) && !empty($_SESSION['empemail'])){
        ?>
            
            <br>
            <h2><u><i>CUSTOMER Total Payment</i></u></h2>
            
            <table>
                <thead>
                    <tr>
					    <th>Account number</th>
                        <th>Customer id</th>	                       
                        <th>Total Payment</th>
						
                        
                    </tr>
                </thead>
                
                <tbody>
                    <?php
                        try{
                            
                            $dbcon = new PDO("mysql:host=localhost:3306;dbname=bankdb;","root","");
                            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            
                            $sqlquery=" SELECT a.Account_id,c.customer_id,SUM(p.Payemnt_amount)
										FROM customers AS c 
										JOIN
                                        account AS a 
                                        ON c.customer_id=a.Customerscustomer_id
                                        JOIN
                                        payemnt AS p 
                                        ON a.Account_id=p.AccountAccount_id
                                        GROUP BY a.Account_id,c.customer_id ";
                            
                            try{
                                $returnval=$dbcon->query($sqlquery);
                                
                                $custtable=$returnval->fetchAll();
                                
                                foreach($custtable as $row){
                                    ?>
                                        <tr>
                                            <td><?php echo $row['Account_id'] ?></td>   
                                            <td><?php echo $row['customer_id'] ?></td>   
                                            <td><?php echo $row['SUM(p.Payemnt_amount)'] ?></td>   
                                            											
                                        </tr>
                                    <?php
                                }
                            }
                            catch(PDOException $ex){
                                ?>
                                    <tr>
                                        <td colspan="3">Data read error ... ...</td>    
                                    </tr>
                                <?php
                            }
                            
                        }
                        catch(PDOException $ex){
                            ?>
                                <tr>
                                    <td colspan="3">Data read error ... ...</td>    
                                </tr>
                            <?php
                        }
                    ?>
                </tbody>
            </table>
            
           <br>
		   <button onclick="window.location.href='emphomepage.php';">Back to Homepage</button>
		    
			<br>
           <br>
            <input type="button" value="Logout" id="logoutbtn">

            <script>
               var elm=document.getElementById('logoutbtn');
                elm.addEventListener('click', processlogout);
                
                function processlogout(){
                    window.location.assign('emplogout.php');
                }
                
            </script>

        <?php
    }
    else{
        
        ?>
            <script>
                window.location.assign('emplogin.php');
            </script>
        <?php
    }
?>