@foreach($quartiers as $quartier)
{{$quartier->id}}
{{$quartier->nom}}
{{$quartier->commune->nom}}
@endforeach