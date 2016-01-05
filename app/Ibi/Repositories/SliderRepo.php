<?php

namespace Ibi\Repositories;

use Ibi\Models\Slider;

/**
* Slider Repo
*/
class SliderRepo
{
    public function save(Slider $slider)
    {
        // dd($slider);
        
        $slider->save();

        return $slider;
    }

    public function remove($id)
    {
        $slider = $this->getById($id);

        $slider->delete();

        return true;
    }

    public function getAll()
    {
        return Slider::with('translations')->orderBy('created_at', 'DESC')->get();
    } 

    public function getAllFront()
    {
        return Slider::where('active', 1)->orderBy('created_at', 'DESC')->get();
    } 

    public function getById($id)
    {
        return Slider::with('translations')->where('id', $id)->first();
    } 
}
