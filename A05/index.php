<?php
include('connect.php');

$sql_islands = "SELECT * FROM `islandsofpersonality` ORDER BY `islandOfPersonalityID` ASC";
$result_islands = $conn->query($sql_islands);

if (!$result_islands) {
    die("Error in query: " . $conn->error);
}

$sql_contents = "SELECT * FROM `islandcontents`";
$result_contents = $conn->query($sql_contents);

if (!$result_contents) {
    die("Error in query: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rhea's Inside Out - Island Personality</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/w3-css/4.1.0/w3.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left"
        style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
        <a href="#home" onclick="w3_close()" class="w3-bar-item w3-button">Home</a>
        <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">About</a>
        <a href="#person" onclick="w3_close()" class="w3-bar-item w3-button">Island Personality</a>
        <a href="#content" onclick="w3_close()" class="w3-bar-item w3-button">Island Contents</a>
        <a href="#new" onclick="w3_close()" class="w3-bar-item w3-button">Reviews</a>
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button">Close</a>
    </nav>

    <div class="w3-top">
        <div class="w3-black w3-xlarge" style="max-width: 100%; margin:auto">
            <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
            <div class="w3-right w3-padding-16">Mail</div>
            <div class="w3-center w3-padding-16">Inside Out</div>
        </div>
    </div>

    <div class="container-fluid mb-5" id="home">
    </div>

    <div class="container text-center my-5" id="about">
        <h3>What's on Rhea's Mind?</h3><br>
        <img src="images/rhea'smind.png" class="img-fluid" style="display:block;margin:auto" width="800" height="550">
        <h4 class="my-3"><b>Rhea's Core Memories and Island Personality</b></h4>
        <p >Rhea’s mind is shaped by core memories and personality islands, which define who she is. Her core memories
            are key emotional moments that guide her reactions and decisions in daily life. These memories form the
            foundation of her thoughts and actions, influencing how she approaches challenges. Rhea’s personality is
            further defined by islands like Love, Beauty, Imagination, and Adventure, which represent her core values
            and passions. Together, her core memories and personality islands help her navigate the world, shaping every
            thought and experience she encounters.</p>

    </div>
    <div class="container-fluid my-5 mt-5" id="person">
        <h1 class="text-center mb-4"><b>Island Personality</b></h1>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
            <?php
            while ($island = $result_islands->fetch_assoc()) {
                $imagePath = $island['image'];

                echo '<div class="col-md-6 mb-4">';
                echo '<div class="island-card">';
                echo '<img src="' . $imagePath . '" alt="' . $island['name'] . '" class="img-fluid">';
                echo '<div class="p-3">';
                echo '<h3>' . $island['name'] . '</h3>';
                echo '<p>' . $island['shortDescription'] . '</p>';
                echo '<p>' . $island['color'] . '</p>';
                echo '<p>' . $island['status'] . '</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>

    <div class="container my-5 mt-5" id="content">
        <h1 class="text-center mb-4"><b>Island Content</b></h1>
        <?php
        $islands_contents = [];
        while ($content = $result_contents->fetch_assoc()) {
            $islands_contents[$content['islandOfPersonalityID']][] = $content;
        }

        foreach ($islands_contents as $island_id => $contents) {
            $stmt = $conn->prepare("SELECT name FROM `islandsofpersonality` WHERE islandOfPersonalityID = ?");
            $stmt->bind_param("i", $island_id);
            $stmt->execute();
            $result_island_name = $stmt->get_result();
            $island_name = $result_island_name->fetch_assoc()['name'];
            echo "<h3 class='text-center my-4'>$island_name</h3>";

            echo '<div class="row row-cols-1 row-cols-md-3 g-4">';

            foreach ($contents as $content) {
                $content_image = $content['image'] ?: '/w3images/sandwich.jpg';
                echo '<div class="col mb-4">';
                echo '<div class="card shadow-sm h-100">';
                echo '<img src="' . $content_image . '" alt="Content Image" class="card-img-top">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $content['content'] . '</h5>';
                echo '<p class="card-text">' . $content['color'] . '</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            echo '</div>';
        }
        ?>
    </div>

    <div class="container text-center my-5" id="new">
    <div class="card mx-auto"  style="max-width: 500px; border: 2px solid #ddd; border-radius: 10px;">
        <img src="images/review.jpg" class="card-img-top rounded-circle mx-auto mt-3" 
            style="width: 180px; height: 200px;">
        <div class="card-body text-center">
            <div class="stars mb-3">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star"></i>
            </div>
            <h6><i>“A Beautiful Sequel That Explores New Emotional Depths”</i></h6>
            <p class="card-text">
                "Inside Out 2 takes the emotional storytelling from the first film and expands it to new heights. The
                film beautifully introduces new emotions, taking viewers on an even more complex emotional journey with
                Riley. The animation is stunning, the characters are lovable, and the story continues to resonate
                deeply. It's a movie about growth, understanding, and embracing change. This sequel is a perfect
                continuation of a beloved classic that brings just as much heart and humor as the original."
            </p>
            <p><b>- A Movie Enthusiast</b></p>
        </div>
    </div>
</div>

    <footer class="w3-black w3-xlarge w3-padding-0" style="width: 100%; margin: 0;">
        <div class="w3-center">
            <p style="color: white;">
                <small>&copy; 2024 Inside Out. All rights reserved.</small>
            </p>
        </div>
    </footer>
    <script>
        function w3_open() {
            document.getElementById("mySidebar").style.display = "block";
        }

        function w3_close() {
            document.getElementById("mySidebar").style.display = "none";
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php
$conn->close();
?>