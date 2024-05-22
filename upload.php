<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["fileToUpload"])) {
    $targetDir = "uploads/"; // Directory where uploaded images will be stored
    $targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]); // Path to the uploaded file

    // Check if the file is an actual image or fake image
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        // File is an image
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            // File uploaded successfully
            $imageUrl = $targetFile; // URL to access the uploaded image
            $imageName = basename($_FILES["fileToUpload"]["name"]); // Name of the uploaded image

            // Return information about the uploaded image
            $response = array(
                "success" => true,
                "imageUrl" => $imageUrl,
                "imageName" => $imageName
            );
            echo json_encode($response);
        } else {
            // Error uploading file
            $response = array(
                "success" => false,
                "message" => "Sorry, there was an error uploading your file."
            );
            echo json_encode($response);
        }
    } else {
        // File is not an image
        $response = array(
            "success" => false,
            "message" => "File is not an image."
        );
        echo json_encode($response);
    }
} else {
    // If the form is not submitted or file is not provided
    $response = array(
        "success" => false,
        "message" => "Invalid request."
    );
    echo json_encode($response);
}
?>
