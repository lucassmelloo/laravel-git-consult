<x-layout title="Consulta de Usuarios">
    <form action="/salvar" method="POST">
        @csrf
        <div class="mb-3">
            <label for="user" class="form-label">Usuario</label>
            <input type="text" name= "user"id="user" class="form-control">
        </div>
        <button class="btn btn-primary mb-2" type="submit">Pesquisar</button>
    </form>
        <ul class="list-group">
        @foreach($users as $user)
            <li class="list-group-item" style="display: flex; justify-content: space-between; align-items:center;">
            <div style="display: inline-flex;">
                <img src ="{{$user->avatar_url}}" style="width: 50px;height: 50px; border-radius: 16px; margin:5px;">
                <div class="container" style="width:300px">
                    {{$user->name}}<br>
                    <strong>{{$user->login}}</strong>
                </div>
            </div>
            followers: {{$user->followers}}<br>
            following: {{$user->following}}
            <div style="justify-content:center">
                <a href= "/user/{{$user->login}}"><button class="btn btn-primary">Ver mais</button></a>
                <button class="btn btn-danger ">Excluir</button>
            </div>
            </li>
        @endforeach
        </ul>
</x-layout>