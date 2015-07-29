<?php include('header.php'); ?>
<?php include('header-test.php'); ?>

<div class="row">
    <div class="col-md-12">
        <h1>Accommodation Letters</h1>  
        <div class="row top-buffer">
            <div class="col-md-7"></div>
            <div class="col-md-5" style="text-align: right;">
                <form class="form-inline">
                    <label>Session:
                        <input class="form-control" name="Select Course" type="text" list="courses">
                        <datalist id="courses">
                            <option value="Summer 2015"></option>
                            <option value="Fall 2015"></option>
                        </datalist>
                    </label>
            <input type="button" class="btn btn-primary" value="Refresh">
       
                </form>
            </div>
        
        </div>
        <div class="row top-buffer">
            <p>Click on the 'View accommodations' link beside the course to view the accommodations letter for that course.</p>
            <table class="table">
            <tr>
                <td width="60%"><b>Course</b></td>
                <td><b>Date last viewed by you</b></td>
                <td><b>Review</b></td>
                
            </tr>
            <tr>
                <td>BIO 2145 A</td>
                <td>7/24/2015</td>
                <td><span class="btn btn-primary">View Accommodations</span></td>
            </tr>
            <tr>
                <td>Math 101 B</td>
                <td>7/26/2015</td>
                <td><span class="btn btn-primary">View Accommodations</span></td>
            </tr>            
        </table>
        
        </div>
 
        
                        <br>
    </div>
</div>

<?php include('footer.php'); ?>