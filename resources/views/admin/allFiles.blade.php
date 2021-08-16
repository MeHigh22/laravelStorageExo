<div class="container mt-3">
    <h1 class="my-3">Fichiers uploadés</h1>

    <div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">File</th>
                <th scope="col"> </th>
                <th scope="col"> </th>
                <th scope="col"> </th>
              </tr>
            </thead>
            <tbody>
                @foreach ($store as $item)
                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>
                            @if (Str::after($item->src, '.') =='jpeg' || Str::after($item->src, '.') =='png' || Str::after($item->src, '.') =='jpg')
                                <img height="100px" src="{{asset('storage/img/'.$item->src)}}" alt="">
                            @else
                                <p>{{$item->src}}</p>
                            @endif
                        </td>
                        <td>
                            <a class="btn btn-warning" href="/edit-fichier/{{$item->id}}">EDIT</a>
                        </td>
                        <td>
                            <a class="btn btn-success" href="/download-fichier/{{$item->id}}">SAVE</a>
                        </td>
                        <td>
                            <form action="/delete-fichier/{{$item->id}}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger">DELETE</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>

    </div>
</div>
