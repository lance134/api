<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetListController extends Controller
{
    //
}

// {
//     "Cust_lname": "Lim",
//     "Cust_fname": "Christopher",
//     "Cust_mname": "Torres",
//     "Cust_image": "chris.jpg",
//     "Cust_phoneno": "0957689542",
//     "Cust_address": "Camp One Rosario, La Union",
//     "Cust_email": "torres-lim21@gmail.com",
//     "Cust_password": "cust3Chief",
//     "Cust_password_confirmation": "cust3Chief"
// }
// {
//     "Cust_lname": "Castro",
//     "Cust_fname": "Samantha",
//     "Cust_mname": "Abellana",
//     "Cust_image": "sam.jpg",
//     "Cust_phoneno": "09815074006",
//     "Cust_address": "Inabaar Sur Rosario, La Union",
//     "Cust_email": "samganda@yahoo.com",
//     "Cust_password": "cust4Chief",
//     "Cust_password_confirmation": "cust4Chief"
// }

// {
//     "Cust_lname": "Reyes",
//     "Cust_fname": "Trixy",
//     "Cust_mname": "Karter",
//     "Cust_image": "trix.jpg",
//     "Cust_phoneno": "09791112873",
//     "Cust_address": "Poblacion East Rosario, Launion",
//     "Cust_email": "karttrix111@gmail.com",
//     "Cust_password": "cust5Chief",
//     "Cust_password_confirmation": "cust5Chief"
// }
// {
//     "Cust_lname": "Floress",
//     "Cust_fname": "Kim",
//     "Cust_mname": "Reese",
//     "Cust_imgage": "kim.jpg",
//     "Cust_phoneno": "09993910567",
//     "Cust_address": "San Jose Rosario, La Union",
//     "Cust_email": "kimmyeesy@gmail.com",
//     "Cust_password": "cust6Chief",
//     "Cust_password_confirmation": "cust6Chief"
// }
// {
//     "Cust_lname": "Bautista",
//     "Cust_fname": "Roman",
//     "Cust_mname": "Gonzales",
//     "Cust_imgage": "rom.jpg",
//     "Cust_phoneno": "09980533642",
//     "Cust_address": "Pinmilapil Sison, Pangasinan",
//     "Cust_email": "gonsaleshamor50@gmail.com",
//     "Cust_password": "cust7Chief",
//     "Cust_password_confirmation": "cust7Chief"
// }
// {
//     "Cust_lname": "Garcia",
//     "Cust_fname": "Kennedy",
//     "Cust_mname": "Santos",
//     "Cust_imgage": "kenn.jpg",
//     "Cust_phoneno": "09342889431",
//     "Cust_address": "Artacho Sison, Pangasinan",
//     "Cust_email": "nedtosciaAgmail@gmail.com",
//     "Cust_password": "cust8Chief",
//     "Cust_password_confirmation": "cust8Chief"
// }
// {
//     "Cust_lname": "Smith",
//     "Cust_fname": "John",
//     "Cust_mname": "A",
//     "Cust_imgage": "john_smith.jpg",
//     "Cust_phoneno": "1234567890",
//     "Cust_address": "123 Main St, New York, NY",
//     "Cust_email": "john.smith@example.com",
//     "Cust_password": "password123",
//     "Cust_password_confirmation": "password123"
// }
// {
//     "Cust_lname": "Doe",
//     "Cust_fname": "Jane",
//     "Cust_mname": "B",
//     "Cust_imgage": "jane_doe.jpg",
//     "Cust_phoneno": "1234567891",
//     "Cust_address": "456 OAK St, Los Angeles, CA",
//     "Cust_email": "jane.doe@example.com",
//     "Cust_password": "passwor456",
//     "Cust_password_confirmation": "password456"
// }
// {
//     "Cust_lname": "Johnson",
//     "Cust_fname": "Emily",
//     "Cust_mname": "C",
//     "Cust_imgage": "emily_johnson.jpg",
//     "Cust_phoneno": "1234567892",
//     "Cust_address": "789 Pine St, Chicago, IL",
//     "Cust_email": "emily.johnson@example.com",
//     "Cust_password": "password789",
//     "Cust_password_confirmation": "cust8Chief"
// }
// {
//     "Cust_lname": "Brown",
//     "Cust_fname": "Michael",
//     "Cust_mname": "D",
//     "Cust_imgage": "michael_brown.jpg",
//     "Cust_phoneno": "1234567893",
//     "Cust_address": "101 Maple St, Houston, TX",
//     "Cust_email": "michael.brown@example.com",
//     "Cust_password": "password234",
//     "Cust_password_confirmation": "password234"
// }
// {
//     "Cust_lname": "Davis",
//     "Cust_fname": "Sarah",
//     "Cust_mname": "E",
//     "Cust_imgage": "sarah_davis.jpg",
//     "Cust_phoneno": "1234567894",
//     "Cust_address": "102 Elm St, Phoenix, AZ",
//     "Cust_email": "sarah.davis@example.com",
//     "Cust_password": "password567",
//     "Cust_password_confirmation": "password567"
// }
// {
//     "Cust_lname": "Wilson",
//     "Cust_fname": "David",
//     "Cust_mname": "F",
//     "Cust_imgage": "wilson_davis.jpg",
//     "Cust_phoneno": "1234567895",
//     "Cust_address": "103 Cedar St, Pheladelphia, PA",
//     "Cust_email": "wilson.david@example.com",
//     "Cust_password": "password678",
//     "Cust_password_confirmation": "password678"
// }
// {
//     "Cust_lname": "Martinez",
//     "Cust_fname": "Laura",
//     "Cust_mname": "G",
//     "Cust_imgage": "laura_martinez.jpg",
//     "Cust_phoneno": "1234567896",
//     "Cust_address": "104 Birch St, San Antonio, TX",
//     "Cust_email": "laura.martinez@example.com",
//     "Cust_password": "password135",
//     "Cust_password_confirmation": "password135"
// }
// {
//     "Cust_lname": "Anderson",
//     "Cust_fname": "Chris",
//     "Cust_mname": "H",
//     "Cust_imgage": "chris_anderson.jpg",
//     "Cust_phoneno": "1234567897",
//     "Cust_address": "105 Willow St, Dallas, TX",
//     "Cust_email": "chris.anderson@example.com",
//     "Cust_password": "password357",
//     "Cust_password_confirmation": "password357"
// }
// {
//     "Cust_lname": "Thomas",
//     "Cust_fname": "Patricia",
//     "Cust_mname": "I",
//     "Cust_imgage": "patricia_thomas.jpg",
//     "Cust_phoneno": "1234567898",
//     "Cust_address": "106 Spruce St, San Diego, CA",
//     "Cust_email": "patricia.thomas@example.com",
//     "Cust_password": "password357",
//     "Cust_password_confirmation": "password357"
// }
// {
//     "Cust_lname": "Jackson",
//     "Cust_fname": "Robert",
//     "Cust_mname": "J",
//     "Cust_imgage": "robert_jackson.jpg",
//     "Cust_phoneno": "1234567899",
//     "Cust_address": "107 Spruce St, San Fransisco, CA",
//     "Cust_email": "robert.jackson@example.com",
//     "Cust_password": "password468",
//     "Cust_password_confirmation": "password468"
// }