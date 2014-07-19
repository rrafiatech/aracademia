<?php

class PublicController extends BaseController {

	protected $layout = 'layouts.default';

	public function index()
    {
        $this->layout->content = View::make('public.home');
    }

    public function contactus()
    {
        $this->layout->content = View::make('public.contactus');
    }

    public function advertise()
    {
        $this->layout->content = View::make('public.advertise');
    }

}
