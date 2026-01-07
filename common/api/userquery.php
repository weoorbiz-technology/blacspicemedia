<?php
    // Include the database connection code here

    include_once('../../db.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $mobile = $_POST["mobile"];
        $location = $_POST["location"];
        $message = $_POST["message"];

        // Insert the data into the 'userquery' table
        $insertQuery = "INSERT INTO userquery (name, email, mobile, location, message, created) VALUES (?, ?, ?, ?, ?, NOW())";
        $stmt = $mysqli->prepare($insertQuery);
        $stmt->bind_param("sssss", $name, $email, $mobile, $location, $message);

        if ($stmt->execute()) {

            // Mailer
			include_once('./mail/Mailer.php');

			$mail_admin = "<!DOCTYPE html><head>
			<meta name='viewport' content='width=1024'>
			<meta name='viewport' content='width=device-width, initial-scale=1.0'>
			</head>
			<body style='margin:10px;padding:50px;background-color:#fff;border:1px solid #333'>
			<h2 style='font-weight: 400;'>Mail from $name</a></h2>
			<br>
			<p>Name : <b>$name</b></p>
			<p>Email : <b>$email</b></p>
			<p>Mobile : <b>$mobile</b></p>
			<p>Location : <b>$location</b></p>
			<p>Message : <b>$message</b></p>
			</body>
			</html>";

            $mailer_admin = new Mailer();
            $sendAdmin = $mailer_admin->sendMail('srilearncraft@gmail.com', 'Sri LearnCraft Enquiry Mail', $mail_admin);

            // The data has been successfully inserted into the database
            $response = ["status" => "success", "message" => "Data submitted successfully"];
        } else {
            // Failed to insert data into the database
            $response = ["status" => "error", "message" => "Data submission failed"];
        }

        header('Content-Type: application/json');
        echo json_encode($response);
    }

    if ($_SERVER["REQUEST_METHOD"] == "GET"){
        // Execute the SELECT query
        $query = "SELECT * FROM userquery";
        $result = $mysqli->query($query);

        if ($result) {
            $userData = array(); // Initialize an array to store user data

            while ($row = $result->fetch_assoc()) {
                // Add each row of data to the array
                $userData[] = $row;
            }

            // Close the result set
            $result->close();

            // Close the database connection
            $mysqli->close();

            // Convert the user data array to JSON
            $jsonResponse = json_encode($userData);

            // Set the response content type to JSON
            header('Content-Type: application/json');

            // Return the JSON response
            echo $jsonResponse;
        } else {
            // Handle the case where the query fails
            echo json_encode(array("error" => "Query failed"));
        }
    }
?>