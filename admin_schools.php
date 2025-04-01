<?php
session_start();
require_once 'include/sheets.php';

// Initialize error message array
$errors = [];
$success = false;

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action'])) {
        if ($_POST['action'] === 'add') {
            // Validate inputs
            if (empty($_POST['school_name']) || empty($_POST['city']) || empty($_POST['state'])) {
                $errors[] = "All fields are required.";
            } else {
                $newSchool = [
                    $_POST['school_name'],
                    $_POST['city'],
                    $_POST['state']
                ];
                if (addSchool($newSchool)) {
                    $success = true;
                } else {
                    $errors[] = "Failed to add school. Please try again.";
                }
            }
        } elseif ($_POST['action'] === 'delete' && isset($_POST['index'])) {
            if (deleteSchool($_POST['index'])) {
                $success = true;
            } else {
                $errors[] = "Failed to delete school. Please try again.";
            }
        }
    }
}

// Redirect to prevent form resubmission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && empty($errors)) {
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Schools - Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .admin-wrapper {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0,0,0,0.05);
            padding: 20px;
            margin-top: 20px;
        }
        .school-card {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 15px;
            transition: all 0.3s ease;
        }
        .school-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .btn-add {
            background: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: all 0.3s ease;
        }
        .btn-add:hover {
            background: #218838;
            transform: translateY(-2px);
        }
        .btn-delete {
            background: #dc3545;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            transition: all 0.3s ease;
        }
        .btn-delete:hover {
            background: #c82333;
        }
        .alert {
            margin-bottom: 20px;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container py-5">
        <h1 class="mb-4">Manage Schools</h1>
        
        <?php if (!empty($errors)): ?>
            <div class="alert alert-danger">
                <?php foreach ($errors as $error): ?>
                    <p class="mb-0"><?php echo htmlspecialchars($error); ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <?php if ($success): ?>
            <div class="alert alert-success">
                Operation completed successfully!
            </div>
        <?php endif; ?>
        
        <!-- Add School Form -->
        <div class="admin-wrapper mb-4">
            <h3 class="mb-3">Add New School</h3>
            <form method="POST" class="row g-3">
                <input type="hidden" name="action" value="add">
                <div class="col-md-4">
                    <input type="text" class="form-control" name="school_name" placeholder="School Name" required>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="city" placeholder="City" required>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="state" placeholder="State" required>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-add">
                        <i class="fas fa-plus me-2"></i>Add School
                    </button>
                </div>
            </form>
        </div>

        <!-- Schools List -->
        <div class="admin-wrapper">
            <h3 class="mb-3">Current Schools</h3>
            <?php
            $schools = getSchoolsList();
            if (!empty($schools)) {
                foreach ($schools as $index => $school) {
                    echo '<div class="school-card">';
                    echo '<div class="d-flex justify-content-between align-items-center">';
                    echo '<div>';
                    echo '<h5 class="mb-1">' . htmlspecialchars($school[0]) . '</h5>';
                    echo '<p class="mb-0 text-muted">' . htmlspecialchars($school[1]) . ', ' . htmlspecialchars($school[2]) . '</p>';
                    echo '</div>';
                    echo '<form method="POST" style="display: inline;">';
                    echo '<input type="hidden" name="action" value="delete">';
                    echo '<input type="hidden" name="index" value="' . $index . '">';
                    echo '<button type="submit" class="btn btn-delete" onclick="return confirm(\'Are you sure you want to delete this school?\')">';
                    echo '<i class="fas fa-trash"></i>';
                    echo '</button>';
                    echo '</form>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo '<p class="text-center text-muted">No schools found</p>';
            }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 