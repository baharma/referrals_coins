<div class="row" wire:ignore.self>
    @foreach ($reveral as $item)
    <div class="col" data-aos="fade-up" data-aos-delay="100" wire:ignore.self>
        <div class="box">
            <h3>{{$item->plans}}</h3>
            <h4><sup>$</sup>{{$item->price}}<span>per month</span></h4>
            <ul>
                <li>
                    {{$item->description}}
                </li>
            </ul>
            <a class="buy-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop-{{$item->id}}">Get Started</a>
        </div>
    </div>
    <div class="modal fade" id="staticBackdrop-{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog modal-dialog-centered" wire:ignore.self>
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Refferals Code</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Add when you have Refferals when not just click done</p>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="" wire:model="referealCode.{{$item->id}}" >
                        <label for="floatingInput">Add Your Refferals</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" wire:click="addReferal('{{$item->id}}')">Done</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

<script>
    document.addEventListener('livewire:load', function () {
        Livewire.on('Notlogin', function () {
            Swal.fire({
                title: 'You Not Login',
                text: 'Please Login First',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes'
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emit('loginNow');
                }
            });
        })
        Livewire.on('dataDone', function () {
            Swal.fire({
                title: "Thank You For Pay",
                text: "You clicked the button!",
                icon: "success"
            });
            location.reload();
        })
    })
</script>
