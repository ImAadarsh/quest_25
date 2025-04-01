<?php
function getSchoolsList() {
    try {
        $csvFile = __DIR__ . '/../data/schools.csv';
        if (!file_exists($csvFile)) {
            error_log('Schools CSV file not found');
            return [];
        }

        $schools = [];
        if (($handle = fopen($csvFile, "r")) !== FALSE) {
            // Skip header row
            fgetcsv($handle);
            
            while (($data = fgetcsv($handle)) !== FALSE) {
                if (count($data) >= 3) {
                    $schools[] = [
                        trim($data[0]), // School Name
                        trim($data[1]), // City
                        trim($data[2])  // State
                    ];
                }
            }
            fclose($handle);
        }
        
        return $schools;
    } catch (Exception $e) {
        error_log('Error reading schools: ' . $e->getMessage());
        return [];
    }
}

function addSchool($school) {
    try {
        $csvFile = __DIR__ . '/../data/schools.csv';
        $schools = getSchoolsList();
        
        // Add new school to array
        $schools[] = [
            trim($school[0]),
            trim($school[1]),
            trim($school[2])
        ];
        
        // Write back to CSV
        if (($handle = fopen($csvFile, "w")) !== FALSE) {
            // Write header
            fputcsv($handle, ['School Name', 'City', 'State']);
            
            // Write schools
            foreach ($schools as $school) {
                fputcsv($handle, $school);
            }
            
            fclose($handle);
            return true;
        }
        return false;
    } catch (Exception $e) {
        error_log('Error adding school: ' . $e->getMessage());
        return false;
    }
}

function deleteSchool($index) {
    try {
        $csvFile = __DIR__ . '/../data/schools.csv';
        $schools = getSchoolsList();
        
        // Remove school at index
        if (isset($schools[$index])) {
            unset($schools[$index]);
            $schools = array_values($schools); // Reindex array
            
            // Write back to CSV
            if (($handle = fopen($csvFile, "w")) !== FALSE) {
                // Write header
                fputcsv($handle, ['School Name', 'City', 'State']);
                
                // Write schools
                foreach ($schools as $school) {
                    fputcsv($handle, $school);
                }
                
                fclose($handle);
                return true;
            }
        }
        return false;
    } catch (Exception $e) {
        error_log('Error deleting school: ' . $e->getMessage());
        return false;
    }
}
?> 