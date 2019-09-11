<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Submit_Report</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>
<body>

    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder"></div>
            <form method="post">
                <h2 class="text-center"><strong>Project Registration</strong></h2>
                <div class="form-group"><input class="form-control"  placeholder="Group Name" name="grp_name" required></div>
                <div class="form-group"><input class="form-control"  name="r_num" placeholder="Enter PNR by seprating with ','" required></div>
                <div class="form-group"><input type="file" name="fileToUpload" required ></div>
                <div class="form-group">
	                <select class="form-control" name="Last">
	                    <optgroup label="Subject">
	                        <option value="Big Data">Big Data</option>
	                        <option value="Free and Open Source  Software Laboratory" selected="">Free and Open Source Software Laboratory</option>
	                        <option value="Advanced_Java_Lab">Advanced Java Lab</option>
	                        <option value="Software Testing">Software testing</option>
	                        <option value="Operating system">Operating system</option>
	                        <option value="Microprocessor">Microprocessor</option>
	                        <option value="Data Structure">Data Structure</option>
	                        <option value=""></option>
	                    </optgroup>
	            	</select>
                </div>
                 <div class="form-group">
          		 <select class="form-control" value="Department" name="Department">
            		<option value="First_Year" selected="">First Year</option>
            		<option value="Second_Year">Second Year</option>
            		<option value="13">Third Year</option>
                    <option value="13">Fourth Year</option>
            		<option value="14">Faculty</option>
        		</select>
    </div>
                <div class="form-group" name="sub"><button class="btn btn-primary btn-block" type="submit">Submit</button></div>

            </form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>