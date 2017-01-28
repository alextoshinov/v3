<?php

Class Subscriptions extends CI_Model
{
    public function all() 
    {
        return CI::db()->order_by('name', 'ASC')->get('subscriptions')->result();
    }
    //    
    public function subscription($id)
    {
        CI::db()->where('id', $id);
        $result = CI::db()->get('subscriptions');
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
    public function save_subscription($data) 
    {

        if(isset($data['id']) && !empty($data['id']))
        {
            CI::db()->where('id', $data['id']);
            CI::db()->update('subscriptions', $data);
        }
        else
        {
            CI::db()->insert('subscriptions', $data);
            return CI::db()->insert_id();
        }
    }
    //
    public function delete_subscription($id)
    {
        CI::db()->where('id', $id);
        CI::db()->delete('subscriptions');
    }
    //
}

