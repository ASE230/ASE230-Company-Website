<?php 

function readJSON($filepath) {
    if(file_exists($filepath)) {
        $jsonString = file_get_contents($filepath);
        if ($jsonString !== false) {
            $data = json_decode($jsonString, true);
            if ($data !== null) {
                return $data;
            } else {
                // Handle JSON decoding error
                return false;
            }
        } else {
            // Handle file read error
            return false;
        }
    } else {
        // Handle file not found error
        return false;
    }
}

function writeJSON($filepath, $data) {
    // Check if the file exists
    if (file_exists($filepath)) {
        // Read the existing JSON data from the file
        $jsonContent = file_get_contents($filepath);
        $existingData = json_decode($jsonContent, true);
    } else {
        // If the file doesn't exist, start with an empty array
        $existingData = [];
    }

    // Append the new data to the existing data array
    $existingData[] = $data;

    // Encode the combined data as JSON
    $jsonString = json_encode($existingData, JSON_PRETTY_PRINT);

    if ($jsonString !== false) {
        if (file_put_contents($filepath, $jsonString) !== false) {
            return true;
        } else {
            // Handle file write error
            return false;
        }
    } else {
        // Handle JSON encoding error
        return false;
    }
}

function generateTeamMembersHTML($jsonFilePath) {
    $html = '';

    // Get file
    $jsonString = file_get_contents($jsonFilePath);
    // Decode the JSON array
    $teamMembers = json_decode($jsonString, true);

    // Check for decode errors
    if ($teamMembers === null) {
        return 'Error decoding JSON.';
    }

    $imageCounter = 1;

    foreach ($teamMembers as $member) {
        $name = $member['Name'];
        $role = $member['Role'];
        $description = $member['Description'];

        // Generate HTML markup for a team member
        $memberHTML = '
            <div class="col-lg-3 col-sm-6">
                <div class="team-box text-center">
                    <div class="team-wrapper">
                        <div class="team-member">
                            <img alt="" src="images/team/img-'. $imageCounter .'.jpg" class="img-fluid rounded">
                        </div>
                    </div>
                    <h4 class="team-name">' . $name . '</h4>
                    <p class="text-uppercase team-designation">' . $role . '</p>
                    <p class="team-description">' . $description . '</p>
                </div>
            </div>';

        $imageCounter = ($imageCounter < 4) ? $imageCounter + 1 : 1;

        // Append the member's HTML to the overall HTML
        $html .= $memberHTML;
    }

    return $html; // Return the generated HTML
}


function generateServicesHTML($jsonFilePath) {
    $html = ''; // Initialize an empty string to store the HTML markup
    $count = 0; // Initialize a counter to keep track of the number of services

    // Get the JSON data from the file
    $jsonString = file_get_contents($jsonFilePath);

    // Decode the JSON data
    $jsonData = json_decode($jsonString, true);

    if ($jsonData === null) {
        // JSON decoding failed
        return 'Error decoding JSON.';
    }

    // Loop through the JSON data
    foreach ($jsonData as $serviceName => $serviceInfo) {
        $description = $serviceInfo['Description'];
        $applications = $serviceInfo['Applications'];

        // Generate HTML markup for each service
        $serviceHTML = '
            <div class="col-lg-4 mt-4">
                <div class="services-box">
                    <div class="d-flex">
                        <i class="pe-7s-diamond text-primary"></i>
                        <div class="ms-4">
                            <h4>' . $serviceName . '</h4>
                            <p class="pt-2 text-muted">' . $description . '</p>
                            <p class="pt-2 text-muted"><strong>Applications:</strong></p>';

        // Add applications section below each service
        if (!empty($applications)) {
            $serviceHTML .= '<ul class="text-muted list-unstyled mt-4">';
            foreach ($applications as $appName => $appDescription) {
                $serviceHTML .= '<li><strong><u>' . $appName . '</u></strong>: ' . $appDescription . '</li>';
            }
            $serviceHTML .= '</ul>';
        }

        $serviceHTML .= '
                        </div>
                    </div>
                </div>
            </div>';

        // Append the service's HTML to the overall HTML
        $html .= $serviceHTML;

        // Increment the counter
        $count++;

        // If it's the third service, insert a closing </div> and an opening <div class="row">
        if ($count % 3 == 0) {
            $html .= '</div><div class="row">';
        }
    }

    return $html; // Return the generated HTML
}

?>