<?php ini_set('max_execution_time', 0);?>
<html>
<head>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="/kisankraft.org/src/js/sorttable.js"></script>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

	<style>
	tr:nth-child(even) {
    background-color: #99ccb7;
                       }
	
	.sortable{border-top:#CCCCCC 4px solid; width:100%;font-size:15px;}
	.sortable th {padding:5px 20px; background: #F0F0F0;vertical-align:top;} 
	.sortable td {padding:5px 20px; border-bottom: #F0F0F0 1px solid;vertical-align:top;} 
	</style>
<body bgcolor="">
<?php 
include 'header.php';
include '/config/db.php';
?>
<div class="container" style="margin-left:30%; width:60%; background-color:lightblue">
<div class="row">
<div class="span3 hidden-phone"></div>
<div class="span6" id="form-login">
<form class="form-horizontal well" action="importdiscount.php" method="post" name="upload_excel" enctype="multipart/form-data">
<fieldset>
<legend>Import CSV/Excel file</legend>
<div class="control-group">
<div class="control-label">
<label>CSV/Excel File:</label>
</div>
<div class="controls">
<input type="file" name="file" id="file" class="input-large">
<button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Upload</button>
</div>
</div>

<div class="control-group">
<div class="controls">
<a href="/kisankraft.org/sample/sample1.csv"> Download Sample File</a>
</div>
</div>
</fieldset>
</form>
</div>
<div class="span3 hidden-phone"></div>
</div>
</div>
<div>
</div>
<hr>
<div style="margin-left:22%; width:75%;">
<?php 
$results_per_page = 100;
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * $results_per_page;
$sql = "SELECT * from Credit_td LIMIT ".$start_from.",".$results_per_page;
$result = mysqli_query($conn,$sql);
//include '/test/index.php';
//include '/search.php';
if(!isset($_POST["go"]) ){
?>
<table class="sortable">
          <thead>
        <tr class="d0">
          <th width="20%"><span>Date</span></th>  
          <th width="50%"><span> Dealer Name</span></th>
                
          <th width="25%"><span>Item Name</span></th>
          <th width="20%"><span>Voucher_type</span></th>  
           <th width="25%"><span>QTY</span></th>
           <th width="25%"><span>Amount</span></th>	  
          <th width="25%"><span>State</span></th>
          <th width="25%"><span>District</span></th>
          <th width="25%"><span>Executive</span></th>
          <th width="25%"><span>ASM</span></th>
        </tr>
      </thead>
    <tbody>
	<?php
		while($row = mysqli_fetch_array($result)) {
		    //print_r($row);
	?>
        <tr class="d1">
            
			
			<td><?php echo  $row["Date"]; ?></td>
			<td><?php echo  $data= str_replace("_", "'", $row["party_name"]); ?></td>
			<td><?php echo $data1= str_replace("_", "'", $row["item_name"]); ?></td>
			<td><?php echo $row["vourture_type"];  ?></td>
			<td><?php echo $row["quantity"];  ?></td>
			<td><?php echo $row["amount"]; ?></a> </td>
			<td><?php $d=$row["party_name"];
			$sqls = "SELECT * from Dealermst where D_name='$d' ";
			//echo $sqls;
            $results = mysqli_query($conn,$sqls);
            while($rows = mysqli_fetch_array($results)) {
                $district=$rows["D_distict"];
                $state=$rows["D_state"];
            } 
            $sqls1 = "SELECT * from Excutivemst where State='$state' AND District= '$district'";
            $results1 = mysqli_query($conn,$sqls1);
            while($rows1 = mysqli_fetch_array($results1)) {
           
                $exec=$rows1["Exexutive"];
                $ASM=$rows1["ASM"];
            }
            echo $state;
            ?></td>
            <td><?php echo $district;?></td>
            <td><?php echo $exec;?></td>
            <td><?php echo $ASM;?></td>
			

		</tr>
   <?php
		}
   ?>
   <tbody>
  </table><?php }?>
  <br><br><br>
</div>
</body>
</head>
</html>
<hr>
<?php
$sql = "SELECT COUNT(Date) AS total FROM Credit_td";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$total_pages = ceil($row["total"] / $results_per_page);

for ($i=1; $i<=$total_pages; $i++) {
    ?>  <a href="/kisankraft.org/discountupload.php?page=<?php echo $i;?>"><?php echo $i;?></a><?php 
    
    //echo "<a href=''?page=".$i."'>".$i."</a> ";
};


//echo $_POST["go"];
if($_POST["go"]=="Validate SKU"){
    $sql = "SELECT * from Salesmst ";
    $result = mysqli_query($conn,$sql);
    ?>
     <div style="width:20%; float :left ; margin-left: 30%">
     <a href="#">Download report</a>
                <table class="sortable" style="with:40%">
                <tr>
                <th>Item Name</th>
                </tr>
    <?php 
    while($row = mysqli_fetch_array($result)) {
        $name=($row['Item_name']);
        $sql_u = "SELECT * FROM Itemmst WHERE Item_name='$name'";
        $res_u = mysqli_query($conn, $sql_u);        
        if (mysqli_num_rows($res_u) > 0) {
           // echo "present";
     
        }else{
                ?>
               
                <tr>
                <td><?php echo $name; ?></td>
                </tr>
               
                <?php 
        }}?> </table>
                </div>
                <?php 
        }
?>

<?php

if($_POST["go"]=="Validate user"){
    $sql = "SELECT DISTINCT Dealer_name from Salesmst ";
    $result = mysqli_query($conn,$sql);
    ?> <div style="width:20%; float :left ; margin-left: 30%">
     <a href="#">Download report</a>
                <table class="sortable" style="with:40%">
                <tr>
                <th styel="width:2%">Dealer Name</th>
                </tr><?php 
                while($row = mysqli_fetch_array($result)) {
        $name=($row['Dealer_name']);
        $sql_u = "SELECT * FROM Dealermst WHERE D_name='$name'";
        $res_u = mysqli_query($conn, $sql_u);        
        if (mysqli_num_rows($res_u) > 0) {
            //echo "present";
     
        }else{
                ?>
                <tr>
                <td><?php echo $name; ?></td>
                </tr>
                 <?php 
        }}?>
         </table>
                </div>
        <?php 
        }
   

?>