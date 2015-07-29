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
            <li role="presentation"><a href="book-2.php">2. Class test date and time</a></li>
            <li role="presentation"><a href="book-3.php">3. Confirm prof info</a></li>
            <li role="presentation"><a href="book-4.php">4. Choose accommodations</a></li>
            <li role="presentation"><a href="book-5.php">5. Additional Requirements</a></li>
            <li role="presentation" class="active"><a href="book-6.php">6. Select your test time</a></li>
            <li role="presentation"><a href="test.php">7. Confirm and complete</a></li>
        </ul>
    </div>
    <div class="col-md-8">
        <h4>6. Select your test time</h4>
        <p>Please select a date and time from the list of available dates and times below. If none of the date/times in the list below will work for you then please contact us to see if alternate arrangements can be made. We can be reached at (ask for assistance with test booking).</p>
        <br>
        <div class="col-md-12">
            
            <h4>Available dates & times:</h4>
            <br>
            <div style="text-align: center; font-size: 16pt;">
            <span>July 29th, 2015 - 10:00AM - 1:00PM</span>
            </div>
            
            <br><br><br><br>
            <div style="text-align:right;">
                <a href="book-5.php" class="btn btn-default">Previous</a>
                <a href="test.php" class="btn btn-primary">Next</a>
                <a href="test.php" class="btn btn-default">Cancel</a>
            </div>
        </div>
        
    </div>
</div>

<?php include('footer.php'); ?>