<!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>News Recommender</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">

  </head>

  <body>
      <h1>News Recommender</h1>

      <p>Enter a topic for news (climate change, sports, politics, etc.) and recommend your favorite source.<p>

      <p><a href="index.html">Return to main page.</a></p>

      <div class="container">
        <div class="row">
            <div id ="news" class="col-md"> <!--various possibilities for this class-->
              <form id="newsform" method="post" action="" autocomplete="off">

                <div class="form-group">
                  <label class="form-control-label" for="topic">What is the news topic of your recommendation?</label>
                  <input class="form-control" type="text" name="topic" maxlength="50" id="topic">
                </div> 

                <div class="form-group">
                  <label class="form-control-label" for="source">What is the news source?</label>
                  <input class="form-control" type="text" name="source" maxlength="50" id="source">
                </div> 

                <div class="form-group">
                  <label class="form-control-label" for="platform">What is the platform you recommend? (Mobile, broadcast, paper, etc.)</label>
                  <input class="form-control" type="text" name="platform" maxlength="20" id="platform">
                </div> 

                <div class="form-group">
                  <label class="form-control-label" for="reason">Why do you recommend this source?</label>
                  <input class="form-control" type="text" name="reason" maxlength="180" id="reason">
                </div> 

                <div class="form-group">
                  <button type="submit" value="Submit" class="btn btn-dark">Submit</button>
                </div>

              </form>
            </div> <!-- end column -->
        </div> <!-- end row -->
      </div><!-- container -->

      <!-- empty div -->
    <div id="response"></div>
    
    </div> <!-- close container -->

  <script src="js/enter.js"></script>

</body>

</html>