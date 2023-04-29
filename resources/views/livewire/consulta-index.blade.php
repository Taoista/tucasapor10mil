<div class="form-wrap">
    <div class="form-appointment">
        {{-- <form method="post" action="contact.php"> --}}
            <input type="text" name="name" id="name" placeholder="Nombre" wire:model="name"/>
            <input type="text" name="email" id="email" placeholder="Email" wire:model="email"/>
            <textarea name="message" id="message" cols="10" rows="2"
                placeholder="Mensaje"></textarea>
            <button class="button-normal yellow" wire:click="send_question">Enviar consulta</button>
        {{-- </form> --}}
    </div>
</div>
