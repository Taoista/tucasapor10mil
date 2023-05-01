<div class="form wow fadeIn">
    <div class="title text-center">
        <h2><span class="bold">Contactar con</span> El dueño</h2>
    </div>
    <form method="post">
        <input type="text" name="name" id="name" placeholder="Nombre" wire:model="name"/>
        <input type="text" name="email" id="email" placeholder="Email" wire:model="email" />
        <input type="text" name="subject" id="subject" placeholder="Asunto" wire:model="asunto" />
        <textarea name="message" id="message" cols="45" rows="5" placeholder="Mensaje" wire:model="msg"></textarea>
    </form>
    <button class="button-normal yellow" wire:click="sned_contact" wire:loading.remove>Enviar</button>
    <button class="button-normal yellow" wire:target="sned_contact" wire:loading>Enviando....</button>
</div>


@push("scripts")
    <script>
        window.addEventListener("send_email", (e) => {
            Swal.fire('Consulta','Consulta enviada correctamente','success');
        })

        window.addEventListener("send_error", (e) => {
            Swal.fire('Consulta','Debe llenar los campos para continuar','error');
        })
    </script>
@endpush

