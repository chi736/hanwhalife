<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">PHP Example</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        <a class="nav-link" href="connect.php">Connect MySQL</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="container my-3">
        <nav class="alert alert-primary" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Index</li>
            </ol>
        </nav>

        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card">
                    <img src="images/laravel.png" class="card-img-top" alt="Laravel Programming">
                    <div class="card-body">
                        <h5 class="card-title">Laravel Programming</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="images/dot-net.png" class="card-img-top" alt=".NET Programming">
                    <div class="card-body">
                        <h5 class="card-title">.NET Programming</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="images/spring-boot.png" class="card-img-top" alt="Spring Boot Programming">
                    <div class="card-body">
                        <h5 class="card-title">Spring Boot Programming</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="images/angular.png" class="card-img-top" alt="Angular Programming">
                    <div class="card-body">
                        <h5 class="card-title">Angular Programming</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
        </div>

        <?php
        session_start();


        ?>
        <hr>
        <form class="row" method="POST" enctype="multipart/form-data">
            <div class="col">
                <div class="form-floating mb-3">
                    <input value="data" type="text" class="form-control" id="server" placeholder="File name" name="filename">
                    <label for="data">File name</label>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Write file</button>
            </div>
            <div class="col">
            </div>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>


<?php
session_start();

// Kiểm tra xem session đã tồn tại chưa
if (isset($_SESSION['conn'])) {
    // Lấy thông tin kết nối từ session
    $servername = $_SESSION['conn']['servername'];
    $username = $_SESSION['conn']['username'];
    $password = $_SESSION['conn']['password'];
    $dbname = $_SESSION['conn']['dbname'];

    try {
        // Tạo kết nối đến cơ sở dữ liệu
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Lấy danh sách khóa học từ database
        $stmt = $conn->prepare("SELECT * FROM courses"); // Giả định có bảng 'courses' trong DB
        $stmt->execute();
        $courses = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Hiển thị danh sách khóa học
        echo "<h2>Danh sách khóa học:</h2><ul>";
        foreach ($courses as $course) {
            echo "<li>" . $course['name'] . "</li>";
        }
        echo "</ul>";
    } catch (PDOException $e) {
        echo "Lỗi: " . $e->getMessage();
    }
}

// Xử lý khi người dùng nhấn submit để ghi file
if (isset($_POST['submit'])) {
    $filename = $_POST['filename'];

    // Kiểm tra nếu file chưa tồn tại, tạo file và ghi vào
    if (!file_exists($filename)) {
        $file = fopen($filename, "w");
        fwrite($file, "Danh sách khóa học:\n");

        foreach ($courses as $course) {
            fwrite($file, $course['name'] . "\n");
        }

        fclose($file);
        echo "Đã tạo file và ghi dữ liệu!";
    } else {
        echo "File đã tồn tại!";
    }
}
?>