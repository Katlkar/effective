<?php
$mykey1=$_REQUEST['key'];
                    
                        include 'conn.php';
                        
                    
                        $ins = mysqli_query($con, "UPDATE q_and_a SET ques_approved=1 where id=$mykey1");
                         if($ins==1)
                        {
                            echo "<script type='text/javascript' >windows.location.href='ques_ans.php';</script>";}
                        
                            
                    ?>