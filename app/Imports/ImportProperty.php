<?php

namespace App\Imports;
use App\Models\PropertyList;
use App\Models\User;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportProperty implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *@return int
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    // public function startRow(): int
    // {
    //     return 2;
    // }
    

    public function model(array $row)
    {
        if(!empty($row['inspection_date']))
        {
            $inspection = ($row['inspection_date'] - 25569) * 86400;
            $inspection_date = gmdate("Y-m-d", $inspection);
        }
        else
        {
            $inspection_date = $row['inspection_date'] ;
        }
        
        if(!empty($row['emd_submission']))
        {
            $emd_submission = ($row['emd_submission'] - 25569) * 86400;
            $emd_submission_date = gmdate("Y-m-d", $emd_submission);
        }
        else
        {
            $emd_submission_date = $row['emd_submission'];
        }
        

        // $auction_start = ($row['auction_start'] - 25569) * 86400;

        // $auction_start_date = gmdate("Y-m-d", $auction_start);

        // $auction_end = ($row['auction_end'] - 25569) * 86400;
        // $auction_end_date = gmdate("Y-m-d", $auction_end);
        
        return new PropertyList([
            'bank_name' => $row['bank_name'],
            'branch_name_and_address' => $row['branch_name_and_address'],
            'borrower_name' => $row['borrower_name'],
            'property_type' => $row['property_type'],
            'property_details' => $row['property_details'],
            'area' => $row['area'],
            'possession' => $row['possession'],
            'locality' => $row['locality'], 
            'city' => $row['city'],
            'state' => $row['state'],
            'reserve_price' => $row['reserve_price'],
            'emd_amount' => $row['emd_amount'],
            'bid_increment' => $row['bid_increment'], 
            'inspection_date' => $inspection_date,                        
            'emd_submission' => $emd_submission_date,
            'auction_start' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['auction_start']),
            'auction_end' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['auction_end']),
            'authorized_officer' => $row['authorized_officer'],
            'auction_portal' => $row['auction_portal'],
            'add_by' => $row['add_by'],
            'status' => $row['active'],
            'sale_notice' => $row['sale_notice']

        ]);
    }
}
