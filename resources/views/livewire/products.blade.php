<div>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"></h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    
    <div class="card-body table-responsive p-0">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Código de barra</th>
                    <th>Referencia</th>
                    <th>Desc. Corta</th>
                    <th>Stock</th>
                    <th>precio</th>
                    <th colspan="3">Acción</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                @forelse ($products as $product) 
                    <td>{{ $product['barcode'] }}</td>
                    <td>{{ $product['reference'] }}</td>
                    <td>{{ $product['short_desc'] }}</td>
                    <td>{{ $product['stock'] }}</td>
                    <td>{{ $product['price'] }}</td>
                    <td><a href="#" wire:click.prevent="showProduct({{ $product['id'] }})" class="link-primary"><i class="fas fa-eye"></i></a></td>
                    <td><a href="#" wire:click.prevent="editProduct({{ $product['id'] }})" class="link-success"><i class="fas fa-pencil-alt"></i></a></td>
                    <td><a href="#" wire:click.prevent="deleteProduct({{ $product['id'] }})" class="link-danger"><i class="fas fa-trash-alt"></i></a></td>        
                </tr>
    
                    @empty
    
                    <div class="alert alert-info alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-info"></i> No hay datos</h5>
                        No se encontraron clientes para mostrar.
                    </div>
                @endforelse
                
                
            
            </tbody>
        </table>
    </div>
    
    <div class="card-footer">
        {{-- {{ $clientes->links() }} --}}
    </div> 
</div>
