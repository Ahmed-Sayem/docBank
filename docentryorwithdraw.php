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
            <h2><u><i>Document entry/withdraw</i></u></h2>
            
            <table>
                <thead>
                    <tr>
                        <th>Account ID</th>
                        <th>Document number</th>
                        <th>Entry date</th>
                        <th>Withdraw date</th>					                       
                    </tr>
                </thead>
                
                <tbody>
                    <?php
                        try{
                            
                            $dbcon = new PDO("mysql:host=localhost:3306;dbname=bankdb;","root","");
                            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            
                            $sqlquery="SELECT DocumentAccountAccount_id,DocumentDocument_number,Entry_date,Withdraw_date FROM `document entry/withdraw`";
                            
                            try{
                                $returnval=$dbcon->query($sqlquery);
                                
                                $ctable=$returnval->fetchAll();
                                
                                foreach($ctable as $row){
                                    ?>
                                        <tr>
                                            <td><?php echo $row['DocumentAccountAccount_id'] ?></td>   
                                            <td><?php echo $row['DocumentDocument_number'] ?></td>   
                                            <td><?php echo $row['Entry_date'] ?></td>   
                                            <td><?php echo $row['Withdraw_date'] ?></td> 
											 											
                                        </tr>
                                    <?php
                                }
                            }
                            catch(PDOException $ex){
                                ?>
                                    <tr>
                                        <td colspan="4">Data read error ... ...</td>    
                                    </tr>
                                <?php
                            }
                            
                        }
                        catch(PDOException $ex){
                            ?>
                                <tr>
                                    <td colspan="4">Data read error ... ...</td>    
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