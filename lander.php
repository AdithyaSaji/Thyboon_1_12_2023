
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Landing page</title>
    <link rel="stylesheet" href="css/lander.css">
    <style>
        *{
    margin: 0;
    padding: 0;
}
.header{
    background-color: aqua;
    height: 150px;
    padding: 10px;
}
.header ul{
    display: inline-block;
    float: right;
}
.header ul li{
    display: inline-block;
    margin-right: 10px;
    font-size: 18px;
    cursor: pointer;
}
.header ul form{
    display: inline-block;
}
.header ul form select{
    
    font-size: 18px;
    width: 200px;
}
.header form input{
    padding: 10px;
    width: 50%;
    border-radius: 15px;
    margin-top: 70px;
    margin-left: 50px;
}
.header a{
    font-size: 18px;
    text-decoration: none;
    cursor: pointer;
}
.clear{
    clear: both;
}
.wrapper .card-middle{
    display: inline-block;
   
    padding: 10px;
    width: 100%;
   
    

}
.card-middle p{
    margin-top: 10px;
    margin-right: 25px;
    float: left;
   
    
}
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <ul>
                <li>Forms</li>
                <li>Order Lists</li>
                <li>Catalogs</li>
                <li>useful Links</li>
                <li>content Groups</li>
                <form>
                    <select name="All" value="All">
                        <option value="all">all</option>
                    </select>
                </form>
               
            </ul>
            <div class="clear"></div>
            <form action="">
                <input type="text" placeholder="What do you need?Start your search here">
                <a href="#">Write a Request</a>
            </form>

        </div>
        <div class="wrapper">
            <div class="card-middle">
                <h3>My Playlist</h3>
                <p><i class="fas fa-file"></i><br>My request</p>
                <p><i class="fas fa-spinner solid "></i><br> In Progress</p>
                <p><i class="fas fa-check mark"></i><br> Completed</p>
            </div>
        </div>  

    </div>
</body>
</html>



<!-- <!DOCTYPE html>// old codes of landing page
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/lander.css">
    <title>Main Page</title>
    <style>
    .card-search button{
        border: none;
        color: black;
        font-weight: bolder;
        font-size: 14px;
        cursor: pointer;
        float: right;
        margin-right: 25px;
        margin-top:10px;
}
    .card-search button:hover{
        font-size: 16px;
}

</style>
</head>
<body>
    <div class="container">
        <div class="card-left">
            <div class="icon">
                <img src="images/icon.jpeg" alt="icon">
            </div>
           
            
        </div>
        <div class="card-search" style=" background-image: url('images/searchbg.jpeg');">
            <form action="">
                <input type="text" placeholder="Search Here!">
                <button>Log out</button>
            </form>
        </div>
        <div class="slider">
        <div class="playlist">
                <h4>Your Playlist</h4>
                <div class="list">
                   
                    <button onclick="window.location.href='form.php';">Requests</button>
                    
                </div>
                <div class="list">
                  
                    <p>In Progress</p>
                </div>
                <div class="list">
                    
                    <p>Completed</p>
                </div>
            </div>
       
        </div>   
    </div>
</body>
</html> -->