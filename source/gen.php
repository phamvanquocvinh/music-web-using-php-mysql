<?php 
    require_once("api/connect.php");

    session_start();
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Player</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script
        type="module"
        src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
        ></script>
        <script
        nomodule
        src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
        ></script>
        <link rel="stylesheet" href="css/player.css" />
        <link rel="stylesheet" href="css/navabar&footer.css">
    </head>
    <body>
        <div class="bg-animation">
            <div id="stars"></div>
            <div id="stars2"></div>
            <div id="stars3"></div>
            <div id="stars4"></div>
        </div>
        <?php
            include_once("nav.php");
        ?>
        

    <main>
        <br>
        <div class="container">
            <div class="row">
            <div class="col-12 col-sm-12 col-md-8 col-lg-8">
               
                <?php
                 //Chọn bài hát theo chuyên mục/thể loại 
                    $genID = $_GET['s'];
                    require_once("api/connect.php");
                    $sql = "SELECT * FROM song where genreID ='$genID'";
                    $result = mysqli_query($conn, $sql);
                    while($row = $result->fetch_assoc()) {
                        $artID = $row['artistID'];
                        $songImg = $row['songImg'];
                        $sql1 = "SELECT artistName FROM artist where artistID = '$artID'";
                        $result1 = mysqli_query($conn, $sql1);
                        while($row1 = $result1->fetch_assoc()){
                            echo "<div id=\"bxh\">";
                                echo "<div class='row'>";
                                    echo '<div class="col-2 col-sm-2 col-md-2 col-lg-2">';
                                    
                                        echo '<a href="player.php?s='.$row['songName'].'">';
                                        echo "<img id=\"imgbxh\" src= $songImg class=\"img-fluid\"><hr>";
                                        
                                        echo '</a>';  
                                    echo "</div>";                                 
                                    echo '<div class="col-10 col-sm-10 col-md-10 col-lg-10">';
                                        echo "<div>";                                          
                                            echo "<h5 style=\"margin-left: 10px\">"; 
                                            echo '<a href="player.php?s='.$row['songName'].'" style="color: white">';                                           
                                            echo $row["songName"];
                                            echo '</a>';
                                            echo "</h5>";                                           
                                            echo "<p style=\"margin-left: 10px;\">";
                                            echo '<a href="artist.php?s='.$row1['artistName'].'" style="color: white">';                                           
                                            echo $row1["artistName"];
                                            echo '</a>';      
                                            echo "</p>";
                                        echo "</div>";
                                    echo "</div>";
                                echo "</div>";
                            echo "</div>";
                        }
                    }   
                ?>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                <br>
                <h3>Charts: Top 10</h3>
                <div id="bxh">
                    <?php
                        require_once("api/bxh.php");
                    ?>
                </div>   
            </div>
        </div>
        
    </div>
    <?php
        include_once("footer.php")
    ?>
    </main>
    </body>
</html>