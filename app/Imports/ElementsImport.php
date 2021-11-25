<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;
class ElementsImport implements FromCollection,WithStrictNullComparison
{
    public function collection()
    {
      $query =   DB::table('users')->insert([
            ['name' => 'sxdddddd'],
            ['email' => 'archer@example.com'],
            ['password' => 'xdddd']
        ]);
   if ($query){
       return back()->with('success','xdddd');

   }else{
       return back()->with()('fail','xddd nie udalo sie');
   }

    }
}
