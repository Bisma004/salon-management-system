<?php
include("includes/dbconnection.php");

// Define dates
$today = date("Y-m-d");
$yesterday = date("Y-m-d", strtotime("-1 day"));
$tomorrow = date("Y-m-d", strtotime("+1 day"));

// Create an array of dates
$dates = [
    $yesterday => "Yesterday",
    $today => "Today",
    $tomorrow => "Tomorrow"
];

// Fetch all appointments for yesterday, today, and tomorrow
$query = mysqli_query($con, "
    SELECT 
        a.ID, 
        c.Name AS CustomerName, 
        s.ServiceName, 
        st.Name AS StaffName, 
        a.AppointmentTime,
        a.AppointmentDate
    FROM tblappointments a
    JOIN tblcustomers c ON a.CustomerID = c.ID
    JOIN tblservices s ON a.ServiceID = s.ID
    JOIN tblstaff st ON a.StaffID = st.ID
    WHERE a.AppointmentDate IN ('$yesterday', '$today', '$tomorrow')
    ORDER BY a.AppointmentDate, a.AppointmentTime
");

// Organize results by date
$appointments = [];
while ($row = mysqli_fetch_assoc($query)) {
    $date = $row['AppointmentDate'];
    $appointments[$date][] = $row;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - 3 Days Appointments</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Appointments (Yesterday, Today & Tomorrow)</h2>

    <?php
    foreach ($dates as $date => $label) {
        echo "<h4 class='mt-4'>{$label} - {$date}</h4>";
        if (isset($appointments[$date])) {
            echo '<table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Customer</th>
                            <th>Service</th>
                            <th>Staff</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody>';
            $count = 1;
            foreach ($appointments[$date] as $appt) {
                echo "<tr>
                        <td>{$count}</td>
                        <td>{$appt['CustomerName']}</td>
                        <td>{$appt['ServiceName']}</td>
                        <td>{$appt['StaffName']}</td>
                        <td>{$appt['AppointmentTime']}</td>
                    </tr>";
                $count++;
            }
            echo '</tbody></table>';
        } else {
            echo "<p>No appointments scheduled for {$label}.</p>";
        }
    }
    ?>
</div>
</body>
</html>
