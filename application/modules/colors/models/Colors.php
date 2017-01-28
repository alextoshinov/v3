<?php

Class Colors extends CI_Model
{
    public function all() 
    {
        return CI::db()->order_by('name', 'ASC')->get('colors')->result();
    }
    //    
    public function color($id)
    {
        CI::db()->where('id', $id);
        $result = CI::db()->get('colors');
        $result = $result->row();
        
        if ($result)
        {                    
            return $result;
        }
        else
        { 
            return [];
        }
    }
    //
    public function save_color($data) 
    {

        if(isset($data['id']) && !empty($data['id']))
        {
            CI::db()->where('id', $data['id']);
            CI::db()->update('colors', $data);
        }
        else
        {
            CI::db()->insert('colors', $data);
            return CI::db()->insert_id();
        }
    }
    //
    public function delete_color($id)
    {
        CI::db()->where('id', $id);
        CI::db()->delete('colors');
    }
    //
}

