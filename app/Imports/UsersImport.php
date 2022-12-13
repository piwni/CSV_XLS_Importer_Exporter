<?php

namespace App\Imports;

use App\Models\Elements;
use App\Models\Views;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithStartRow;
class UsersImport implements ToCollection,WithStartRow
{

    public function startRow(): int
    {
        return 2;
    }
    public function collection(Collection $rows)
    {
        foreach ($rows as $row)
        {
             DB::table('elements')
                 ->where('id', $row[0])
             ->update([
                'price' => $row[2]
            ]);
           DB::table('views')
               ->where('id', $row[3])
               ->update([
                'price_half'=> $row[5],
                'price_full'=> $row[6]
            ]);
        }
    }
}
