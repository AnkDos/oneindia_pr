<?php
//php here
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

        h2 {
            color: #1d2126;
            font: Courier;
            padding-left: 20px;
            padding-top: 25px;
        }
          h1{
              padding-left: 20px;
            padding-top: 25px;
          }
         
        h5 {
            color: #1d2126;
            font: Courier;
            padding-left: 20px;
        }

        form {
            margin-left: 10px;
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

        </section>

</body>
</html>