<?php
require_once '../Database_or_Model_Files/Database.php';
$conn = connectsql();

header('Content-Type: application/json');

// CategoriesController এর মতো 'action' রিসিভ করা
$action = $_REQUEST['action'] ?? '';

if ($action === 'save') {
    // ইনপুট রিসিভ করা
    $name     = mysqli_real_escape_string($conn, $_POST['u-name'] ?? '');
    $business = mysqli_real_escape_string($conn, $_POST['u-business'] ?? '');
    $phone    = mysqli_real_escape_string($conn, $_POST['u-phone'] ?? '');
    $role     = mysqli_real_escape_string($conn, $_POST['u-role'] ?? 'Renter');
    $status   = mysqli_real_escape_string($conn, $_POST['u-status'] ?? 'Active');

    if ($name === '' || $phone === '') {
        echo json_encode(['success' => false, 'error' => 'Name and Phone are required.']);
        exit;
    }

    // SQL কুয়েরি (আপনার ডাটাবেস কলাম অনুযায়ী)
    $sql = "INSERT INTO all_users (`Name`, `Business`, `Phone`, `Role`, `Status`, `Total Bookings`, `Total Paid (৳)`) 
            VALUES ('$name', '$business', '$phone', '$role', '$status', 0, 0)";

    if ($conn->query($sql) === TRUE) {
        $id = $conn->insert_id;
        // সেভ হওয়ার পর নতুন রো-টি তুলে এনে রিটার্ন করা
        $res = $conn->query("SELECT * FROM all_users WHERE id=$id");
        $row = $res->fetch_assoc();
        echo json_encode(['success' => true, 'data' => $row]);
    } else {
        echo json_encode(['success' => false, 'error' => $conn->error]);
    }
    $conn->close();
    exit;
}

// ভবিষ্যতে যদি ডিলিট বা এডিট লাগে, এখানে ক্যাটাগরির মতো করে 'action' যোগ করতে পারবেন

echo json_encode(['success' => false, 'error' => 'Invalid action']);