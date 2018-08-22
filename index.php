<?php
//Created By Ankur(AnkDos)
require 'con.php';
if(isset($_POST['search'])){
    
    $source=trim($_POST['src']);
    $destination=trim($_POST['dst']);
    $dat = $_POST['dte'];
    
    $nos = trim($_POST['psgr']);
    
    if($source == $destination){
          echo "<script> alert('Source and Destinations are same.Scroll Up to Re-enter') ; </script>"; 
    }
    else{
    $query=mysqli_query($con,"select * from flights where source = '$source' AND destination = '$destination'");
    $fetch=true;
    }
}

?>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        #adr {
            height: 200vh;
        }

        #dr {
            height: 200vh;
        }
        .options {
            margin-top: 40px;
            margin-left: 400px;
            margin-right: 400px;
        }
        h2 {
            color: #1d2126;
            font: Courier;
            padding-left: 20px;
            padding-top: 25px;
        }
          h1{
              padding-left: 20px;
            padding-top: 25px;
            color:#7cadff;
            }
         
        h5 {
            color: #1d2126;
            font: Courier;
            padding-left: 20px;
        }

        form {
            margin-left: 10px;
        }

        #flights {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;

        }

        #flights td,
        #flights th {
            border: 1px solid #ddd;
            padding: 8px;

        }

        #flights tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #flights tr:hover {
            background-color: #ddd;
            height: 75px;
        }

        #flights th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #404347;
            color: white;

        }
</style>
        </head>
<body>
<center><h1> Hello, Welcome To Ank_trips !</h1></center>

        <section id="adr">
         

        <div class="container-fluid vertical">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-content wow fadeIn">
                        <h2 class="headingl">Search Panel : </h2><br>
                       <center> <h3 style="font-size: 1.2em; color:#9e9e9e;">Fill Out The Form to search the flights</h3></center>
                    </div>
                    <div class="contact-section wow fadeIn">
                        <div class="container">
                            <form method="post">
                                <div class="row">
                                    <div class="col-sm-6 form-line">
                                        <div class="form-group">
                                            <label for="from">From</label>
                                            
                                            <select id="cols" class="form-control" name ="src">
                                                    <option>Select </option>
                                                    <option>RANCHI</option>
                                                    <option>DELHI</option>
                                                    <option>HYDERABAD</option>
                                                    
                                                </select>


                                        </div>
                                        <div class="form-group">
                                            <label for="to">To</label>
                                            
                                                <select id="cols" class="form-control" name ="dst">
                                                    <option>Select </option>
                                                    <option>RANCHI</option>
                                                    <option>DELHI</option>
                                                    <option>HYDERABAD</option>
                                                    
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="dte">Depart Date :</label>
                                            <input type="date" class="form-control"   name="dte">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="description">Number of Passengers</label>
                                            <input class="form-control" id="" placeholder=" Number of Passengers" name="psgr" type="text">
                                    
                                        </div>
                                        <div>
                                            <button type="submit" class="btn btn-default submit" name="search" onclick="location.href='#dr';">
                                                <i class="" aria-hidden="true"></i>Search</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </section>

        <section id="dr">


        <table id="flights">
            <tr>
                <th>Image</th>
                <th>Flight Name</th>
                <th>Depart Time</th>
                <th>Destination Arrival Time</th>
                <th>Total Duration</th>
                <th>Price</th>
                <th>Book Now !</th>
                
            </tr>
            <?php
            $images =array("1.jpg","2.jpg","3.jpg","4.jpg","5.jpg","6.jpg");
            if($fetch==true){
                while($fet=mysqli_fetch_array($query)){    
                $choose = $images[rand(0,5)];
            ?>


                <tr>
                
                <td>
                    <img src="imgs/<?php echo $choose; ?>" height="150px" width="150px" />
                    </td>
                    <td>
                        <?php echo $fet['fl_name']; ?>
                    </td>
                    <td>
                        <?php echo $fet['depart_time']; ?>
                    </td>
                    <td>
                        <?php echo $fet['arr_time']; ?>
                    </td>
                    <td>
                        <?php echo $fet['dur']; ?>
                    </td>
                    <td>
                        <?php echo $fet['price']; ?> * <?php echo $nos; ?> = <?php echo $fet['price']*$nos; ?> 
                    </td>
                   
                    <td>
                        <a class="btn btn-danger " href="?book=<?php echo $fet['flight_id'];?>"> BOOK </a>
                    </td>
                </tr>
     <?php
   }
  }
     ?>
     
     <?php
     if(isset($_GET['book'])){
         $fl_id=$_GET['book'];
         $bi="ANK".rand(100,999);
         
         $query_insert =mysqli_query($con,"insert into bookings(booking_id,flight_id,date,no_p) values ('$bi','$fl_id','$dat','$nos') ");
         if($query_insert){
          echo "<script>alert('Booking Sucessful , Your Booking id is $bi . <br> To Check bookings visit : http://vez.hgf.mybluehost.me/oneindia/booking_sts.php?book_id=YOUR BOOKING ID  '); </script>";
          }
         }
     ?>
      

</table>
        </section>

</body>
</html>
