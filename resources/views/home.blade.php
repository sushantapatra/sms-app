<x-layout>
    <x-slot name="title">{{ $title }}</x-slot>
  
   @push('css')
        <script src="/example.css"></script>
    @endpush
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h2 class="m-0">Featured</h2>
                </div>
                <div class="card-body">
                    <h6 class="card-title">Special title treatment</h6>
                    <x-forminput name="Add Form">
                        Name: <input type="text" name="name">
                    </x-forminput>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>

               
            </div>
        </div>
    </div>
   
     @push('scripts')
        <script src="/example.js"></script>
    @endpush
</x-layout>