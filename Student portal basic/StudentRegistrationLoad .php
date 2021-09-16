<!DOCTYPE html>  
 <html>  
      <head>  
        <title></title>  
      </head>  
      <body>  
                    
                      <table>
                          <hr><tr>  
                               <th>Name</th> 
                               <th>Email</th> 
                               <th>User Name</th> 
                               <th>Password</th> 
                               <th>Gender</th>  
                               <th>Date of Birth</th>   
                          </tr>
                          </hr> 
                          
                          <?php   
                          $data = file_get_contents("data.json");  
                          $data = json_decode($data, true);  
                          foreach($data as $row)  
                          {  
                               echo '<tr>
                               <td>'.$row["name"].'</td>
                               <td>'.$row["email"].'</td>
                               <td>'.$row["uname"].'</td>
                               <td>'.$row["password"].'</td>
                               <td>'.$row["gender"].'</td>
                                <td>'.$row["dateofbirth"].'</td>
                               </tr>';  
                          }  
                          ?>  
                      </table> 

      </body>  
 </html>  