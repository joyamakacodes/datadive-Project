<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>D-Aggregate | Datadive</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
<link rel="manifest" href="favicon_io/site.webmanifest">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<style>
  .modal-body {
    position: relative;
    flex: 1 1 auto;
    padding-top: 1px;
    padding-bottom:1px;
    padding-right:10px;
    padding-left:10px;
    background-color:transparent;
}

.modal-content {
    position: relative;
    display: flex;
    flex-direction: column;
    width: 100%;
    color: var(--bs-modal-color);
    pointer-events: auto;
    background-color: var(--bs-modal-bg);
    background-clip: padding-box;
    border: none;
    border-radius: 0;
    outline: 0;
}
</style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-light" id="backcinto">
        <div class="container-fluid">
          <a id="mylogo" class="navbar-brand" href="#"><img src="images/data_dive_logo.png" alt="image" style="width: 130px;"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <!-- <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li> -->
              <li class="nav-item">
                <!-- <a id="consumer1" class="nav-link" href="#">Consumer Intelligence Insights</a> -->
                <a id="back-rottr" href="consumer.php" class="btn btn-sm " type="button" >Consumer Intelligence Insights</a>
              </li>
              
              <li class="nav-item">
                <!-- <a class="nav-link">Social Intelligence Insights</a> -->
                <a id="back-rottr1" href="https://datadive-d-aggregate-pi7mv.ondigitalocean.app/" class="btn btn-sm " type="button" >Social Intelligence Insights</a>
              </li>
            </ul>
            <form class="d-flex" role="search" style="margin-right: 100px;">
              
                <button id="back-rott"  class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" >Contact Us</button>
            </form>
          </div>
        </div>
      </nav>
    

       <div class="container">
         
                <div class="row">
                    <div class="col-md-12">
                        <h2 style="text-align:center;font-weight: 700;margin-top: 150px;"><span style="color:#0d8744;">DATA</span>DIVE</h2>
                        <p style="text-align:center;">Real-Time Data on Brand performance within the D-Aggregate Audience</p>
                    </div>
                    
                </div>
                
                <div class="row" style="margin-top: 30px;">
                    <div class="col-md-6" id="coal1">
                        <div id="cardme1" class="card" style="width: 18rem;">
                            <span style="text-align: center;
                            padding-top: 20px;"><svg id="consum" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                                <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/>
                              </svg></span>
                            <div class="card-body">
                              <p style="text-align: center;
                              padding-bottom: 30px;" class="card-text">Consumer Intelligence Insights</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-6" id="coal2">

                      <a href="#" style="text-decoration:none;">
                      <div id="cardme2" class="card" style="width: 18rem;">
                            <span style="text-align: center;
                            padding-top: 20px;"><svg id="intell" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                                <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/>
                              </svg></span>
                            <div class="card-body">
                              <p style="text-align: center;
                              padding-bottom: 30px;" class="card-text">Social Intelligence Insights</p>
                            </div>
                          </div>

                      </a>
                        
                    </div>
                </div>
         
       </div>
       <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" style="background-color:transparent;">
      
      <div class="modal-body">
      <a type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
      style="position: absolute;
    left: 760px;
    top: 20px;"
      ></a>
      

        <div class="row">
        
            <div class="col-md-6" style="background-color:#fff">
              <img src="images/Contact.png" alt="" style="width: 350px;
    height: 350px;
    margin-top: 50px;">
            </div>
            <div class="col-md-6" style="background-color:#AFDCC3">

                <div class="">
                <form style="padding-top: 55px;
    padding-bottom: 55px;
    padding-left: 30px;
    padding-right: 30px;">
                   <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Full Name</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    
                  </div>

                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Message</label>
                    <textarea class="form-control" placeholder="Type a Message" style="height: 107px;"></textarea>
                  </div>
                  
                  
                  
                  <a style="
                  background-color: #0d8744;;
    color: #fff;
    padding-top: 9px;
    padding-bottom: 9px;
    padding-right: 120px;
    padding-left: 120px;
    border-radius: 3px;
    position: relative;
    top: 18px;
    left: 15px;
                  
                  ">Submit</a>
                </form>
                </div>
                
            </div>
        </div>
       
     
      
    </div>
  </div>
</div>
  </body>
</html>