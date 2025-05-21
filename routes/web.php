<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('frontend');
});

Route::get("/satu", function () {
  return view("pertemuansatu");
});

Route::get("/dua", function () {
  return view("pertemuandua");
});

Route::get("/tiga", function () {
  return view("pertemuantiga");
});

Route::get("/empat", function () {
  return view("pertemuanempat");
});

Route::get("/linktree", function () {
  return view("linktree");
});

Route::get("/validasi", function () {
  return view("validasi");
});

Route::get("/uts", function () {
  return view("uts");
});

Route::get("/frontend", function () {
  return view("frontend");
});