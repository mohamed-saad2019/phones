<?php

namespace App\Exports;

use App\Models\Phones;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use App\Helpers\Helper;
use Illuminate\Support\Facades\Date;
use Maatwebsite\Excel\Concerns\WithMapping;
use Illuminate\Support\Facades\DB;

class phonesExport implements FromCollection ,WithMapping
{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */

    protected $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }
    public function collection()
    {
        $phoneStatus = Helper::PhonesStatus();
        $status = "";
        ( empty($this->data) || $this->data['status'] =='all' ) ? $status ="" :$status = $this->data['status'];
       $status !="" ? $status = $phoneStatus[$status]:$status;

        return Phones::when($status, function ($query, $status) {
            $query->where('status',$status);
        })->get();
    }

    public function map($phone): array
    {
        return [
            $phone->phone,
            $phone->company,
            // Date::dateTimeToExcel($phone->created_at),
        ];
    }
}
