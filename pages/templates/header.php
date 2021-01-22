<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/bootstrap-4.4.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../../assets/bootstrap-5.0.0-beta1-dist/css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>
    <div class="container-fluid layer-navbar">
      <section>
        <div class="row hero-navbar">
          <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand color-navbar icon-navbar" href="../../index.php"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"           aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>           
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto ">
                <li class="nav-item">
                  <a class="nav-link color-navbar" href="../product/index.php">Product <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link color-navbar" href="../portofolio/index.php">Portofolio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link color-navbar" href="../member/index.php">Member</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link color-navbar" href="../partnership/index.php">Partnership</a>
                </li>
              </ul>
            <a href = "../../index.php" class="btn btn-outline-success my-2 my-sm-0 btn-login-home" type="submit">HOME</a>
            </div>
          </nav>
        </div>
      </section>
    </div>
    <div class="container mt-5">
        <div class="row">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
                <?php 
                  $subBreadcrumb = $subBreadcrumb;
                  $subBreadcrumb2 = isset($subBreadcrumb2) ? $subBreadcrumb2 = $subBreadcrumb2 : $subBreadcrumb2 = "";
                  if($subBreadcrumb2 = $subBreadcrumb2) {
                    echo "<li class='breadcrumb-item' aria-current='page'><a href=$prevBreadcrumb>$subBreadcrumb</a></li>";
                    echo "<li class='breadcrumb-item active' aria-current='page'>$subBreadcrumb2</li>";
                  } elseif ($subBreadcrumb = $subBreadcrumb) {
                    echo "<li class='breadcrumb-item active' aria-current='page'>$subBreadcrumb</li>";
                  }
                ?>
            </ol>
            </nav>
        </div>
    </div>
    <script src="../../assets/bootstrap-5.0.0-beta1-dist/js/bootstrap.bundle.min.js"></script>