<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sourcing Request</title>
    <link rel="stylesheet" href="css/form.css">
    <style>
        body{
            background-image: url(images/image.jpeg);
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body>
    <?php
     include_once "dbactions.php";
     if ($_SERVER["REQUEST_METHOD"] == "POST"){
         $projectref= $_POST["projectref"];
        $projectname= $_POST["projectname"];
        $suppliername= $_POST["suppliername"];
        $created= $_POST["created"];
        $deliveryto= $_POST["deliveryto"];
        $sitelocation= $_POST["sitelocation"];
        $budget= $_POST["budget"];
        $phasesalesstage= $_POST["phasesalesstage"];
        $requirementpin= $_POST["requirementpin"];
        $requirementdate= $_POST["requirementdate"];
        $comment= $_POST["comment"];
        $expectedvalidity= $_POST["expectedvalidity"];
        $enduserdetails= $_POST["enduserdetails"];
        $sql="INSERT INTO `user_inputs`(`PROJECT_REF`, `PROJECT_NAME`, `SUPPLIER_NAME`, `CREATED`, `DELIVERY_TO`, `SITE_LOCATION`, `BUDGET`, `PHASE_STAGE`, `REQUIREMENT_PIN`, `REQUIREMENT_DATE`, `COMMENT`, `EXPECTED_VALIDITY`, `ENDUSER_DETAILS`) VALUES 
        ('$projectref','$projectname','$suppliername','$created','$deliveryto','$sitelocation','$budget','$phasesalesstage','$requirementpin','$requirementdate','$comment','$expectedvalidity','$enduserdetails')";
        if(setData($sql)==true){
       
            ?>
            <script>alert("users details updated successfully ");</script>
            <?php
            }
     }
    ?>
    <div class="container">
        <form name="myForm" method="POST">
            <table border="1">
                 <tr>
                    <td class="label">
                       <b> Project Ref:</b>
                    </td>
                    
                    <td class="small-input">
                        <input type="text" name="projectref" id="projectref" required>
                    </td>
    
                    
                    <td class="label">
                        <b> Project Name:</b>
                     </td>
                     <td>
                         <input type="text" name="projectname" id="projectname" required>
                     </td>
    
                 </tr>
                    
                    <tr>
                    <td class="label">
                        <b>Supplier Name:</b>
                    </td>
                    <td colspan="3">
                        <textarea name="suppliername" id="suppliername" style="width: 100%; " required></textarea>
                    <tr>
                    
                        <td class="label">
                           <b>Created:</b>
                        </td>
                      
                        <td>
                            <input type="text" name="created" id="created"  required>
                        </td>
                    
                    </tr>
    
                    <tr>
                    <td class="label">
                       <b> Delivery To:</b>
                    </td>
                    <td>
                        <input type="text" name=" deliveryto" id="deliveryto" required>
                    </td>
                    <td class="label">
                        <b> Site Location:</b>
                     </td>
                     <td>
                         <input type="text" name=" sitelocation" id="sitelocation" required>
                     </td>
                    </tr>
    
                    <tr>
                    <td class="label">
                       <b>Budget</b>
                    </td>
                    <td>
                        <input type="text" name="budget" id="budget" required>
                    </td>
                    <td class="label">
                        <b> Phase/Sales Stage*</b>
                     </td>
                     <td>
                         <input type="text" name="phasesalesstage" id="phasesalesstage" required>
                     </td>
                    </tr>
    
                    <tr>
                    <td class="label">
                       <b> Requirement pin</b>
                    </td>
                    <td colspan="3">
                        <textarea name="requirementpin" id="requirementpin" style="width: 100%;" required></textarea>
                        
                    </td>
                    </tr>
    
                    <tr>
                        <td class="label">
                           <b>Requirement date</b>
                        </td>
                        <td>
                            <input type="text" name="requirementdate" id="requirementdate" required>
                        </td>
                        </tr>
    
    
                        <tr>
                            <td class="label">
                       <b> Comment</b></td>
                                <td colspan="3">
                              <textarea  placeholder="comment here" name="comment" id="comment" style="width: 100%;"></textarea>
                            </td>
                            
                        </tr>
    
    
                       
    
                            <tr>
                                <td class="label">
                                   <b>Expected validity</b>
                                </td>
                                <td>
                                    <input type="text" name=" expectedvalidity" id="expectedvalidity" required>
                                </td>
                                </tr>
    
                                <tr>
                                    <td class="label">
                                       <b> End user Details</b>
                                    </td>
                                    <td colspan="3">
                                        <textarea name="enduserdetails" id="enduserdetails" style="width: 100%;" required></textarea>
                                    </td>
                                    </tr>
    
                                    
                                    <tr>
                                        <td></td>
                                        <td> <input type="button"value="Save"></td>
                                        <td></td>
                                        <td> <input type="Submit"></td>
                                    </tr>
                               
                                  
                           
                
            </table>
        </form>
    </div>
   
    
</body>
</html>