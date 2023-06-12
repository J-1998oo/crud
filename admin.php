<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if ($_POST['user'] === "Admin") {
        $_SESSION['username'] = "Mohammad";
        $_SESSION['id'] = 1005;
    }
}
if (isset($_SESSION['username'])) {

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Admin Page</title>
    </head>

    <body>
        <div class="container my-5">
            <div class="d-flex justify-content-between align-items-center">
                <h1>List of Cards</h1><a href="/logout.php" class="btn btn-danger" role="button">LogOut</a>
            </div>
            <br>
            <div class="d-flex justify-content-between">
                <a href="/createCard.php" class="btn btn-primary" role="button">New Card</a>
                <a href="/index.php" class="btn btn-success" role="button">Home</a>

            </div>
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Main Image</th>
                        <th>Name Of Image</th>
                        <th>Date Of Posted</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Profile Image</th>
                        <th>Profile Name</th>
                        <th>Name Description</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $serverName = "localhost";
                    $userName = "mohammad";
                    $password = "456987";
                    $database = "colorlibWithCRUD";

                    // Create connection
                    $connection = new mysqli($serverName, $userName, $password, $database);

                    // Check connection
                    if ($connection->connect_error) {
                        die("Connection failed: " . $connection->connect_error);
                    }

                    // Read all rows from database table
                    $sql = "SELECT * FROM cards";
                    $result = $connection->query($sql);

                    if (!$result) {
                        die("Invalid query: " . $connection->error);
                    }

                    // Read data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "
                        <tr>
                            <td>{$row['id']}</td>
                            <td>{$row['main_pic']}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['date_posted']}</td>
                            <td>{$row['title']}</td>
                            <td>{$row['description']}</td>
                            <td>{$row['profile_pic']}</td>
                            <td>{$row['profile_name']}</td>
                            <td>{$row['name_description']}</td>
                            <td>
                                <div class='container d-flex justify-content-between'>
                                    <a href='/editCard.php?id={$row['id']}' class='btn btn-secondary btn-sm'>Edit</a>
                                    <a href='#' data-id='{$row['id']}' onclick='deleteCardID(event)' class='btn btn-danger btn-sm'>Delete</a>
                                </div>

                            </td>
                        </tr>
                    ";
                    }

                    // Close connection
                    $connection->close();
                    ?>
                </tbody>
            </table>
        </div>




        <div class="container my-5">
            <h1>List of Sliders</h1>
            <div class="d-flex justify-content-between">
                <a href="/createSlider.php" class="btn btn-primary" role="button">New Slider</a>
                <a href="/index.php" class="btn btn-success" role="button">Home</a>
            </div>
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Main Image</th>
                        <th>Name Of Image</th>
                        <th>Date Of Posted</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Profile Image</th>
                        <th>Profile Name</th>
                        <th>Name Description</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $serverName = "localhost";
                    $userName = "mohammad";
                    $password = "456987";
                    $database = "colorlibWithCRUD";

                    // Create connection
                    $connection = new mysqli($serverName, $userName, $password, $database);

                    // Check connection
                    if ($connection->connect_error) {
                        die("Connection failed: " . $connection->connect_error);
                    }

                    // Read all rows from database table
                    $sql = "SELECT * FROM slider2";
                    $result = $connection->query($sql);

                    if (!$result) {
                        die("Invalid query: " . $connection->error);
                    }

                    // Read data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "
                        <tr>
                            <td>{$row['id']}</td>
                            <td>{$row['main_pic']}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['date_posted']}</td>
                            <td>{$row['title']}</td>
                            <td>{$row['description']}</td>
                            <td>{$row['profile_pic']}</td>
                            <td>{$row['profile_name']}</td>
                            <td>{$row['name_description']}</td>
                            <td>
                                <div class='container d-flex justify-content-between'>
                                    <a href='/editSlider.php?id={$row['id']}' class='btn btn-secondary btn-sm'>Edit</a>
                                    <a href='#' data-id='{$row['id']}' onclick='deleteSliderID(event)' class='btn btn-danger btn-sm'>Delete</a>
                                </div>

                            </td>
                        </tr>
                    ";
                    }

                    // Close connection
                    $connection->close();
                    ?>
                </tbody>
            </table>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            function deleteCardID(event) {
                let text = "Are you sure you want to delete the row!\nClick OK to confirm.";
                if (confirm(text)) {
                    let id = $(event.target).data('id');
                    window.location.href = "/deleteCard.php?id=" + id;
                    alert("Deleted successfully");
                } else {
                    // Handle cancel action
                }
            }

            function deleteSliderID(event) {
                let text = "Are you sure you want to delete the row!\nClick OK to confirm.";
                if (confirm(text)) {
                    let id = $(event.target).data('id');
                    window.location.href = "/deleteSlider.php?id=" + id;
                    alert("Deleted successfully");
                } else {
                    // Handle cancel action
                }
            }
        </script>
    </body>

    </html>
<?php
} else {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Log In Page</title>
    </head>

    <body>
        <h1 class="mt-5 text-center">Log In Page</h1>
        <div class="container mt-5">
            <form class="mt-5 text-center" method="POST">
                <div class="row mt-5 mb-3">
                    <label class="col-sm-3 mt-5  col-form-label">Log in</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control mt-5" name="user">
                    </div>
                </div>
                <input type="submit" class="btn btn-primary mt-5" value="Login">
            </form>
        </div>
    </body>

    </html>
<?php } ?>