<?php

namespace App\Model;

enum StarshipStatusEnum: String
{
    case WAITING = "waiting";
    case IN_PROGRESS = "in progress";
    case COMPLETED = "completed";
}