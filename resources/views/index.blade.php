@foreach ($rages as $rage)
     <li class="df-l">
         <a href="#" class="icon icon-ra icon-ra-sm"><i class="fa-solid fa-xmark"></i></a>
         <span>{{$rage->title}}</span>
     </li>
 @endforeach