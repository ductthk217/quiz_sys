<?php
function checkImage($imagePath, $avatar = false)
{
    if (str_starts_with($imagePath, 'http://') || str_starts_with($imagePath, 'https://')) {
        return $imagePath;
    } else {
        $default_image = $avatar == true ? DEAULT_IMAGE_AVATAR : DEAULT_IMAGE;
        $link_image = file_exists(public_path($imagePath)) && !empty($imagePath) ? asset($imagePath) : asset($default_image);
        return $link_image;
    }
}