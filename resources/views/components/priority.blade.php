@props(['priority'])

<div class="{{ 
    $priority === 'scazuta' ? 'text-green-500' :
    ($priority === 'medie' ? 'text-yellow-500' :
    ($priority === 'ridicata' ? 'text-red-500' : 'text-gray-500')) 
}}">
    {{ $priority }}
</div>

