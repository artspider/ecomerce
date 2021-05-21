<x-master>
  <div class="w-full flex flex-wrap p-10">
    @forelse ($shoes as $shoe)

    <div class="relative w-1/4 mr-4 mb-4 bg-white rounded-md shadow-md">
      <a href="shoes/{{$shoe->id}}">
        <img src="images/sneakers01.jpg" alt="Girl in a jacket" width="500" height="600">
        <div>
          <p class="text-sm font-semibold text-gray-800"> {{$shoe->marca}} - <span
              class="text-gray-600">{{$shoe->modelo}}</span></p>
        </div>
        {{$shoe->color}}

      </a>
      <form class="w-full max-w-lg" action="{{route('destroy', ['shoe' => $shoe->id])}}" method="post">
        @csrf
        @method('delete')
        <button type="submit" class=" ">
          <svg class="w-6 h-6 fill-current text-red-500 cursor-pointer absolute top-2 right-2"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path
              d="M16 9v4.501c-.748.313-1.424.765-2 1.319v-5.82c0-.552.447-1 1-1s1 .448 1 1zm-4 0v10c0 .552-.447 1-1 1s-1-.448-1-1v-10c0-.552.447-1 1-1s1 .448 1 1zm1.82 15h-11.82v-18h2v16h8.502c.312.749.765 1.424 1.318 2zm-6.82-16c.553 0 1 .448 1 1v10c0 .552-.447 1-1 1s-1-.448-1-1v-10c0-.552.447-1 1-1zm14-4h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.316c0 .901.73 2 1.631 2h5.711v2zm-1 2v7.182c-.482-.115-.983-.182-1.5-.182l-.5.025v-7.025h2zm3 13.5c0 2.485-2.017 4.5-4.5 4.5s-4.5-2.015-4.5-4.5 2.017-4.5 4.5-4.5 4.5 2.015 4.5 4.5zm-3.086-2.122l-1.414 1.414-1.414-1.414-.707.708 1.414 1.414-1.414 1.414.707.708 1.414-1.414 1.414 1.414.708-.708-1.414-1.414 1.414-1.414-.708-.708z" />
          </svg>
        </button>
      </form>



      <a href="{{route('edit',['id' => $shoe->id])}}">
        <svg class="w-6 h-6 fill-current text-red-500 cursor-pointer absolute top-2 right-8"
          xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
          <path
            d="M1.439 16.873l-1.439 7.127 7.128-1.437 16.873-16.872-5.69-5.69-16.872 16.872zm4.702 3.848l-3.582.724.721-3.584 2.861 2.86zm15.031-15.032l-13.617 13.618-2.86-2.861 10.825-10.826 2.846 2.846 1.414-1.414-2.846-2.846 1.377-1.377 2.861 2.86z" />
        </svg>
      </a>

    </div>

    @empty

    @endforelse
  </div>


</x-master>