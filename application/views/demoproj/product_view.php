<html xmlns="http://www.w3.org/1999/xhtml">  
   <head>  
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
      <title>Untitled Document</title>  
   </head>  
   <p><a href="<?php echo base_url()?>demo_prj/subcat">ADD SUBCATAGORY</a>&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url()?>demo_prj/product">ADD PRODUCT</a>&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url()?>demo_prj/catview">VIEW CATAGORY</a>&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url()?>demo_prj/subcatview">VIEW SUBCATAGORY</a>&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url()?>demo_prj/productview">VIEW PRODUCT</a>&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url()?>demo_prj/customerview">VIEW CUSTOMER</a></p>
   <table border="14">  
      <tbody>  
         <tr>  
            <td>prod_id</td>  
            <td>subcatagory</td>  
            <td>name</td>  
            <td>quantity</td>
            <td>price</td>  
            <td>Edit</td>
         </tr>  
         <?php  
         foreach($records->result() as $row)  
         {  
            ?><tr>  
            <td><?php echo $row->prod_id;?></td>  
            <td><?php echo $row->subcatagory;?></td> 
            <td><?php echo $row->name;?></td>  
            <td><?php echo $row->quantity;?></td>  
            <td><?php echo $row->price;?></td>  
            <td><a href="<?php echo base_url()?>demo_prj/prodedit/<?php echo $row->prod_id;?>">edit</a></td> 
            </tr>  
         <?php }  
         ?>  
      </tbody>  
   </table>  
<body>  
</body>  
</html>  