<?php
    if(isset($_POST['btnAdd'])){

        if(empty($err)){
            require('open-connection.php');
            $strsql = "
                        INSERT INTO tbl_products(name, description, price, photo1, photo2)
                        VALUES (?.?.?.?.?)
            ";
        if($stmt = mysqli_prepare($con, $strsql)){
        mysqli_stmt_bind_param($stmt, "sssss",
                                $name, $description,
                            $price, $photo1, $photo2);
            $name = $_POST['textname'];
            $$description = $_POST['textdescription'];
            $price = $_POST['textprice'];
            $photo1 = $_POST['textphoto1'];
            $photo2 = $_POST['textphoto2'];
            mysqli_stmt_execute($stmt);

            header('location:tbl_products.php');
            }    


        else{
            echo 'ERROR Failed to insert Record!' . $strsql;
            mysqli_stmt_execute($stmt);

        }
    require ('close-connection.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/styles.css">
    <title>Document</title>
</head>
<body>
       <div class="container">
        <div class="col-10 mt-5">
            <h1><i class="fa-fa-store"></i>Stevie Wonder Online Shop</h1>
        </div>
    <hr>


    <div class="row justify-content-center">
       <div class="col-md-8">
        <div class="card">
                <header class="card-header">
                    <h4 class="card-title mt-2">Add Product</h4>
                </header>
            <article class="card-body">

                <form method="POST">
                <div class="form-row">
                    <div class="col form-group">
                        <label>Product name</label>
                        <input class="form-control" type="txtname" id="txtname" placeholder="" required>
                    </div>

                <div class="col form-group">
                    <label>Price</label>
                    <input class="form-control" type="Number" name="txtprice" id="txtprice" placeholder="" required>
                </div>

                <div class="col form-group">
                    <label>description</label>
                    <textarea class="form-control" name="txtdescription" id="txtdescription" placeholder="" required>
                </div>

                <div class="col form-groupcol-md-6">
                    <label>photo1</label>
                    <input type="text" name="txtphoto1" id="txtphoto1" placeholder="" required>
                </div>

                <div class="col form-group">
                    <label>photo2</label>
                    <input type="text" name="txtphoto1" id="txtphoto1" placeholder="" required>
                </div>
            </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <dutton type="submit" class="btn- btn-primary btn-block" name="btnAdd">Add Product</dutton>
                    </div>
                <div class="form-group col-md-6">
                    <a href="product.php" class="btn- btn-danger btn-block">Cancel</dutton></a>
                </div>
            </div>
        </form>
        </article>
        </div>
        </div>
    </div>
</div> 

<br></br>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js" integrity="sha512-wV7Yj1alIZDqZFCUQJy85VN+qvEIly93fIQAN7iqDFCPEucLCeNFz4r35FCo9s6WrpdDQPi80xbljXB8Bjtvcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>    

</body>
</html>