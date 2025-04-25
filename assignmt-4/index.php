<html>
<body>
<?php
// Numeric Arrays
$studentIds = [101, 102, 103, 104];
$studentAges = [20, 21, 19, 22];

// Associative Arrays
$studentDetails = [
    ["id" => 101, "name" => "Piyush Agawane", "age" => 20, "major" => "Computer Science"],
    ["id" => 102, "name" => "Pranay Ambade", "age" => 21, "major" => "Electrical Engineering"],
    ["id" => 103, "name" => "Chaitanya Asole", "age" => 19, "major" => "Mechanical Engineering"],
    ["id" => 104, "name" => "Ghanshyam Bagadi", "age" => 22, "major" => "Civil Engineering"]
];

// Multi-dimensional Arrays
$studentContactDetails = [
    [
        "id" => 101,
        "email" => "piyush.agawane21@pccoepune.org",
        "phone" => "123-456-7890",
        "address" => "Dhule"
    ],
    [
        "id" => 102,
        "email" => "pranay.ambade21@pccoepune.org",
        "phone" => "987-654-3210",
        "address" => "Gondia"
    ],
    [
        "id" => 103,
        "email" => "chaitanya.asole21@pccopune.org",
        "phone" => "555-555-5555",
        "address" => "Pune"
    ],
    [
        "id" => 104,
        "email" => "ghanshyam.bagadi21@pccopune.org",
        "phone" => "777-777-7777",
        "address" => "Pusad"
    ]
];
?>
<h1>Student Information:</h1>
<?php foreach ($studentDetails as $student): ?>
<div>
    <h2><?= $student['name'] ?></h2>
    <p>ID: <?= $student['id'] ?></p>
    <p>Age: <?= $student['age'] ?></p>
    <p>Major: <?= $student['major'] ?></p>
    <?php foreach ($studentContactDetails as $contact): ?>
        <?php if ($contact['id'] == $student['id']): ?>
            <p>Email: <?= $contact['email'] ?></p>
            <p>Phone: <?= $contact['phone'] ?></p>
            <p>Address: <?= $contact['address'] ?></p>
        <?php endif; ?>
    <?php endforeach; ?>
</div>
<?php endforeach; ?>
</body>
</html>
