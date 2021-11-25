<?php

namespace App\Imports;

use App\Models\Elements;
use App\Models\Views;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Facades\DB;
class UsersImport implements ToCollection
{

    public function collection(Collection $rows)
    {
        foreach ($rows as $row)
        {
             DB::table('elements')
                 ->where('id', $row[0])
             ->update([
                 'name' => $row[1],
                'price' => $row[2],
            ]);
           DB::table('views')
               ->where('id', $row[3])
               ->update([
                'price_half'=> $row[5],
                'price_full'=> $row[6],
                'name'=> $row[4],
            ]);
                   }
    }
}
