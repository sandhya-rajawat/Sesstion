<div>
    <!-- Well begun is half done. - Aristotle -->
     <h1>Profile page</h1>
     <!-- <h1>{{session('name')}}</h1> -->
     @if(session('name'))
     <h1>welcome {{session('name')}} </h1>
     @else
     <h1>NO you're user<a href='login'>login</a></h1>
     @endif
     <a href='logout'>logout</a>
</div>

