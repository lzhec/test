<div class="container">

    <table class="table">
        <thead>
        <tr>

            
            <th><a href="javascript:ajaxLoad('{{url('posts?field=title&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">Post Title</a>
                {{request()->session()->get('field')=='title'?(request()->session()->get('sort')=='asc'?'':''):''}}
            </th>

            <th style="vertical-align: middle">
                <a href="javascript:ajaxLoad('{{url('posts?field=description&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">
                    Description
                </a>
                {{request()->session()->get('field')=='description'?(request()->session()->get('sort')=='asc'?'':''):''}}
            </th>

            <th style="vertical-align: middle">
                <a href="javascript:ajaxLoad('{{url('posts?field=created_at&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">
                    Created At
                </a>
                {{request()->session()->get('field')=='created_at'?(request()->session()->get('sort')=='asc'?'':''):''}}
            </th>

            <th style="vertical-align: middle">
              <a href="javascript:ajaxLoad('{{url('posts?field=updated_at&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">
                Update At
              </a>
              {{request()->session()->get('field')=='updated_at'?(request()->session()->get('sort')=='asc'?'':''):''}}
            </th>
            
        </tr>
        </thead>
        <tbody>
        
        @foreach ($posts as $post)
          <tr>
            
            <td>{{ $post->title }}</td>
            <td >{{ $post->description }}</td>
            <td>{{ $post->created_at }}</td>
            <td>{{ $post->updated_at }}</td>
            
        </tr>
        @endforeach

        </tbody>
    </table>

        
</div>