@foreach($posts as $post)
<div class="blog-post">
    <h2 class="blog-post-title"><a href="/posts/{{$post->post_id}}">{{$post->post_title}}</a></h2>
    <p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}} by {{$post->user->name}}</p>
    @if($post->post_image)
    <p><img src="storage/{{$post->post_image}}" class="img-responsive" width="300" height="200" /></p>
    @endif
    <p>{{str_limit($post->post_text, 500)}}</p>
    <p><a href="/posts/{{$post->post_id}}">Read more</a></p>
    
</div><!-- /.blog-post -->

@endforeach