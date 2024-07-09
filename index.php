<?php
include ("incl/header.incl.php");
?>
<h1>Home</h1>
<div class="container">
    <div class="box-container">
        <div class="box" >
            <a href='farmers/index.php'>
                <img src="img/farmer.png">
                <h3>Farmers</h3>
            </a>
        </div>
        <div class="box" >
            <a href='employees/index.php'>
                <img src="img/employees.png">
                <h3>Employees</h3>
            </a>
        </div>
        <div class="box" >
            <a href='delivery/index.php'>
                <img src="img/delivery.png">
                <h3>Deliveries</h3>
            </a>
        </div>
        <div class="box" >
           <a href='reports/index.php'>
                <img src="img/reports.png">
                <h3>Reports</h3>
            </a>
        </div>
        <div class="box" >
            <a href='payment/index.php'>
                <img src="img/payment.png">
                <h3>Payments</h3>
            </a>
        </div>
        <div class="box" >
            <a href='settings/index.php'>
                <img src="img/setting.png">
                <h3>Settings</h3>
            </a>
        </div>
    </div>
</div>

<?php
$footer = 'incl/footer.incl.php';
include ("$footer");
?>