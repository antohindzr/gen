<?php

function makePassword($lengthPass)
{
  $password = '';
  $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $limitPass = strlen($chars) - 1;
  for ($i = 0; $i < $lengthPass; $i++) {
    $password .= $chars[rand(0, $limitPass)];
  }
  return $password;
}
$lengthPass = 8;
echo makePassword($lengthPass) . '<br>';

function makePIN($lengthPIN)
{
  $pin = '';
  $digits = '0123456789';
  $limitPin = strlen($digits) - 1;
  for ($i = 0; $i < $lengthPIN; $i++) {
    $pin .= $digits[rand(0, $limitPin)];
  }
  return $pin;
}
$lengthPIN = 4;
echo makePIN($lengthPIN);
