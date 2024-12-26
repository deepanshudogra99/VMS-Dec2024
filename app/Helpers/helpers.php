<?php
use App\Models\State;
use App\Models\District;
use App\Models\Office;


function getstate($statecode)
{
  $statename = State::where('statecode', $statecode)->pluck('statname');
  return $statename[0];
}

function getdist($districtcode)
{
  $districtname = District::where('districtcode', $districtcode)->pluck('districtname');
  return $districtname[0];
}

function getoffice($officecode)
{
  $officename = Office::where('officecode', $officecode)->pluck('officename');
  return $officename[0];
}

// function getusertype($usertypecode)
// {
//   $officename = Office::where('usertypecode', $usertypecode)->pluck('officename');
//   return $officename[0];
// }










?>