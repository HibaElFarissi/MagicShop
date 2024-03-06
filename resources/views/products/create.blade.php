{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body class="container">
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">name</label>
            <input type="text" class="form-control" id="name" placeholder="name" name="name">
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">slug</label>
            <input type="text" class="form-control" id="slug" placeholder="slug" name="slug">
        </div>
        <div class="mb-3">
            <div class="form-group">
                <label for="category_id" class="form-label">Category</label>
                <select name="category_id" id="category_id" class="form-select">
                    <option value="" selected disabled>Choose Your Category</option>

                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach

                </select>
            </div>
        </div>
        <div class="mb-3">
            <div class="form-group">
                <label for="brand_id" class="form-label">brand</label>
                <select name="brand_id" id="brand_id" class="form-select">
                    <option value="" selected disabled>Choose Your brand</option>

                    @foreach ($brands as $brand)
                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                    @endforeach

                </select>
            </div>
        </div>
        <div class="mb-3">
            <div class="form-group">
                <label for="color" class="form-label">color</label>
                <select name="colors[]" id="color" class="form-select" multiple='multiple'>
                    <option value="" selected disabled>Choose Your color</option>

                    @foreach ($colors as $color)
                        <option value="{{ $color->id }}">{{ $color->name }}</option>
                    @endforeach

                </select>
            </div>
        </div>
        <div class="mb-3">
            <div class="form-group">
                <label for="color" class="form-label">Size</label>
                <select name="sizes[]" id="color" class="form-select" multiple='multiple'>
                    <option value="" selected disabled>Choose Your Size</option>

                    @foreach ($sizes as $Size)
                        <option value="{{ $Size->id }}">{{ $Size->name }}</option>
                    @endforeach

                </select>
            </div>
        </div>

        </div>

        <div class="mb-3">
          <input type="file" multiple name="images[]">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">price</label>
            <input type="text" class="form-control" id="price" placeholder="price" name="price">
        </div>
        <div class="mb-3">
            <label for="old_price" class="form-label">old price</label>
            <input type="text" class="form-control" id="old_price" placeholder="old price" name="old_price">
        </div>
        <div class="mb-3">
            <label for="sold" class="form-label">sold</label>
            <input type="text" class="form-control" id="sold" placeholder="sold" name="sold">
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="text" class="form-control" id="quantity" placeholder="Quantity" name="quantity">
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">status</label>
            <input type="text" class="form-control" id="status" placeholder="status" name="status">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <textarea class="form-control" id="description" rows="3" name="description"></textarea>
        </div>

        <button>ENVOYER</button>
    </form>


</body>
</html> --}}
