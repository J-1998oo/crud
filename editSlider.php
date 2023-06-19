<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$serverName = "localhost";
$userName = "mohammad";
$password = "159875320Mohammad123Joker$";
$database = "colorlibWithCRUD";

// Create connection
$connection = new mysqli($serverName, $userName, $password, $database);

if ($connection->connect_errno) {
    die("Database connection failed: " . $connection->connect_error);
}

$id = "";
$mainPic = "";
$name = "";
$title = "";
$description = "";
$profilePic = "";
$profileName = "";
$nameDescription = "";


$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // Get method
    if (!isset($_GET["id"])) {
        header("location:/admin.php");
        exit;
    }

    $id = $_GET["id"];

    $sql = "SELECT * FROM slider2 WHERE id=$id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        header("location:/admin.php");
        exit;
    }

    $mainPic = $row["main_pic"];
    $name = $row["name"];
    $title = $row["title"];
    $description = $row["description"];
    $profilePic = $row["profile_pic"];
    $profileName = $row["profile_name"];
    $nameDescription = $row["name_description"];

} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Post method

    
    $id = $_POST["id"];
    $mainPic = $_POST["main_pic"];
    $name = $_POST["name"];
    $title = $_POST["title"];
    $description = $_POST["description"];
    $profilePic = $_POST["profile_pic"];
    $profileName = $_POST["profile_name"];
    $nameDescription = $_POST["name_description"];

    if (empty($mainPic) || empty($name) || empty($title) || empty($description) || empty($profilePic) || empty($profileName) || empty($nameDescription)) {
        $errorMessage = "All the fields are required";
    } else {
            $updateSql = "UPDATE slider2 SET main_pic = ?, name = ?, title = ?, description = ?, profile_pic = ?, profile_name = ?, name_description = ? WHERE id = ?";
            $updateStmt = $connection->prepare($updateSql);
            $updateStmt->bind_param("sssssssi", $mainPic, $name, $title, $description, $profilePic, $profileName, $nameDescription, $id);
            $result = $updateStmt->execute();

            if (!$result) {
                $errorMessage = "Failed to update the Card information.";
            } else {
                header("location:/admin.php");
                exit;
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>Admin Page</title>
</head>

<body>
    <div class="container my-5">

        <h1>Edit Slide</h1>

        <?php
        if (!empty($errorMessage)) {
            echo "
                <div class='alert alert-warning alert-dismissible fade show'>
                    <strong>$errorMessage</strong>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
                ";
        }
        ?>

<form method="post">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Main Image</label>
                <div class="col-sm-6">
                    <input type="file" class="form-control" name="main_pic" value="<?php echo $mainPic; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Name Of Image</label>
                <div class="col-sm-6">
                    <input type="text" maxlength="50" class="form-control" name="name" value="<?php echo $name; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Title</label>
                <div class="col-sm-6">
                    <input type="text" maxlength="50" class="form-control" name="title" value="<?php echo $title; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Description</label>
                <div class="col-sm-6">
                    <input type="text" maxlength="200" class="form-control" name="description" value="<?php echo $description; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Profile Image</label>
                <div class="col-sm-6">
                    <input type="file"  class="form-control" name="profile_pic" value="<?php echo $profilePic; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Profile Name</label>
                <div class="col-sm-6">
                    <input type="text" maxlength="50" class="form-control" name="profile_name" value="<?php echo $profileName; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Name Description</label>
                <div class="col-sm-6">
                    <input type="text" maxlength="50" class="form-control" name="name_description" value="<?php echo $nameDescription; ?>">
                </div>
            </div>

            <?php
            if (!empty($successMessage)) {
                echo "
                        <div class='row mb-3'>
                            <div class='offset-sm-3 col-sm-6'>
                                <div class='alert alert-success alert-dismissible fade show' role='alert'>
                                    <strong>$successMessage</strong>
                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                </div>
                            </div>
                        </div>
                    ";
            }
            ?>

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a href="/admin.php" class="btn btn-outline-primary" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>