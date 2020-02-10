<?php


namespace controllers;


class Media
{
    public function resizeImage($imagePath, $imageNewPath, $width, $height)
    {


                    $mimeType = getimagesize($imagePath)["mime"];
                    $imageSource = "";

                    if ($mimeType == "image/png")
                    {
                        $imageSource = imagecreatefrompng($imagePath);
                    }
                    if ($mimeType == "image/gif")
                    {
                        $imageSource = imagecreatefromgif($imagePath);
                    }
                    if ($mimeType == "image/jpg" || $mimeType == "image/jpeg" || $mimeType == "image/pjepg")
                    {
                        $imageSource = imagecreatefromjpeg($imagePath);
                    }

                    $originalImageWidth = imagesx($imageSource);
                    $originalImageHeight = imagesy($imageSource);

                        $newImageWidth = $width;
                        $newImageHeight = $height;

                    $newImageDimention = imagecreatetruecolor($newImageWidth, $newImageHeight);
                    imagecopyresampled($newImageDimention, $imageSource, 0, 0, 0, 0, $newImageWidth, $newImageHeight, $originalImageWidth, $originalImageHeight);

                    if ($mimeType == "image/png")
                    {
                        $result = imagepng($newImageDimention, $imageNewPath);
                    }
                    if ($mimeType == "image/gif")
                    {
                        $result = imagegif($newImageDimention, $imageNewPath);
                    }
                    if ($mimeType == "image/jpg" || $mimeType == "image/jpeg" || $mimeType == "image/pjepg")
                    {
                        $result = imagejpeg($newImageDimention, $imageNewPath);
                    }

                    imagedestroy($newImageDimention);
                    imagedestroy($imageSource);


    }
}