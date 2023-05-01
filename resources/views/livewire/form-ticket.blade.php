<div class="form wow fadeIn">
    <div class="title text-center">
        <h2><span class="bold">Detalles</span> de compra</h2>
    </div>
    <form method="post">
        <input type="text" name="name" id="name" placeholder="Nombre" wire:model="nombre"/>
        <input type="text" name="email" id="email" placeholder="Email" wire:model="email" />
        {{-- <input type="text" name="subject" id="subject" placeholder="Nombre de la empresa" /> --}}
        <input type="text" name="subject" id="subject" placeholder="Direccion" wire:model="direccion" />
        <input type="text" name="subject" id="subject" placeholder="Región / Provincia"  wire:model="region" />
        <input type="text" name="subject" id="subject" placeholder="Ciudad" wire:model="ciudad" />
        <input type="text" name="subject" id="subject" placeholder="Codigo Postal" wire:model="codigo_postal" />
        <input type="text" name="subject" id="subject" placeholder="Telefono" wire:model="telefono" />
    </form>
    <button class="button-normal yellow" wire:click="pagar">Pagar</button>
</div>

@push("scripts")
    <script>

        window.addEventListener("controll_error", (e) => {
            Swal.fire('Compra','Debe llenar los campos para continuar','error');
        })

        window.addEventListener("loading", (e) => {
            Swal.fire({
                    html:'<div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>',
                    title: 'Cargando..',
                    showCloseButton: false,
                    showCancelButton: false,
                    focusConfirm: false,
                    showConfirmButton:false,
                })
                $(".swal2-modal").css('background-color', 'rgba(0, 0, 0, 0.0)');
                $(".swal2-title").css("color","white");
        })

        window.addEventListener("call_pgo_tbk", (e) => {
            let id_compra = e.detail.id_compra;
            new Promise((resolve, reject) => {
                resolve("estoy llamando a transbank"+ id_compra)
            }).then(res => {
                alert(res)
            })
        })


    </script>
@endpush
