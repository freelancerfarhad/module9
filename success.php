<?php include_once "inc/header.php";?>
  <div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 pt-5">
        <div class="card">
            <div class="card-body">
            <h4 style="color:green;background:#5cb85a3b;padding-left:8;">Welcome to Contact by admin...! Thank-you</h4>
            
            <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject </th>
                    <th>Message </th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (($handle = fopen("users.csv", "r")) !== FALSE) {
                    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                        echo "<tr>";
                        echo "<td>" . $data[0] . "</td>";
                        echo "<td>" . $data[1] . "</td>";
                        echo "<td>". $data[2] . "</td>";
                        echo "<td>". $data[3] . "</td>";
                        echo "</tr>";
                    }
                    fclose($handle);
                }
                ?>
            </tbody>
        </table>
      
            </div>
        </div>
        </div>
        <div class="col-md-2"></div>
    </div>
  </div>
    <?php include_once "inc/footer.php";?>