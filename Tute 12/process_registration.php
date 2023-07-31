<!DOCTYPE html>
<html>
<head>
    <title>Registration Form - Submitted</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 300px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
        }
        .form-group {
            margin-bottom: 10px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
        }
        .form-group span {
            font-weight: normal;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Registration Details</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $gender = $_POST["gender"];
        ?>
        <div class="form-group">
            <label>Name:</label>
            <span><?php echo $name; ?></span>
        </div>
        <div class="form-group">
            <label>Email:</label>
            <span><?php echo $email; ?></span>
        </div>
        <div class="form-group">
            <label>Phone:</label>
            <span><?php echo $phone; ?></span>
        </div>
        <div class="form-group">
            <label>Gender:</label>
            <span><?php echo $gender; ?></span>
        </div>
        <?php
        } else {
            echo "<p>No data submitted.</p>";
        }
        ?>
    </div>
</body>
</html>
