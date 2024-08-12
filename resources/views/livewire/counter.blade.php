<div>
    <h1>Contador: {{$number}}</h1>
    <button wire:click="increment($event.target.innerText)">+1</button>
    <button wire:click="decrement($event.target.innerText)">-1</button>
</div>
