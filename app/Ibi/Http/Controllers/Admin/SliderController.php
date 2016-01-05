<?php

namespace Ibi\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Ibi\Repositories\SliderRepo;
use Ibi\Models\Languages;
use Illuminate\Http\Request;


class SliderController extends Controller
{
    /**
     * Display a listing of the Slider.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(SliderRepo $slider_repo)
    {
        $sliders = $slider_repo->getAll();

        return view('admin.slider.index', compact('sliders'));

    }

     /**
     * Show the form for creating a new Fascia.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $lingue = Languages::all();
        return view('admin.slider.create', compact('lingue'));
    }



    /**
     * Store a newly created Slider in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->input();
        $data = $this->manageUploads($request);

        $slider = $this->dispatchFrom('Ibi\Commands\Sliders\CreateSliderCommand', $request, $data);
        
        return redirect()->to('/admin/slider');
    }

    /**
     * Show the form for editing the specified Slider.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, SliderRepo $slider_repo)
    {
        $slider = $slider_repo->getById($id);
        $lingue = Languages::all();

        $traduzioni = $slider->translations->keyBy('locale');

        return view('admin.slider.edit', compact('slider', 'lingue', 'traduzioni'));
    }

    /**
     * Update the specified Slider in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $this->manageUploads($request);

        $slider = $this->dispatchFrom('Ibi\Commands\Sliders\UpdateSliderCommand', $request, $data);

        flash()->success('Slider aggiornata correttamente.');

        return redirect()->to('/admin/slider');
    }

    /**
     * Remove the specified Slider from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, SliderRepo $slider_repo)
    {
        $delete = $slider_repo->remove($id);

        return 'true';
    }

    protected function manageUploads($request)
    {
        $data = [];

        if($request->hasFile('immagine'))
        {
            $data['immagine'] = $request->file('immagine');
        }else{
            $data['immagine'] = false;
        }

        if($request->has('active'))
        {
            $data['active'] = $request->input('active');
        }else{
            $data['active'] = 0;
        }

        return $data;
    }

}
