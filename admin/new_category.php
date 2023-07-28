<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/admin.css" />
    <title>Blog WebProg</title>
</head>

<body>
    <!-- Header -->
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="index.php">WebProg.ir</a>

        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="logout.php">خروج</a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">

            <!-- Sidebar -->
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">
                                <i class="fas fa-home"></i>
                                داشبورد
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="post.php">
                                <i class="fas fa-file-image"></i>
                                مقالات
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="category.php">
                                <i class="fas fa-folder-open"></i>
                                دسته بندی
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="comment.php">
                                <i class="fas fa-comments"></i>
                                کامنت
                            </a>
                        </li>

                    </ul>

                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

                <div class="d-flex justify-content-between mt-5">
                    <h3>ایجاد دسته</h3>
                </div>
                <hr>
                <form method="post">
                    <div class="form-group">
                        <label for="category">عنوان : </label>
                        <input type="text" class="form-control" name="title" id="title">
                        <small class="form-text text-muted">نام دسته را وارد کنید.</small>
                    </div>

                    <button type="submit" name="add_category" class="btn btn-outline-primary">ایجاد</button>
                </form>

            </main>

        </div>

    </div>

</body>

</html>