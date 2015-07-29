<?php include('header.php'); ?>
<?php include('header-test.php'); ?>

<div class="row">
    <div class="col-md-12">
        <h1>Upcoming Events</h1>  
        <Br>
        <div style="text-align:right;">
            <a class="btn btn-primary">Refresh</a>
        </div>
            <br>
        <table class="table">
            <tr>
                <td width="60%"><b>Details</b></td>
                <td><b>Date/Time</b></td>
                <td><b>Status</b></td>
                
            </tr>
            <tr>
                <td>Tutoring Appointment</td>
                <td>7/24/2015 - 1:00pm</td>
                <td>Booked</td>
            </tr>
            <tr>
                <td>Intake Appointment</td>
                <td>7/26/2015 - 3:00pm</td>
                <td>Booked</td>
            </tr>            
            <tr>
                <td>Test / Exam</td>
                <td>7/28/2015 - 4:00pm</td>
                <td>Cancelled</td>
            </tr>
        </table>
                        <br>
            <div style="text-align:right;">
                <a class="btn btn-default">Export to PDF</a>
                <a class="btn btn-primary">Refresh</a>
            </div>
    </div>
</div>

<?php include('footer.php'); ?>