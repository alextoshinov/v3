<?php namespace GoCart\Controller;


class AdminSubscriptions extends Admin {

    public function __construct()
    {
        parent::__construct();
        
        \CI::load()->model('Subscriptions');
        \CI::lang()->load('subscriptions');
    }
    
    public function get_details()
    {
        return $this->details;
    }
    
    public function index()
    {
        $data['page_title'] = lang('subscriptions_title');
        
        $data['subscriptions'] = \CI::Subscriptions()->all();
        $this->view('subscriptions', $data);
    }
    
    

    public function color_form($id = false)
    {                               
        \CI::load()->library('form_validation');
        $data['page_title'] = lang('subscription_form');
        //set the default values
        $data   = array(    'id' => '',
                            'name' => '',
                            'color' => ''
                        );
        
        if($id)
        {
            $color           = \CI::Subscriptions()->subscription($id);
            if(!$color)
            {
                \CI::session()->set_flashdata('error', lang('subscription_not_found'));
                redirect('admin/subscriptions');
            }
            
            
            //set values to db values
            $data['id']             = $color->id;
            $data['name']           = $color->name;
            $data['color']          = $color->color;
            
        }
        
        
        
        \CI::form_validation()->set_rules('name', 'lang:name', 'trim|required|full_decode');
        \CI::form_validation()->set_rules('subscription', 'lang:subscription', 'trim|required');

        
        if (\CI::form_validation()->run() == false)
        {
            $data['error'] = validation_errors();
            $this->view('subscription_form', $data);
        }
        else
        {   
            $save = [];
            $save['id']         = $id;
            $save['name'] = \CI::input()->post('name');
            $save['subscription'] = \CI::input()->post('subscription');
                        
            \CI::Colors()->save_color($save);

            \CI::session()->set_flashdata('message', lang('message_subscription_saved'));
            
            redirect('admin/subscriptions/');
        }   
    }
    
    public function delete_subscription($id)
    {
        $color = \CI::Subscriptions()->subscription($id);
        if(!$color)
        {
            \CI::session()->set_flashdata('error', lang('subscription_not_found'));
        }
        else
        {
            \CI::Subscriptions()->delete_subscription($id);
            \CI::session()->set_flashdata('message', lang('message_delete_subscription'));
        }
        
        redirect('admin/subscriptions/');
    }
    
    public function organize()
    {
        $subscriptions    = \CI::input()->post('subscriptions');
        \CI::Subscriptions()->organize($subscriptions);
    }
}