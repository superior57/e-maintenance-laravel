<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Support\Facades\Storage;
use DB;

class Formedit extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */


    public function add()
    {
        DB::insert('INSERT INTO tbl_form(pc_no) VALUES(pc);');
    }

    public function save_user($value)
    {
        $query = "INSERT INTO users(remember_token, name, email, password, authority) VALUES('$value[0]', '$value[1]', '$value[2]', '$value[3]', '$value[4]');";
        DB::insert($query);        
    }

    public function get_data($tablename)
    {
        $query = "SELECT * FROM $tablename ORDER BY id DESC;";
        return DB::select($query);
    }

    // public function get_pc_details($pc_id)
    // {
    //     $query = "SELECT * FROM tbl_form WHERE pc_id = '$pc_id';";
    //     $result = DB::select($query);
    //     return $result;
    // }

    public function get_count($col_name, $value, $month, $year)
    {
        $query = "SELECT COUNT(*) FROM tbl_form WHERE $col_name LIKE '%$value%' && YEAR(modify_date) = '$year' && MONTH(modify_date) = '$month';";
        if ($col_name == "service_other")
            $query = "SELECT COUNT(*) FROM tbl_form WHERE $col_name != '' && YEAR(modify_date) = '$year' && MONTH(modify_date) = '$month';";
        $result = DB::select($query);
        return $result;
    }

    public function get_details($year)
    {
        $query = "SELECT * FROM tbl_form WHERE YEAR(modify_date) = '$year';";
        $result = DB::select($query);
        return $result;
    }

    public function delete_user($id)
    {
        $query = "DELETE FROM users WHERE id = '$id';";
        $result = DB::delete($query);
    }  
    public function update_user($id, $value)
    {
        $query = "UPDATE users SET remember_token = '$value[0]', name = '$value[1]', email = '$value[2]', password = '$value[3]', authority = '$value[4]' WHERE id = '$id';";
        DB::update($query);
        // var_dump($query);exit;
    } 
}
