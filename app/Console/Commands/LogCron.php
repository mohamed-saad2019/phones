<?php

namespace App\Console\Commands;

use App\Models\Phones;
use Illuminate\Console\Command;
use Helper;


class LogCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'log:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        
        $phones = Phones::where('status',2)->orderBy('created_at', 'ASC')->paginate(10); 
        foreach($phones as $phone)
        {
            if($phone->we == '1')
            {
                $checkWe = Helper::callJumia('we',$phone->phone);
                if($checkWe == 200)
                {
                    Phones::where('id',$phone->id)->update(['company' => 'we' , 'status' => 1 ]);
                }
            }else{
                $checkWe = "" ;
            }


            if($phone->etisalat == '1'){
                $checkEtisalat = Helper::callJumia('etisalat',$phone->phone);
                if($checkEtisalat == 200)
                {
                    Phones::where('id',$phone->id)->update(['company' => 'etisalat' , 'status' => 1 ]);
                }
            }else{
                $checkEtisalat = "" ;
            }

            if($phone->orange == '1'){
                $checkOrange = Helper::callJumia('orange',$phone->phone);
                if($checkOrange == 200)
                {
                    Phones::where('id',$phone->id)->update(['company' => 'orange' , 'status' => 1 ]);
                }
            }else{
                $checkOrange = "" ;
            }
            if($phone->noor == '1'){
                $checkNoor = Helper::callJumia('noor',$phone->phone);
                if($checkNoor == 200)
                {
                    Phones::where('id',$phone->id)->update(['company' => 'noor' , 'status' => 1 ]);
                }
            }else{
                $checkNoor = "" ;
            }

            if($checkWe != 200 && $checkEtisalat != 200 && $checkOrange != 200 && $checkNoor != 200 )
            {
                Phones::where('id',$phone->id)->update(['status' => -1 ]);
            }


        }

        return 0;
    }
}
