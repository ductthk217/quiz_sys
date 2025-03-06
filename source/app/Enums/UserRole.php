<?php

namespace App\Enums;

enum UserRole: string
{
    case ADMIN = 'admin';
    case RECRUITER = 'recruiter';
    case CANDIDATE = 'candidate';
}
