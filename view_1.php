<?php 

    require_once("connection.php");
    $query = " select * from cabbage ";
    $result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Groceryshop</title>
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!--/Bootstrap-->
    <!--Main-css-->
    <!--Font-awesom-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!--/Font-awesom-->
    <!--Google-Font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"> 
    <!--/Font-->
    <link rel="stylesheet" href="css/style.css">
    <!--/Main-css-->
</head>
<body>
    
    <!--=========================Header_seaction=========================-->
    <section id="header_section">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark"><!--nav-bar-->
            <div class="container ">
                <a href="index.html"><img src="images/7.png" class="logo_img" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse ml-3 ml-lg-5" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item mr-3">
                        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link" href="about.html">About Us <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact Us<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="view_1.php">Your Order<span class="sr-only">(current)</span></a>
                    </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-design my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </div><!--/container-->
        </nav><!--/nav-bar-->
    </section>
    <!--=========================/Header_seaction=========================-->

    <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table table-hover pb-0 mb-0">
                        <thead>
                            <tr>
                                <th scope="col"> User ID </th>
                                <th scope="col"> Category </th>
                                <th scope="col"> Amount </th>
                                <th scope="col"> Phone Number </th>
                                <th scope="col"> Address </th>
                                <th scope="col"> Edit  </th>
                                <th scope="col"> Delete </th>
                            </tr>
                            </thead>
                            
                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $UserID = $row['User_ID'];
                                        $category = $row['Category'];
                                        $amount = $row['Amount'];
                                        $number = $row['Number'];
                                        $address = $row['Address'];
                            ?>
                            <tbody>
                                    <tr>
                                        <td class="table-primary"><?php echo $UserID ?></td>
                                        <td class="table-secondary"><?php echo $category ?></td>
                                        <td class="table-success"><?php echo $amount ?></td>
                                        <td class="table-danger"><?php echo $number ?></td>
                                        <td class="table-info pl-5 pr-5"><?php echo $address  ?></td>
                                        <td class="ml-0 mr-0 pr-0 pl-2"><a class="btn btn-primary pr-5 pl-5 align-self-center" href="edit_1.php?GetID=<?php echo $UserID ?>">Edit</a></td>
                                        <td class="ml-0 mr-0 pr-0 pl-0"><a class="btn btn-danger pr-5 pl-5 align-self-center" href="delete_1.php?Del=<?php echo $UserID ?>">Delete</a></td>
                                    </tr>
                            </tbody>        
                            <?php 
                                }  
                            ?>                                                                    
                        </table>
                    </div>
                </div>
            </div>
        </div>

    <!--===================Footer-section=========================-->
    <section id="Footer_section" >
        <div class="container footer">
            <div class="row pt-5 pb-5 p-4">
                <div class="col-12 col-md-4">
                    <div class="image">
                        <a href="index.html"><img src="images/7.png" class="logo_img " alt=""></a>
                        <p class="text-muted mt-2">এখন ঘরে বসেই পাচ্ছেন প্রয়োজনিয় সব পণ্য। শাক-সবজি,  থেকে শুরু করে আলু পিয়াজ এমনকি ওষুধও পাচ্ছেন হোম ডেলিভারি। ডেলিভারি ফি মাত্র ৪০ টাকা।</p>
                    </div>
                </div>
                <div class="col-12 col-md-4 pt-3 pt-md-0">
                    <div class="links pl-md-5">
                        <h4 class="text-white">Pages:</h4>
                        <div class="link mb-2 ">
                            <a href="index.html" class="text-decoration-none text-muted">Home</a>
                        </div>
                        <div class="link mb-2">
                            <a href="about.html" class="text-decoration-none text-muted">About Us</a>
                        </div>
                        <div class="link">
                            <a href="contact.html" class="text-decoration-none text-muted">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 pt-3 pt-md-0">
                    <div class="contact">
                        <h4 class="text-white">Contacts:</h4>
                        <p class="text-muted p-0 mb-2">Contact : 01759441662</p>
                        <p class="text-muted p-0 m-0"> Email: ecommerce60min@gmail.com</p>
                        <div class="from-group2 pt-2 d-flex">
                            <input type="text" class="input2" id="myInput" placeholder="Email Address">
                            <button type="submit" class="pink txt-light btn" button onclick="document.getElementById('myInput').value = ''">
                                <i class="fa fa-paper-plane" aria-hidden="true"></i>
                            </button>     
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--===================//Footer-section=========================-->
    
    
    
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="custom.js"></script>
</body>
</html>

