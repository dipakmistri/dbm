<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="../css/bootnavbar.css">
</head>
<body>
    <?php include_once "include/header.php"?>
    <?php include_once "include/menu.php"?>

    <div class="row">
        <?php include_once "include/sidebar.php"?>
        <!-- main content -->
            <div class="col-sm-12 col-md-8">
            <?php 
                if(isset($_GET['p']) && !empty($_GET['p'])){
                    if(file_exists('masters/'.$_GET['p'].'.php')){
                        include_once 'masters/'.$_GET['p'].'.php';
                    }
                }
            ?>
            </div>
     </div>






    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/script.js"></script>

    <script src="../js/bootnavbar.js" ></script>
    <script>
        $(function () {
            $('#bootnavbar').bootnavbar({
              

            });
        })
    </script>
</body>
</html>
