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
            <li role="presentation"><a href="book-1.php">1. Select Course</a></li>
            <li role="presentation" class="active"><a href="book-2.php">2. Class test date and time</a></li>
            <li role="presentation"><a href="book-3.php">3. Confirm prof info</a></li>
            <li role="presentation"><a href="book-4.php">4. Choose accommodations</a></li>
            <li role="presentation"><a href="book-5.php">5. Additional Requirements</a></li>
            <li role="presentation"><a href="book-6.php">6. Select your test time</a></li>
            <li role="presentation"><a href="test.php">7. Confirm and complete</a></li>
        </ul>
    </div>
    <div class="col-md-8">
        <h4>2. Class test date and time</h4>
        <p>Please specify when the test is taking place. Enter class test duration in minutes.</p>
        <br>
        <p><b>Specify a date and time:</b></p>
        <div class="col-md-12">
            
            <br>
            <span>Select Date:</span>
            <input type="date" class="form-control">
            <br>
            <span>Select Time:</span>
            <input type="time" class="form-control">
            <br>
            <span>Enter Duration: </span>
            <input type="number" class="form-control">
            <br><br><br><br>
            <div style="text-align:right;">
                <a href="book-1.php" class="btn btn-default">Previous</a>
                <a href="book-3.php" class="btn btn-primary">Next</a>
                <a href="test.php" class="btn btn-default">Cancel</a>
            </div>
        </div>
        
    </div>
</div>

<?php include('footer.php'); ?>