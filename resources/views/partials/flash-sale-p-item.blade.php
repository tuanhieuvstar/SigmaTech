@php
    //biến chung
    $product_id = $product->id;
    $category_id = $product->category_id;
    $name = $product->name;
    $price = $product->attributes->firstWhere('name', 'Price')->pivot->value ?? 'N/A';
    $dealprice = $product->attributes->firstWhere('name', 'Deal Price')->pivot->value ?? 'N/A';
    $rating = $product->attributes->firstWhere('name', 'Rating')->pivot->value ?? 'N/A';
    $brand = $product->attributes->firstWhere('name', 'Brand')->pivot->value ?? 'N/A';
    $model = $product->attributes->firstWhere('name', 'Model')->pivot->value ?? 'N/A';

    $pcpart_type = $product->attributes->firstWhere('name', 'Loại linh kiện')->pivot->value ?? 'N/A';

    //biến riêng, cho laptop
    $laptop_type = $product->attributes->firstWhere('name', '[Laptop] Loại laptop')->pivot->value ?? 'N/A';
    $laptop_cpu = $product->attributes->firstWhere('name', '[Laptop] Vi xử lý')?->pivot->value ?? 'N/A';
    $laptop_ssd_capacity =
        $product->attributes->firstWhere('name', '[Laptop] Dung lượng ổ cứng')?->pivot->value ?? 'N/A';
    $laptop_gpu = $product->attributes->firstWhere('name', '[Laptop] Card đồ hoạ')?->pivot->value ?? 'N/A';
    $laptop_mon_size = $product->attributes->firstWhere('name', '[Laptop] Kích thước màn hình')?->pivot->value ?? 'N/A';
    $laptop_mon_res = $product->attributes->firstWhere('name', '[Laptop] Độ phân giải')?->pivot->value ?? 'N/A';
    $laptop_ram = $product->attributes->firstWhere('name', '[Laptop] Dung lượng RAM')?->pivot->value ?? 'N/A';
    $laptop_ssd = $product->attributes->firstWhere('name', '[Laptop] Ổ cứng')?->pivot->value ?? 'N/A';
    $laptop_os = $product->attributes->firstWhere('name', '[Laptop] OS')?->pivot->value ?? 'N/A';
    $laptop_color = $product->attributes->firstWhere('name', '[Laptop] Màu sắc')->pivot->value ?? 'N/A';
    $thumbnail = $product->attributes->firstWhere('name', 'Thumbnail')?->pivot->value ?? 'N/A';

    //flash sale
    $saleprice = $product->attributes->firstWhere('name', 'Sale Price')->pivot->value;
    $sale_start_date = $product->attributes->firstWhere('name', 'Sale Start Date')->pivot->value ?? 'N/A';
    $sale_end_date = $product->attributes->firstWhere('name', 'Sale End Date')->pivot->value;
    $sale_end_time = strtotime($sale_end_date);
@endphp
@php
    $discountPercentage = 0;

    if (isset($saleprice)) {
        $discountPercentage = round((1 - $saleprice / $price) * 100);
    }
@endphp
<div class="deal-item">
    <a href="{{ url("$product->link") }}" class="p-name" target="_blank">
        <img src="{{ url("$thumbnail") }}" class="mx-auto"
            target="_blank" alt="{{ $name }}">
    </a>

    <div class="p-text">
        @if ($laptop_type != 'N/A')
            <a href="{{ url("$product->link") }}" class="p-name" target="_blank" title="{{ $name }}">
                <b>{{ $name }} ({{ $laptop_cpu }} | {{ $laptop_ram }} | {{ $laptop_ssd_capacity }} |
                    {{ $laptop_gpu }} | {{ $laptop_mon_size }} | {{ $laptop_os }} | {{ $laptop_color }})</b>
            </a>
        @else
            <a href="{{ url("$product->link") }}" class="p-name" target="_blank">
                <b>{{ $name }} </b>
            </a>
        @endif

        <div class="p-price-group">
            <span class="p-price">{{ number_format($saleprice, 0, ',', '.') }}<u>đ</u></span>
            <span class="p-discount">{{ $discountPercentage }} %</span>
            <p class="p-old-price">{{ number_format($price, 0, ',', '.') }}<u>đ</u></p>
        </div>

        <div class="p-status-group">
            <span> Còn lại ? sản phẩm </span>
            <span class="p-deal-line" style="width: 100%"></span>
        </div>

        <div class="p-deal-countdown js-deal-time-holder" sale-end-time="{{ $sale_end_time }}">Kết thúc sau
            <span class="js-hour"> 00 </span> <span>:</span>
            <span class="js-minute"> 00 </span> <span>:</span>
            <span class="js-seconds"> 00 </span>
        </div>

        <a href="javascript:void(0)" class="p-btn-buy"
            onclick="document.getElementById('buyNowForm-{{ $product_id }}-{{ $category_id }}').submit();">
            MUA GIÁ SỐC</a>
        <form id="buyNowForm-{{ $product_id }}-{{ $category_id }}" action="{{ route('buynow') }}" method="POST"
            style="display: none;">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product_id }}">
            @if ($category_id == 1 || $category_id == 2)
                {{ $product_type = 'laptop' }}
            @elseif ($category_id == 4)
                {{ $product_type = 'monitor' }}
            @elseif ($pcpart_type == 'cpu')
                {{ $product_type = 'cpu' }}
            @elseif ($pcpart_type == 'gpu')
                {{ $product_type = 'gpu' }}
            @elseif ($category_id == 5)
                {{ $product_type = 'gaminggear' }}
            @elseif ($category_id == 6)
                {{ $product_type = 'media' }}
            @elseif ($category_id == 7)
                {{ $product_type = 'cooling' }}
            @elseif ($category_id == 8)
                {{ $product_type = 'accessory' }}
            @endif
            <input type="hidden" name="product_type" value="{{ $product_type }}">
            <input type="hidden" name="product_name" value="{{ $name }}">
            <input type="hidden" name="quantity" value="1" min="1">

        </form>

        <a href="{{ url("$product->link") }}" class="p-link" target="_blank">Xem sản phẩm</a>
    </div>
</div>
