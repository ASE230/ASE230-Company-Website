<?php 

function readJSON($filepath) {
    if(file_exists($filepath)) {
        $jsonString = file_get_contents($filepath);
        if ($jsonString !== false) {
            $data = json_decode($jsonString, true);
            if ($data !== null) {
                return $data;
            } else {
                return false;
            }
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function writeJSON($filepath, $data) {
    if (file_exists($filepath)) {
        $jsonContent = file_get_contents($filepath);
        $existingData = json_decode($jsonContent, true);
    } else {
        $existingData = [];
    }

    $existingData[] = $data;

    $jsonString = json_encode($existingData, JSON_PRETTY_PRINT);

    if ($jsonString !== false) {
        if (file_put_contents($filepath, $jsonString) !== false) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function generateTeamMembersHTML($jsonFilePath) {
    $html = '';

    $jsonString = file_get_contents($jsonFilePath);
    $teamMembers = json_decode($jsonString, true);

    if ($teamMembers === null) {
        return 'Error decoding JSON.';
    }

    $imageCounter = 1;

    foreach ($teamMembers as $member) {
        $name = $member['Name'];
        $role = $member['Role'];
        $description = $member['Description'];

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

        $html .= $memberHTML;
    }

    return $html;
}


function generateServicesHTML($jsonFilePath) {
    $html = '';
    $count = 0;

    $jsonString = file_get_contents($jsonFilePath);

    $jsonData = json_decode($jsonString, true);

    if ($jsonData === null) {
        return 'Error decoding JSON.';
    }

    foreach ($jsonData as $serviceName => $serviceInfo) {
        $description = $serviceInfo['Description'];
        $applications = $serviceInfo['Applications'];

        $serviceHTML = '
            <div class="col-lg-4 mt-4">
                <div class="services-box">
                    <div class="d-flex">
                        <i class="pe-7s-diamond text-primary"></i>
                        <div class="ms-4">
                            <h4>' . $serviceName . '</h4>
                            <p class="pt-2 text-muted">' . $description . '</p>
                            <p class="pt-2 text-muted"><strong>Applications:</strong></p>';

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

        $html .= $serviceHTML;

        $count++;

        if ($count % 3 == 0) {
            $html .= '</div><div class="row">';
        }
    }

    return $html;
}

?>