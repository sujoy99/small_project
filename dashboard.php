<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <!-- custom css link  -->
    <link rel="stylesheet" href="./css/sidebar.css">

    <title>Small Project</title>
  </head>
  <body>
    

    <!-- page layout starts  -->
    <div id="wrapper">
    
        <!-- sidebar starts  -->

        <div id="sidebar_wrapper">
            <div class="sidebar_nav">
                <li><a href="#">Home</a></li>
                <li><a href="#">Prepaid Customer Entry</a></li>
            </div>
        </div>
        <!-- sidebar ends  -->

        <!-- page content starts  -->
        <div id="page_content_wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#" class="btn btn-success" id="menu_toggle">Toggle menu</a>
                        <h1>Dashboard</h1>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel aspernatur amet, fugiat nulla, illum voluptatum quia, atque doloribus itaque assumenda quidem dolore labore voluptatibus! Cumque magnam aut similique a quisquam, veniam quaerat doloremque alias adipisci iste ad nesciunt sapiente molestias ipsam in, sint fugiat. Omnis consectetur fugiat dicta exercitationem tenetur nobis natus ullam sed nostrum alias placeat quia, voluptate, neque ex delectus repellat sunt consequuntur sequi ipsa deserunt. Obcaecati iste illo accusamus perferendis totam facilis vero nisi voluptas maiores repellat, dolores dignissimos praesentium consectetur distinctio dolorum quos quia aspernatur? Vitae doloremque vero voluptatem, quaerat enim recusandae et laborum. Vel alias praesentium consequatur iste consectetur consequuntur eligendi non numquam! Asperiores vitae mollitia, aliquid tempore ipsa ullam quas quod excepturi est aperiam sed magni dignissimos deserunt nihil. Necessitatibus, quaerat quis sed deserunt ipsa laborum aliquid assumenda error consequatur fuga laudantium, fugit, quibusdam quo vitae. Illo aut doloribus autem quam distinctio soluta! Quibusdam repellendus dolorum temporibus, voluptas dolores dolorem accusantium provident magnam inventore magni eaque atque iusto natus qui doloremque! Iusto sequi deleniti ea eaque odit quisquam, consectetur error fuga vero voluptates distinctio tempora illum minima natus! Eius possimus impedit maxime explicabo eligendi quas incidunt expedita nulla id! Odit nobis totam ad rerum?</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- page content ends  -->
    </div>
    <!-- page layout ends  -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- menu toggle script  -->
    <script>
        $("#menu_toggle").click(function(e){
            e.preventDefault();
            $("#wrapper").toggleClass("menuDisplayed");   
        });
    </script>
  </body>
</html>
