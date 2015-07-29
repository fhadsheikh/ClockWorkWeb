<?php include('header.php'); ?>
<?php include('header-test.php'); ?>

<div class="row">
    <div class="col-md-12">
        <h1>Test Booking Wizard</h1>    
    </div>
</div>
<div class="row top-buffer">
    <div class="col-md-3">
        <ul class="nav nav-pills nav-stacked">
            <li role="presentation"><a href="book.php">Instructions</a></li>
            <li role="presentation" class="active"><a href="book-1.php">1. Select Course</a></li>
            <li role="presentation"><a href="book-2.php">2. Class test date and time</a></li>
            <li role="presentation"><a href="book-3.php">3. Confirm prof info</a></li>
            <li role="presentation"><a href="book-4.php">4. Choose accommodations</a></li>
            <li role="presentation"><a href="book-5.php">5. Additional Requirements</a></li>
            <li role="presentation"><a href="book-6.php">6. Select your test time</a></li>
            <li role="presentation"><a href="test.php">7. Confirm and complete</a></li>
        </ul>
    </div>
    <div class="col-md-8">
        <h4>1. Select Course</h4>
        <p>Please select the course you would like to schedule a test for from the list below.</p>
        <br>
        <p><b>Course Info:</b></p>
        <div class="col-md-12">
            
            <br>
            <span>Select Course: </span>
            <input class="form-control" name="Select Course" type="text" list="courses">
            <datalist id="courses">
                <option value="BIO 2145 A"></option>
                <option value="Math 101 B"></option>
            </datalist>
            <br><br><br><br>
            <div style="text-align:right;">
                <a href="book.php" class="btn btn-default">Previous</a>
                <a href="book-2.php" class="btn btn-primary">Next</a>
                <a href="test.php" class="btn btn-default">Cancel</a>
            </div>
        </div>
        
    </div>
</div>

<?php include('footer.php'); ?>