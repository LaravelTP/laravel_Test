<?php

namespace App;

enum Role: string
{
    //
    case Admin = 'Admin';
    case Entrepreneur_en_attente = 'Entrepreneur_en_attente';
    case Entrepreneur_approuve = 'Entrepreneur_approuve';

}
