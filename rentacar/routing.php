<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('landing'); #default action
App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('landing', 'LandingPageCtrl');
Utils::addRoute('carsList', 'CarsListCtrl');
Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl');
Utils::addRoute('register', 'RegisterCtrl');
Utils::addRoute('carsAdd', 'CarsAddCtrl', ['admin']);
Utils::addRoute('carsDelete', 'CarsDeleteCtrl', ['admin']);
Utils::addRoute('carsDeleteConfirm', 'CarsDeleteCtrl', ['admin']);
Utils::addRoute('carsRent', 'CarsRentCtrl', ['user', 'admin']);
Utils::addRoute('carsRentConfirm', 'CarsRentCtrl', ['user', 'admin']);
Utils::addRoute('reservationsList', 'ReservationsCtrl');

//Utils::addRoute('action_name', 'controller_class_name');