<!DOCTYPE html>
<html lang="en">
  <?php include "partials/shim.php"; include "shom.php";?>
  <body>
  	<?php include 'partials/nav.php'; ?>
    <div class="container">
    	<table class="table table-bordered table-stripped" id="tblExperience">
    		<caption><h3>Our Work Experience </h3></caption>
    		<thead>
    			<th>Date</th>
    			<th>Client</th>
    			<th>Project</th>
    		</thead>
    	</table>
    </div>
    <?php include "partials/footer.php"; ?>
    <script type="text/javascript">
    	$(document).ready(function(){
    		$.get("/data", function(data){
    			console.log(data);
    			if(data!==null)
    			{
    				$.each(data.experience, function(pin, item){
    					$("#tblExperience").append("<tr><td>" + item.date +"</td><td>" + item.client + "</td><td>" + item.project + "</td></tr>");
    					console.log(item.project);
    				});
    			}
    		});
    	})
    </script>
  </body>
</html>
