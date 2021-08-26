<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EventRegisterImport implements ToCollection,WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
         $data = [];
           foreach ($collection as $item){
               $explode_last_name= explode("*", $item['last_name']);
                $SCFHS = $explode_last_name[0] ?? '';
                $hospital = $explode_last_name[1] ?? '';
                $specialty = $explode_last_name[2] ?? '';
                $register_user =[
                    'name' => $item['first_name'],
                    'email' => $item['email'],
                    'phone' => $item['phone_number'],
                    'scfhs' => $SCFHS,
                    'specialty' => $specialty,
                    'hospital' => $hospital,
                    'attended_live' => $item['attended_live'],
                    'date' => $item['registration_date'],
                ];
               array_push($data,$register_user);

           }
        $json = json_encode($data);
        file_put_contents(public_path()."/data.json", $json);

    }
    public function headingRow(): int
    {
        return 1;
    }
}
