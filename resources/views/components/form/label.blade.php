@props(['name'])

<label
    for="{{$name}}"
    class="form-label"
>{{ucwords($name)}}</label>
