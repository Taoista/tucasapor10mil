<div class="form-wrap">
    <div class="form-appointment">
        {{-- <form method="post" action="contact.php"> --}}
            <input type="text" name="name" id="name" placeholder="Nombre" wire:model="name"/>
            <input type="text" name="email" id="email" placeholder="Email" wire:model="email"/>
            <textarea name="message" id="message" cols="10" rows="2"
                placeholder="Mensaje" wire:model="msg"></textarea>
            <button class="button-normal yellow" wire:click="send_question" wire:loading.remove>Enviar consulta</button>
            <button class="button-normal yellow" wire:target="send_question" wire:loading>Enviando....</button>

        {{-- </form> --}}
    </div>
</div>

@push("scripts")
    <script>
        window.addEventListener("send_query", (e) => {
            Swal.fire('Consulta','Consulta enviada correctamente','success');
        })

        window.addEventListener("send_error", (e) => {
            Swal.fire('Consulta','Debe llenar los campos para continuar','error');
        })
    </script>
@endpush
