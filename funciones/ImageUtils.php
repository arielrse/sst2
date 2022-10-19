<?php

    function mirrorImage($imgsrc){

        $width = imagesx($imgsrc);
        $height = imagesy($imgsrc);

        $src_x = $width - 1;
        $src_y = 0;
        $src_width = -$width;
        $src_height = $height;

        $imgdest = imagecreatetruecolor($width, $height);

        if (imagecopyresampled($imgdest, $imgsrc, 0, 0, $src_x, $src_y, $width, $height, $src_width, $src_height)) {
            return $imgdest;
        }

        return $imgsrc;
    }

    function adjustPhotoOrientation($full_filename){

        $exif = exif_read_data($full_filename);
        if ($exif && isset($exif['Orientation'])) {
            $orientation = $exif['Orientation'];
            if ($orientation != 1) {
                $img = '';
                if (exif_imagetype($full_filename) == IMAGETYPE_JPEG)
                    $img = imagecreatefromjpeg($full_filename);
                if (exif_imagetype($full_filename) == IMAGETYPE_PNG)
                    $img = imagecreatefrompng($full_filename);

                $mirror = false;
                $deg = 0;

                switch ($orientation) {
                    case 2:
                        $mirror = true;
                        break;
                    case 3:
                        $deg = 180;
                        break;
                    case 4:
                        $deg = 180;
                        $mirror = true;
                        break;
                    case 5:
                        $deg = 270;
                        $mirror = true;
                        break;
                    case 6:
                        $deg = 270;
                        break;
                    case 7:
                        $deg = 90;
                        $mirror = true;
                        break;
                    case 8:
                        $deg = 90;
                        break;
                }
                if ($deg) $img = imagerotate($img, $deg, 0);
                if ($mirror) $img = mirrorImage($img);

                if (exif_imagetype($full_filename) == IMAGETYPE_JPEG)
                    imagejpeg($img, $full_filename);
                if (exif_imagetype($full_filename) == IMAGETYPE_PNG)
                    imagepng($img, $full_filename);

            }
        }
        return true;
    }

?>