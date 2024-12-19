<?php
// Include the database connection
include('connect.php');

// Query to get data from the islandsofpersonality table
$sql_islands = "SELECT * FROM `islandsofpersonality` ORDER BY `islandOfPersonalityID` ASC";
$result_islands = $conn->query($sql_islands);

// Check if query was successful
if (!$result_islands) {
    die("Error in query: " . $conn->error);
}

// Query to get data from the islandcontents table
$sql_contents = "SELECT * FROM `islandcontents`";
$result_contents = $conn->query($sql_contents);

// Check if query was successful
if (!$result_contents) {
    die("Error in query: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inside Out - Island Personality</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <style>
        body, h1, h2, h3, h4, h5, h6 {
            font-family: "Poppins";
        }

        .w3-bar-block .w3-bar-item {
            padding: 20px;
        }

        html {
            scroll-behavior: smooth;
        }

        #mySidebar a {
            text-decoration: none;
        }
    </style>
</head>

<body>

    <!-- Sidebar -->
    <nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
        <a href="#home" onclick="w3_close()" class="w3-bar-item w3-button">Home</a>
        <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">About</a>
        <a href="#person" onclick="w3_close()" class="w3-bar-item w3-button">Island Personality</a>
        <a href="#content" onclick="w3_close()" class="w3-bar-item w3-button">Island Contents</a>
        <a href="#new" onclick="w3_close()" class="w3-bar-item w3-button">What's New?</a>
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button">Close</a>
    </nav>

    <!-- Top menu -->
    <div class="w3-top">
        <div class="w3-black w3-xlarge" style="max-width: 100%; margin:auto">
            <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
            <div class="w3-right w3-padding-16">Mail</div>
            <div class="w3-center w3-padding-16">Inside Out</div>
        </div>
    </div>

    <!-- Island Personality Section -->
    <div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px" id="person">
        <h1 class="w3-center"><b>Island Personality</b></h1>
        <div class="w3-row-padding w3-padding-16">
            <?php
            // Fetch and display each island
            while ($island = $result_islands->fetch_assoc()) {
                echo '<div class="w3-quarter">';
                echo '<img src="' . ($island['image'] ?: '/w3images/sandwich.jpg') . '" alt="Island Image" style="width:100%">';
                echo '<h3>' . $island['name'] . '</h3>';
                echo '<p>' . $island['shortDescription'] . '</p>';
                echo '</div>';
            }
            ?>
        </div>
    </div>

    <!-- Island Content Section -->
    <div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px" id="content">
        <h1 class="w3-center"><b>Island Content</b></h1>
        <?php
        // Group contents by Island ID
        $islands_contents = [];
        while ($content = $result_contents->fetch_assoc()) {
            $islands_contents[$content['islandOfPersonalityID']][] = $content;
        }

        // Loop through each island's content and display it
        foreach ($islands_contents as $island_id => $contents) {
            // Get the island name for the current island ID
            $stmt = $conn->prepare("SELECT name FROM `islandsofpersonality` WHERE islandOfPersonalityID = ?");
            $stmt->bind_param("i", $island_id);
            $stmt->execute();
            $result_island_name = $stmt->get_result();
            $island_name = $result_island_name->fetch_assoc()['name'];

            echo "<h3>$island_name</h3><br>";
            echo '<div class="w3-row-padding w3-padding-16">';
            
            foreach ($contents as $content) {
                echo '<div class="w3-third">';
                echo '<img src="' . ($content['image'] ?: '/w3images/sandwich.jpg') . '" alt="Content Image" style="width:100%">';
                echo '<h3>' . $content['content'] . '</h3>';
                echo '<p>' . $content['color'] . '</p>';
                echo '</div>';
            }
            echo '</div>';
        }
        ?>
    </div>

    <!-- What's New Section -->
    <div class="w3-container w3-padding-32 w3-center"  id="new">
        <h3>What's New? The arrival of new emotions in “Inside Out 2”</h3><br>
        <img src="https://snworksceo.imgix.net/obs/1eb0b615-f0aa-40be-bdaa-d2cbde395b9a.sized-1000x1000.jpg?w=1000" alt="Inside Out 2" class="w3-image" style="display:block;margin:auto" width="800" height="533">
        <div class="w3-padding-32">
            <h4><b>What are the New Emotions in Inside Out?</b></h4>
            <h6><i>Anxiety, Ennui, Embarrassment, Envy</i></h6>
            <p>Inside Out 2 introduces four new emotions to Riley's mind: Anxiety, a nervous and jittery character always worrying about the future; Envy, a small, green creature feeling jealous and resentful; Embarrassment, a large, red figure constantly hiding from social situations; and Ennui, a listless and bored emotion representing teenage apathy. These new emotions join the original five as Riley navigates the complexities of adolescence.</p>
        </div>
    </div>

    <!-- Pagination Section -->
    <div class="w3-center w3-padding-32">
        <div class="w3-bar">
            <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
            <a href="#" class="w3-bar-item w3-black w3-button">1</a>
            <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
            <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
            <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
            <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
        </div>
    </div>

    <!-- Footer Section -->
    <footer class="w3-black w3-xlarge w3-padding-0" style="width: 100%; margin: 0;">
        <div class="w3-center">
            <p style="color: white;">
                <small>&copy; 2024 Inside Out. All rights reserved.</small>
            </p>
        </div>
    </footer>

    <!-- Scripts for Sidebar -->
    <script>
        function w3_open() {
            document.getElementById("mySidebar").style.display = "block";
        }

        function w3_close() {
            document.getElementById("mySidebar").style.display = "none";
        }
    </script>

</body>

</html>

<?php
// Close the database connection
$conn->close();
?>
