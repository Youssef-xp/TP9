<?php

use App\Http\Controllers\AnnonceController;
use Illuminate\Support\Facades\Route;


Route:: resource( "annonces"  , AnnonceController::class) ;