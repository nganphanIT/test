<?php session_start(); ?>

<html>
    <head>
        <title>ConertFigma</title>
        <link rel="stylesheet" href="ConvertFigma.css"> 
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    </head>
    <body>
        <img class="picture-1" src="./2006362 2.png" alt="">
        <div class="date">
            <?php echo date("d")?>/ <?php echo date("m")?>/ 20<?php echo date("y")?>  
        </div>
        <img class="picture-2"  src="./ICI System.png" alt="">
        <div class="time">
            <?php echo  date("h:i");?>  
        </div>
        <img  class="picture-3" src="./Vector-1.png" alt="">        
        <div class="picture-4">
            <i style='font-size:48px; color:white' class='fas'>&#xf1eb;</i>
            <i style='font-size:48px;color:white; margin-left: 50px; ' class='fas'>&#xf240;</i>
        </div>
        <img class="picture-5" src="./setting-icon-500x500 1.png" alt="">      <br> <hr class="line-1">
        <img class="picture-6"  src="./Vector-2.png" alt="">
        <div class="search-container">
            <form action="">
                <input type="text" placeholder="Search..." name="search">
                <!-- <button type="submit"><i class="fa fa-search"></i></button> -->
            </form>
        </div>
        <p class="title">Music</p> 
        <div class="playing">
            <p>
                <span> <b>Tình khúc vàng</b> </span> <br><span>Đan Trường</span>
            </p> 
        </div>
        <table>
            <tr>
                <td>
                    <img  class="singer" src="./image 35.png" alt="">  
                </td>
                <td>
                    <p class="song">Lười yêu - Bảo Anh</p> 
                </td>
            </tr>
            <tr>
                <td>
                    <img  class="singer" src="./image 36.png" alt="">  
                </td>
                <td>
                    <p class="song">Em gái mưa - Hương Tràm</p> 
                </td>
            </tr>
            <tr>
                <td>
                    <img  class="singer" src="./image 37.png" alt="">  
                </td>
                <td>
                    <p class="song">Hoa nở không màu - Hoài Lâm</p> 
                </td>
            </tr>
        </table>
        <div class="vl">
            <img  class="singer-profile" src="./Mask group.png" alt=""> 
            <hr class="line-small">
        </div>
        <hr class="line-2">
    </body>

</html>
