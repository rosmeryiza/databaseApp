<?php
	include 'database.php';
	$query = "SELECT * FROM inputs ORDER BY topic";
	$news = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name=viewport content="width=device-width, initial-scale=1">
        
        <title> News Recommendations </title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/main.css">
    </head>

<body>
    <div id="container">

    <h1>News Recommendations</h1>

    <p><a href="index.html">Return to main page.</a></p>
            
            <table class="table">
                <!-- table column headings -->
                <thead>
                    <tr>
                        <th scope="col">ID#</th>
                        <th scope="col">Topic</th>
                        <th scope="col">Source</th>
                        <th scope="col">Platform</th>
                        <th scope="col">Reason</th>
                        <th scope="col">Date</th>
                    </tr>
                </thead>

            <!-- Begin PHP while-loop to display database query results
                with each row enclosed in TD tags.
                Each time it loops, it writes ONE ROW.
                This code depends on the first 5 lines at the start of this file.
                $socks comes from that code.
                NOTE all form controls must have a name= attribute.
                -->
            <?php while ($row = mysqli_fetch_assoc($news)) :  ?>

            <tbody>
                <tr>
                    <th scope="row"><?php echo $row['id']; ?></th>
                        <td><?php echo $row['topic']; ?></td>
                        <td><?php echo $row['source']; ?></td>
                        <td><?php echo $row['platform']; ?></td>
                        <td><?php echo $row['reason']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                    </th>
                </tr><!-- end of table row -->

            <?php endwhile;  ?>
            <!-- end the PHP while-loop
                everything else on this page is normal HTML -->

            </table>

    </div> <!-- close container -->

</body>

</html>