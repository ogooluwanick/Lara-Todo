@props(["listItems"])

<ul class="item-list">
        
        @foreach($listItems as $item)
        <li class="">
                <form class=" donebtnForm" action="{{route('markDone',$item->id)}}"  method="post">
                        {{csrf_field()}}
                        <button  class=" donebtn" type="submit" style="margin-left: 1rem">Done?</button>
                </form>
                <p class="listItemName">{{$item->name}}  </p>
        </li>
        @endforeach

</ul>