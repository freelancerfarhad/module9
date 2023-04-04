
<?php include_once "inc/header.php";?>
<?php
if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    if ( empty( $name ) || empty( $email ) || empty( $subject ) || empty($message)) {
        die( "Error: All fields are required." );
    }
    if ( !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
        die( "Error: Invalid email format." );
    }
  
            $file = fopen( "users.csv", "a" );
            fputcsv( $file, array( $name, $email,$subject,$message ) );
            fclose( $file );
            header( "Location: success.php" );
            exit();
        
    }

?>
    <section class="blog-area section">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="card">
                    <div class="card-headers">
                        <div class="card-title">
                            <h1 style="font-size: 35px;font-weight: 600;color: #6c6c6c;">Contact Us</h1>
                        </div>
                        </div>
                        <div class="card-body mt-3">
                        <form method="post"action="contact.php">
                            <div class="form-group row">
                                <label for="staticName" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="staticName"name="name" placeholder="Name...."> </div>
                            </div>
                            <div class="form-group row ">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="staticEmail"name="email" placeholder="Email...."> </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputSubject" class="col-sm-2 col-form-label">Subject</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputSubject"name="subject" placeholder="Subject....">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputMessage" class="col-sm-2 col-form-label">Message</label>
                                <div class="col-sm-10">
                                    <textarea name="message" id="inputMessage" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputSubject" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                <input type="submit" class="form-control btn btn-success"  value="Send Message">
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- section -->
    <?php include_once "inc/footer.php";?>