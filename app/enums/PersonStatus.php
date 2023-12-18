<?php

namespace App\Enums;

enum PersonStatus: string
{
  case Menikah = "menikah";
  case Belum = "belum menikah ";
  case lain = "lain";
}
