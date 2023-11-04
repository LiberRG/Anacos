<div x-data="{ dropdown: false }">
    <div class="bg-blanco rounded-xl p-3 pb-1">
        <div id="content" class="flex gap-x-3">
            @if($pathImg != null)
            <span class="w-[15%] ">
                <div class="relative" id="" style="height:0;width:100%;padding-bottom:120%">
                    <div class="absolute w-full h-full flex justify-center">
                        <img class="w-full object-cover" src="{{$pathImg}}" alt="">
                    </div>
                </div>
            </span>
            @endif
            <div class="flex flex-col justify-between w-[85%]">
                <h1 class="uppercase">{{$title}}</h1>
                <p class="grow">{{$description}}</p>
                
                @if($contact != null)
                <div class="flex flex-wrap gap-x-3">
                    @if(isset($contact['telefono']))
                    <p class="text-start"><span>@svg("ico-telefono","text-negro/[0.6] h-3 w-auto mr-2 inline")</span>{{$contact['telefono']}}</p>
                    @endif
                    @if(isset($contact['email']))
                    <p class="text-start"><span>@svg("ico-email","text-negro/[0.6] h-3 w-auto mr-2 inline")</span>{{$contact['email']}}</p>
                    @endif
                </div>
                @endif

                @if($date != null)
                <div>
                    <p class="text-start"><span>@svg("ico-calendar","text-negro/[0.6] h-3 w-auto mr-2 inline")</span>{{$date}}</p>
                </div>
                @endif

            </div>
        </div>

        @if(count($details) != 0)
        <div x-bind:class="dropdown ? 'inline-block mt-3':'hidden'">            
            @if(isset($details['text']))
            <p class="text-start">{{$details['text']}}</p>
            @endif
            @if(isset($details['direction']))
            <p class="text-start"><span>@svg("ico-position-map","text-negro/[0.6] h-3 w-auto mr-2 inline")</span>{{$details['direction']}}</p>
            @endif
            @if(isset($details['web']))
            <p class="text-start"><span>@svg("ico-web","text-negro/[0.6] h-3 w-auto mr-2 inline")</span>
            <a href="http://{{$details['web']}}">{{$details['web']}}</a></p>
            @endif
        </div>
        @endif
        @if(count($details) != 0)
        <div class="flex justify-end items-center">
            <div class="grow flex justify-center text-gris-oscuro">
                <span @click="dropdown=!dropdown" x-bind:class="dropdown ? 'rotate-180':'rotate-0'">@svg("ico-down", "h-3 w-auto")</span>
            </div>
            @if(isset($details['score']))
            <div class="text-magenta-oscuro flex items-center">
                <p>{{ $details['score'] }}</p>
                <span>@svg("ico-star", "h-4 w-auto ml-1")</span>

            </div>
            @endif
        </div>
        @endif

    </div>
</div>