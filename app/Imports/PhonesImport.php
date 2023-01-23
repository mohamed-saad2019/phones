<?php

namespace App\Imports;

use App\Jobs\savePhone;
use App\Models\Phones;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Collection;
// use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithEvents;
use App\Notifications\ImportHasFailedNotification;
use Maatwebsite\Excel\Concerns\Importable;

class PhonesImport implements ToCollection ,WithChunkReading,ShouldQueue,WithEvents
{
    use Importable;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    // public function model(array $row)
    // {
    //     return new Phones([
    //         "phone"           => $row[0],
    //         "company"         => 'etisalat',
    //         "invoice_value"   => '100',
    //     ]);
    // }


    public function collection(Collection $rows)
    {
        foreach ($rows as $r=>$row) 
        {
            if($r == 0)
            {
                if(
                    $row[0]  != 'phones'||
                    $row[1]  != 'we'||
                    $row[2]  != 'etisalat'||
                    $row[3]  != 'orange'   ||
                    $row[4]  != 'noor'
                )
                {
                    toastr(__('lang.FileNotValide'),'error');
                }
            }else{
                Phones::updateOrcreate([
                    'phone'           => $row[0],
                    "company"         => '',
                    "invoice_value"   => '0.00',
                    "we"              => $row[1],
                    "etisalat"        => $row[2],
                    "orange"          => $row[3],
                    "noor"            => $row[4],
                    "status"          => 2 ,
                ]);
            }
            
        }

    }


    public function chunkSize(): int
    {
        return 10;
    }
    
    public function retryUntil()
    {
        return now()->addSeconds(5);
    }

    public function registerEvents(): array
    {
        return [
            ImportFailed::class => function(ImportFailed $event) {
                $this->importedBy->notify(new ImportHasFailedNotification);
            },
        ];
    }
}
