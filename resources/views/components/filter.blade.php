<div>
    <div class="inline-block w-full mb-3" x-data="{ open: false }">
        <div class="border-b border-gris-oscuro">
            <button type="button"
                class="inline-flex w-full justify-between gap-x-1.5 px-3 py-2 font-bold"
                id={{$id}} @click="open=!open">
                {{ $title }}
                <div>
                    <span x-show="!open">@svg("ico-down")</span>
                    <span x-show="open">@svg("ico-up")</span>
                </div>
            </button>
        </div>

        <div class="relative left-0 mt-2 p-3 origin-top-left focus:outline-none">
            <div class="py-1" role="none">
                <form method="POST" action="#" role="none">



                    @foreach ($option as $option)
                        <div>
                            <input class="border-gris-claro " type="checkbox" name="access-accesible"
                                id={{$option->id}}>
                            <label class="text-sm px-2" for="access-accesible">{{$option->name}}</label>
                        </div>
                        
                    @endforeach




            </div>
        </div>
    </div>
</div>
