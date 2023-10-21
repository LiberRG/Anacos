<div>
    <form action="" method="POST" class="my-6">
        <div class="border rounded-xl border-solid border-gris-claro/[0.5] mt-8  p-1">
            <input class="border-none" type="email" name="email">
        </div>
        <div x-data="{ show: false }" class="border rounded-xl border-solid border-gris-claro/[0.5] mt-8  p-1 flex flex-row justify-between items-center">
            <input :type=" show ? 'text': 'password' " name="password" id="password" class="grow w-fit border-none focus:ring-0 m-0" type="password">
            <button type="button" class="flex items-center justify-center m-2 ml-0" @click="show = !show">
                <svg x-show="!show" class="w-5 h-5 hidden lg:inline" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path></svg>
                <svg x-show="show" class="w-5 h-5 hidden lg:inline" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="display: none;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
            </button>            
        </div>
        <div class="mt-8">
            <button class="boton w-full" type="submit" name="send" id="send">Acceder</button>
        </div>
    </form>
    <div class="text-center w-full">
        <a class="underline hover:font-bold" href="">¿Ha olvidado su contraseña?</a>
    </div>
</div>