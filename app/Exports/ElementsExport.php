<?php

namespace App\Exports;

use App\Models\Elements;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
class ElementsExport implements FromCollection,WithStrictNullComparison
{
    /**
     * @return \Illuminate\Support\Collection
     */

    public function collection()
    {
        return DB::table('elements')
            ->join('elements_views_match', 'elements.id', '=', 'elements_views_match.elements_id')
            ->join('views', 'views.id', '=', 'elements_views_match.views_id')
            ->select('elements.id','elements.name', 'elements.price', 'views.id AS VI','views.name AS VN',  'views.price_half', 'views.price_full')
            ->get();

    }

    public function headings(): array
    {
        return [
            'Element ID',
            'Name',
            'Price',
            'View_ID',
            'views_name',
            'Price_Half',
            'Price_Full',
        ];
    }
}
