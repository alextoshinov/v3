<?php namespace GoCart\Controller;


class AdminColors extends Admin {

    public function __construct()
    {
        parent::__construct();
        
        \CI::load()->model('Colors');
        \CI::lang()->load('colors');
    }
    
    public function get_details()
    {
        return $this->details;
    }
    
    public function index()
    {
        $data['page_title'] = lang('colors_title');
        
        $data['colors'] = \CI::Colors()->all();
        $this->view('colors', $data);
    }
    
    

    public function color_form($id = false)
    {                               
        \CI::load()->library('form_validation');
        $data['page_title'] = lang('color_form');
        //set the default values
        $data   = array(    'id' => '',
                            'name' => '',
                            'color' => ''
                        );
        
        if($id)
        {
            $color           = \CI::Colors()->color($id);
            if(!$color)
            {
                \CI::session()->set_flashdata('error', lang('color_not_found'));
                redirect('admin/colors');
            }
            
            
            //set values to db values
            $data['id']             = $color->id;
            $data['name']           = $color->name;
            $data['color']          = $color->color;
            
        }
        
        
        
        \CI::form_validation()->set_rules('name', 'lang:name', 'trim|required|full_decode');
        \CI::form_validation()->set_rules('color', 'lang:color', 'trim|required');

        
        if (\CI::form_validation()->run() == false)
        {
            $data['error'] = validation_errors();
            $this->view('color_form', $data);
        }
        else
        {   
            $save = [];
            $save['id']         = $id;
            $save['name'] = \CI::input()->post('name');
            $save['color'] = \CI::input()->post('color');
                        
            \CI::Colors()->save_color($save);

            \CI::session()->set_flashdata('message', lang('message_color_saved'));
            
            redirect('admin/colors/');
        }   
    }
    
    public function delete_color($id)
    {
        $color = \CI::Colors()->color($id);
        if(!$color)
        {
            \CI::session()->set_flashdata('error', lang('color_not_found'));
        }
        else
        {
            \CI::Colors()->delete_color($id);
            \CI::session()->set_flashdata('message', lang('message_delete_color'));
        }
        
        redirect('admin/colors/');
    }
    
    public function organize()
    {
        $colors    = \CI::input()->post('colors');
        \CI::Colors()->organize($colors);
    }
}