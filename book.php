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
            <li role="presentation" class="active"><a href="book.php">Instructions</a></li>
            <li role="presentation"><a href="book-1.php">1. Select Course</a></li>
            <li role="presentation"><a href="book-2.php">2. Class test date and time</a></li>
            <li role="presentation"><a href="book-3.php">3. Confirm prof info</a></li>
            <li role="presentation"><a href="book-4.php">4. Choose accommodations</a></li>
            <li role="presentation"><a href="book-5.php">5. Additional Requirements</a></li>
            <li role="presentation"><a href="book-6.php">6. Select your test time</a></li>
            <li role="presentation"><a href="book-7.php">7. Confirm and complete</a></li>
        </ul>
    </div>
    <div class="col-md-8">
        <h4>Online Test Booking</h4>
        <p>Welcome to the Online Test Booking wizard. This wizard will guide you through the process of scheduling your test with us. You may abort this process at any time by clicking the 'Cancel' button at the bottom of each page.</p>
        <p>Please be aware that your instructor will receive an email notification with the details of your test booking.</p><br>
        <p>You will need to have the following information handy in order to successfully schedule your test:</p><br>
        <ul>
            <li>The name of the course you want to schedule a test for, and the instructor's name and email address</li>
            <li>The date, start time and duration of the test the class will be writing</li>
            <li>You must be scheduling your test a minimum of seven (7) days before the class is writing</li>
        </ul>
        <br>
        <div style="text-align:right">
            <a href="book-1.php" class="btn btn-primary">Next</a>
            <a href="test.php" class="btn btn-default">Cancel</a>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>