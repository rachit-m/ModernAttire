    <?php
//Check and remove the empty files created on 403 error
        $directory = '/var/www/html/images/catalog/'; 
        $files = scandir($directory);
        
        foreach ($files as $file) {
            $filePath = $directory . '/' . $file;
            
            if (is_file($filePath) && filesize($filePath) < 1024) {
                unlink($filePath);
                echo "Deleted file: " . $filePath . "\n";
            }
        }
//Get all the sheet's data
        $response = file_get_contents('https://sheets.googleapis.com/v4/spreadsheets/1PhDr3cH-4gn4G1Gcz8H9EPQw5uCf2Dxd90Ay_nDgEbE/values/AllProducts?key=AIzaSyDNBeKsUnqKFzJ54MNJKn-H82fuSTtXApI');
        $response = json_decode($response);
        $response = $response->{'values'};
        $totalProd = count($response);

//Download all the images
        for($i=1 ; $i<2; $i++){
            $customFileName = $response[$i][0];
            $customFileName = str_replace("/","",$response[$i][0]).".jpeg";
            $fileUrl = str_replace("open","thumbnail",$response[$i][11])."&sz=w275-h356&export=download";
            $savePath = '/var/www/html/images/catalog/' . $customFileName;
            
            if(file_exists($savePath)){
                echo "File already exists, skipping :";
            }else{
                if ( file_put_contents( $savePath, file_get_contents($fileUrl))) {
                    echo 'File downloaded successfully';
                } else {
                    echo 'File failed to download';
                }
            }           
    }

?>


