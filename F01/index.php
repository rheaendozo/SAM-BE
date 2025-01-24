<?php
include('connect.php');

$sql = "SELECT * FROM athletes";
$result = $conn->query($sql);

$sql_stories = "SELECT * FROM stories";
$result_stories = $conn->query($sql_stories);

$sql_games = "SELECT * FROM games";
$result_games = $conn->query($sql_games);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>The Olympic Spirit</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" />
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet" />
  <link rel="icon" href="images/logo2.png" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary shadow">
    <div class="container-fluid">
      <img src="images/logo1.png" style="width: 60px" />
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-5 mb-lg-0">
          <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
          <li class="nav-item"><a class="nav-link active" href="#athletes">Athletes</a></li>
          <li class="nav-item"><a class="nav-link active" href="#stories">Stories</a></li>
          <li class="nav-item"><a class="nav-link active" href="#games">Games</a></li>
          <li class="nav-item"><a class="nav-link active" href="#about">About</a></li>
        </ul>
        <form class="d-flex" role="search">
          <button class="btn btn-outline-success" type="submit">Sign In</button>
        </form>
      </div>
    </div>
  </nav>

  <div class="container" id="home">
    <h1 style="font-size: 70px">THE OLYMPIC SPIRIT</h1>
    <p style="font-family: 'Poppins'; font-weight: italic; font-size: 30px">
      The Olympic Spirit embodies the values of excellence, friendship, and respect, inspiring athletes to push their
      boundaries and achieve greatness. This platform celebrates the human spirit through the inspiring journeys of
      Olympic athletes. Explore their triumphs, setbacks, and unwavering dedication as they strive for personal bests
      and embody the true essence of the Olympic Movement.
    </p>
  </div>

  <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div style="position: relative;">
          <img
            src="https://img.olympics.com/images/image/private/t_16-9_760/f_auto/v1734268126/primary/yom8asljot1k4d6qbeje"
            class="d-block w-100" style="height: 800px; object-fit: cover;">
          <div class="overlay"
            style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.4);"></div>
          <div class="carousel-caption d-none d-md-block"
            style="position: absolute; bottom: 20px; left: 20px; right: 20px; background: rgba(0, 0, 0, 0.6); border-radius: 10px; padding: 20px;">
            <h5 class="text-white font-weight-bold" style="font-size: 2rem;">Inspiring Moments</h5>
            <p class="text-white" style="font-size: 1.2rem;">Experience the thrill of Olympic competition.</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div style="position: relative;">
          <img
            src="https://img.olympics.com/images/image/private/t_16-9_960/f_auto/v1538355600/primary/vu66jfwgjsubkxkjfq1p"
            class="d-block w-100" style="height: 800px; object-fit: cover;">
          <div class="overlay"
            style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.4);"></div>
          <div class="carousel-caption d-none d-md-block"
            style="position: absolute; bottom: 20px; left: 20px; right: 20px; background: rgba(0, 0, 0, 0.6); border-radius: 10px; padding: 20px;">
            <h5 class="text-white font-weight-bold" style="font-size: 2rem;">Unbreakable Spirit</h5>
            <p class="text-white" style="font-size: 1.2rem;">Witness the dedication of our athletes.</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div style="position: relative;">
          <img
            src="https://img.olympics.com/images/image/private/t_16-9_960/f_auto/v1538355600/primary/sgbcpd09vbigfmzeiiyx"
            class="d-block w-100" style="height: 800px; object-fit: cover;">
          <div class="overlay"
            style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.4);"></div>
          <div class="carousel-caption d-none d-md-block"
            style="position: absolute; bottom: 20px; left: 20px; right: 20px; background: rgba(0, 0, 0, 0.6); border-radius: 10px; padding: 20px;">
            <h5 class="text-white font-weight-bold" style="font-size: 2rem;">Chasing Greatness</h5>
            <p class="text-white" style="font-size: 1.2rem;">Every athlete has a story to tell.</p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class=" carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div id="athletes">
    <h1 style="text-align:center; font-size:70px;">FEATURED ATHLETES</h1>
    <div class="container">
      <div class="row">
        <?php
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            $athlete_id = $row['athlete_id'];
            $name = $row['name'];
            $country = $row['country'];
            $sport = $row['sport'];
            $image = $row['image'];

            echo "
              <div class='col-md-3 mb-4'>
                <div class='card' style='font-family: Poppins;'> 
                  <img src='$image' class='card-img-top' alt='Image for $name'>
                  <div class='card-body'>
                    <h5 class='card-title'>$name</h5>
                    <p class='card-text'>$country, $sport</p>
                  </div>
                </div>
              </div>
            ";
          }
        } else {
          echo "<p>No athletes found.</p>";
        }
        ?>
      </div>
    </div>
  </div>

  <div id="stories">
    <h1 style="text-align:center; font-size:70px">INSPIRING STORIES</h1>
    <div class="container">
      <div class="row">
        <?php
        if ($result_stories->num_rows > 0) {
          while ($row = $result_stories->fetch_assoc()) {
            $story_id = $row['story_id'];
            $athlete_id = $row['athlete_id'];
            $title = $row['title'];
            $content = $row['content'];
            $image = $row['image'];

            echo "
              <div class='col-md-3 mb-4'>
                <div class='card' style='font-family: Poppins;'> 
                  <img src='$image' class='card-img-top' alt='Image for $title'>
                  <div class='card-body'>
                    <h5 class='card-title'>$title</h5>
                    <p class='card-text'>$content</p>
                  </div>
                </div>
              </div>
            ";
          }
        } else {
          echo "<p>No stories found.</p>";
        }
        ?>
      </div>
    </div>
  </div>

  <div id="games">
    <h1 style="text-align:center;font-size:70px">UPCOMING GAMES</h1>
    <div style="text-align: center;">
      <img src="images/italy.png" alt="Italy" style="width: 100%; height: auto; padding-bottom: 50px;">
    </div>
    <div class="container">
      <div class="row">
        <?php
        if ($result_games->num_rows > 0) {
          while ($row = $result_games->fetch_assoc()) {
            $gameID = $row['gameID'];
            $Year = $row['Year'];
            $Season = $row['Season'];
            $City = $row['City'];
            $Country = $row['Country'];
            $Image = $row['Image'];

            echo "
              <div class='col-md-3 mb-4'>
                <div class='card' style='font-family: Poppins;'>
                  <img src='$Image' class='card-img-top' alt='Game Image'/>
                  <div class='card-body'>
                    <h5 class='card-title'>$Year - $City, $Country</h5>
                    <p class='card-text'>$Season</p>
                  </div>
                </div>
              </div>
            ";
          }
        } else {
          echo "<p>No upcoming games found.</p>";
        }
        ?>
      </div>
    </div>
  </div>

  <footer id="about" class="bg-black text-white py-4 mt-5">
    <div class="container-fluid px-0">
      <div class="text-center mb-3">
        <img src="images/logo3.png" style="width: 200px" />
        <hr class="my-3" style="border-top: 1px solid white; width: 80%; margin: auto" />
      </div>

      <div class="text-center mb-3">
        <a href="#" class="text-white" style="text-decoration: none">Privacy Policy</a> |
        <a href="#" class="text-white" style="text-decoration: none">Terms of Use</a>
      </div>

      <div class="text-center mb-3">
        <a href="#" class="text-white mx-2"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="text-white mx-2"><i class="fab fa-twitter"></i></a>
        <a href="#" class="text-white mx-2"><i class="fab fa-instagram"></i></a>
        <a href="#" class="text-white mx-2"><i class="fab fa-youtube"></i></a>
      </div>
    </div>
    <div class="text-center mb-3">
      <p>&copy; 2025 The Olympic Spirit. All Rights Reserved.</p>
    </div>
  </footer>

  <script>
    document.querySelectorAll('.navbar-nav a').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const targetId = this.getAttribute('href').substring(1);
        const targetElement = document.getElementById(targetId);
        targetElement.scrollIntoView({ behavior: 'smooth' });
      });
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</body>

</html>

<?php
$conn->close(); // Close the connection
?>