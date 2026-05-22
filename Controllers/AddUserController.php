<?php

session_start();

include '../functions.php';
include '../config/db.php';

if (isset($_POST['submit'])) {

    $name = test_user($_POST['name']);
    $email = test_user($_POST['email']);
    $phone = test_user($_POST['phone']);
    $experience = test_user($_POST['experience']);
    $description = test_user($_POST['description']);
    $project = test_user($_POST['project']);

    $profile_image = $_FILES['profile_image'];

    // NAME VALIDATION
    if (empty($name)) {
        $_SESSION['name_err'] = 'Name is required';
        header("Location: ../index.php");
        exit();
    }

    if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        $_SESSION['name_err'] = 'Only letters allowed';
        header("Location: ../index.php");
        exit();
    }

    // EMAIL VALIDATION
    if (empty($email)) {
        $_SESSION['email_err'] = 'Email is required';
        header("Location: ../index.php");
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['email_err'] = 'Invalid email format';
        header("Location: ../index.php");
        exit();
    }

    // PHONE VALIDATION
    if (empty($phone)) {
        $_SESSION['phone_err'] = 'Phone number is required';
        header("Location: ../index.php");
        exit();
    }

    // IMAGE VALIDATION
    if (empty($profile_image['name'])) {
        $_SESSION['profile_image_err'] = 'Profile image is required';
        header("Location: ../index.php");
        exit();
    }

    $image_name = $profile_image['name'];
    $file_extension = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));

    $allowed = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

    if (!in_array($file_extension, $allowed)) {
        $_SESSION['profile_image_err'] = 'Invalid image format';
        header("Location: ../index.php");
        exit();
    }

    // IMAGE UPLOAD
    $new_image_name = uniqid('user_') . '.' . $file_extension;
    $image_tmp = $profile_image['tmp_name'];

    $image_url = 'uploads/' . $new_image_name;

    move_uploaded_file($image_tmp, '../uploads/' . $new_image_name);

    // INSERT INTO DATABASE (FIXED)
    $stmt = $conn->prepare("
        INSERT INTO users 
        (Name, Email, Description, Experience, Project, image_name, image_url)
        VALUES (?, ?, ?, ?, ?, ?, ?)
    ");

    $stmt->bind_param(
        "sssssss",
        $name,
        $email,
        $description,
        $experience,
        $project,
        $new_image_name,
        $image_url
    );

    $insert = $stmt->execute();

    if ($insert) {
        $_SESSION['success'] = 'User added successfully';
        header("Location: ../index.php");
        exit();
    }
}
?>