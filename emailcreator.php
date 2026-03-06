<?php

$firstname  = $_POST['firstname'] ?? '';
$lastname   = $_POST['lastname'] ?? '';
$department = $_POST['department'] ?? '';

$first_part  = strtolower(substr($firstname, 0, 4));
$last_part   = strtolower(substr($lastname,  0, 4));
$year_short  = substr(date("Y"), -2);
$dept_code   = strtoupper($department);

$email = $dept_code . '_' . $first_part . $last_part . $year_short . '@jbu.edu';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Generated</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f0f9ff;
            margin: 0;
            padding: 40px 20px;
            color: #1e293b;
        }
        .card {
            max-width: 520px;
            margin: 0 auto;
            background: white;
            padding: 45px 35px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(30,64,175,0.15);
            text-align: center;
            border: 1px solid #bfdbfe;
        }
        h1 {
            color: #1e40af;
            margin-bottom: 12px;
        }
        h1::after {
            content: '';
            display: block;
            width: 70px;
            height: 5px;
            background: #facc15;
            margin: 14px auto 0;
            border-radius: 3px;
        }
        .email {
            font-size: 1.8rem;
            font-weight: bold;
            color: #1e40af;
            background: #eff6ff;
            padding: 20px;
            border-radius: 10px;
            margin: 30px 0;
            word-break: break-all;
            border: 2px solid #facc15;
        }
        .back {
            display: inline-block;
            margin-top: 35px;
            padding: 14px 32px;
            background: #1e40af;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
        }
        .back:hover {
            background: #1e293b;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Generated Email</h1>
        <div class="email"><?php echo htmlspecialchars($email); ?></div>
        <a href="admission.html" class="back">Back</a>
    </div>
</body>
</html>
