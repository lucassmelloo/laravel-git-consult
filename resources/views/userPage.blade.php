<x-layout title="{{$user->login}}">
        <div class="container" style="display: flex;">
                <img src="{{$user->avatar_url}}" alt="" style="margin-right: 1rem;border-radius: 16px; width: 15rem;height: 15rem">
                <div style="display: inline-block;">
                        <h3>name: {{$user->name}}</h3>
                        <h3>followers: {{$user->followers}}
                        <h3>following: {{$user->following}}</h3>
                 </div>
                

        </div>
        <ul class="list-group">
        </ul>
</x-layout>