<div style="background-color: {{$color}}; border: 1px solid red">
    <h1>{{$salutation}} {{ strtoupper($name) }}</h1>
    <select wire:model.live="salutation">
        @foreach ($salutationOptions as $option)
            <option value="{{$option}}">{{$option}}</option>
        @endforeach
    </select>
    <input type="color" wire:model.live="color">
</div>
