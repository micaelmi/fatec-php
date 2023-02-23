<?php

function c2f($num) {
    return ($num * 9/5) + 32;
}
function c2k($num) {
    return $num + 273.15;
}
function f2c($num) {
    return ($num - 32) * 5/9;
}
function f2k($num) {
    return ($num - 32) * 5/9 + 273.15;
}
function k2c($num) {
    return $num - 273.15;
}
function k2f($num) {
    return ($num - 273.15) * 9/5 + 32;
}