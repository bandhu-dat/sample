store1.php
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>

            h{
                color: maroon;
                margin-left: 400px; 
                text-decoration: underline;
                letter-spacing: 4px;

            }
            p{
                margin-left: 850px;
                letter-spacing: 2px;
                margin-bottom: 100px;

            }
            p.ex {
                margin-left: 70px;
                letter-spacing: 2px;
                margin-bottom: 100px;

            }
            li a.active {
                background-color: #4CAF50;
                color: white;
            }

            li a:hover:not(.active) {
                background-color: #555;
                color: white;
            }
            div{
                padding: 50px 30px 50px 80px;
                background-color: green; 
            }

            body {
                background-color: green; 
            }


        </style>

    </head>
    <body>
    <h>WELCOME TO DEMO SHOPPING STORE</h> 
    <p><a href="<?php echo base_url()?>Demo_prj/index">HOME</a>&nbsp;&nbsp;<a href="<?php echo base_url()?>demo_prj/admin">ADMIN</a>&nbsp;&nbsp;<a href="<?php echo base_url()?>demo_prj/store">STORE</a>&nbsp;&nbsp;<a href="http://localhost/bandhu/contactus.html">CONTACTUS</a></p>
        <tr>    
            <td>
                <ul>
                    <li><a class="active" href="<?php echo base_url()?>Demo_prj/index">HOME</a></li>
                    <li><a href="<?php echo base_url()?>demo_prj/admin">ADMIN</a></li>
                    <li><a href="<?php echo base_url()?>demo_prj/store">STORE</a></li>
                    <li><a href="http://localhost/bandhu/contactus.html">CONTACT US</a></li>
                </ul> 
            </td>
            <td>

            </td>
            <td>
                <div>
                    <p class="ex">
                        THIS IS OUR HOME PAGE OF DEMO  SHOPPING  STORE
                    </p>             
                </div> 
            </td>
        </tr>
    </table>
    <table align="center" style="width:50%">  
        <tr>
        <td><u>Prodct id</u></td>
        <td><u>Subcatagory</u></td>
        <td><u>Product Name</u></td>
        <td><u>Quantity</u></td>
         <td><u>Pricey</u></td>
         <td><u>SHOP NOW</u></td>
        </tr>
        <?php
        foreach ($records->result() as $row) {
            ?>
           <tr>
        <td><?php echo $row->prod_id; ?>     
        </td>   
        <td><?php echo $row->subcatagory; ?>     
        </td>  
         <td><?php echo $row->name; ?>     
        </td>
        <td><?php echo $row->quantity; ?>     
        </td>  
        <td><?php echo $row->price; ?>     
        </td> 
        <td><a href="<?php echo base_url()?>demo_prj/shop/<?php echo $row->prod_id;?>">SHOP NOW </a>
        </td>     
       </tr>
     <?php }
        ?>
   
    </table>

</body>
</html>

