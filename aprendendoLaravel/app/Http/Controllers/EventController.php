<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();

        return view('welcome', ['events' => $events]);
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $event = new Event;

        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;

        //Upload de Imagens
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            //no banco é salvo o path da imagem, para manter a performance 
            $requestImage = $request->image;                                                                    //encapsulando
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now") . $extension);    //criando um nome para a imagem
            $requestImage->move(public_path('img/events'), $imageName);                                         //movendo a imagem para uma pasta

            $event->image = $imageName;                                                                         //salvar no banco o nome da imagem

        }

        $event->save();

        return redirect('/')->with('msg', 'Evento criado com sucesso!');
    }
}
