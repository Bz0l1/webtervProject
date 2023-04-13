<?php

function get_profile_pictureNavbar_path($username) {
  $png_path = './img/profiles/' . $username . '.png';
  $jpg_path = './img/profiles/' . $username . '.jpg';
  $default_path = './img/profiles/profilepicture.jpg';

  if (file_exists($png_path)) {
      return $png_path;
  } elseif (file_exists($jpg_path)) {
      return $jpg_path;
  } else {
      return $default_path;
  }
}

function get_profile_pictureProfil_path($username) {
    $png_path = './img/profiles/' . $username . '.png';
    $jpg_path = './img/profiles/' . $username . '.jpg';
    $default_path = './img/profiles/profilepicture.jpg';
  
    if (file_exists($png_path)) {
        return $png_path;
    } elseif (file_exists($jpg_path)) {
        return $jpg_path;
    } else {
        return $default_path;
    }
  }
